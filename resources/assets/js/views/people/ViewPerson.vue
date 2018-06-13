<template lang="html">
  <section class="view-profile">
    <div class="user-infor">
      <p>User Profile</p>
      <h3 v-text="person.first_name + ' ' + person.last_name"></h3>
      <h3 v-text="person.title"></h3>
    </div>
    <div class="tasks-info">
      <h2>Tasks</h2>
      <ul>
        <li v-for="task in tasks">
          <p>title: {{ task.title }}</p>
          <p>due: {{ task.due }}</p>
        </li>
      </ul>
    </div>

    <div class="edit" v-if="$auth.check('admin') || $auth.user().id === id * 1">
      <router-link :to="`/people/${id}/edit`">Edit</router-link>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      person: {},
      tasks: []
    }
  },

  props: ['id'],

  watch: {
    '$route'(to, from) {
      this.getPerson();
    }
  },

  methods: {
    getPerson() {
      this.axios({
        url: `/people/${this.id}`,
        method: 'get'
      }).then(data => {
        this.person = data.data;
        this.tasks = data.data.tasks;
      })
    }
  },

  created() {
    console.log('create')
    this.getPerson();
  }
}
</script>

<style lang="css">
</style>
