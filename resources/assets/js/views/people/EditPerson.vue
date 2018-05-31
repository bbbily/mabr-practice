<template lang="html">
  <section class="edit-profile">
    <div class="user-info">
      <form class="edit-form" @submit.prevent="onSubmit">
        <label for="firstname">firstname:</label>
        <input type="text" v-model="person.first_name">
        <label for="lastname">lastname:</label>
        <input type="text" v-model="person.last_name">
        <label for="title">title:</label>
        <input type="text" v-model="person.title">
        <label for="departments">departments:</label>
        <select name="departments" id="departments" v-model="person.department_id">
          <option v-for="i in this.departments" :value="i.id">{{ i.name }}</option>
        </select>
        <input type="submit" name="" value="submit">
      </form>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      person: {},
      departments: []
    }
  },

  props: ['id'],

  watch: {
    '$route'(to, from) {
      console.log(to);
      this.getPerson();
    }
  },

  methods: {
    getPerson() {
      this.axios({
        url: `/people/${this.id}/edit`,
        method: 'get'
      }).then(data => {
        this.person = data.data.person;
        this.departments = data.data.departments;
        console.log(data)
      })
    },

    onSubmit() {
      console.log('sub')
      this.axios({
        url:`/people/${this.id}`,
        method: 'put',
        data: this.person
      }).then(data => console.log(data))
    }
  },

  created() {
    console.log('create')
    if (this.id !== this.$auth.user().id && !this.$auth.check('admin')) {
          this.$router.push({path: '/error403'});
          return;
        }
    this.getPerson();
  }
}
</script>

<style lang="css">
</style>
