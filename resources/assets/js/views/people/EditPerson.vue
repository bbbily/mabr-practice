<template lang="html">
  <section class="edit-profile">
    <div class="user-info">
      <form class="edit-form" @submit.prevent="onSubmit">
        <img :src="image" alt="image">
        <label for="firstname">firstname:</label>
        <input type="text" v-model="person.first_name">
        <label for="lastname">lastname:</label>
        <input type="text" v-model="person.last_name">
        <label for="title">title:</label>
        <input type="text" v-model="person.title">
        <label for="departments">departments:</label>
        <select name="departments" id="departments" v-model="person.department_id">
          <option v-for="i in departments" :value="i.id">{{ i.name }}</option>
        </select>
        <label for="image">Edit Image:</label>
        <a href="#" @click.prevent="updateImage">Add Image</a>
        <input type="file" @change="editImage">
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
      departments: [],
      image: null,
      updatedImage: null
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
        url: `/people/${this.id}/edit`,
        method: 'get'
      }).then(data => {
        this.person = data.data.person;
        this.departments = data.data.departments;
        this.image = data.data.person.image;
      })
    },

    onSubmit() {
      console.log('sub')
      this.axios({
        url:`/people/${this.id}`,
        method: 'put',
        data: this.person
      }).then(data => console.log(data))
    },

    editImage(e) {
      this.updatedImage = e.target.files[0];
      this.image = URL.createObjectURL(this.updatedImage);
    },

    updateImage() {
      let formData = new FormData();
      formData.append('image', this.updatedImage);
      console.log(formData.get('image'), 'image')
      this.axios({
        url: `/people/${this.id}/image`,
        data: formData,
        method: 'post',
        headers: {
          // 'Content-Length': this.imageFile.size,
          'Content-Type': 'multipart/form-data'
        }
      }).then(data => console.log(data))
    }
  },

  created() {
    console.log('create')
    if (this.id * 1 !== this.$auth.user().id && !this.$auth.check('admin')) {
          this.$router.push({path: '/error403'});
          return;
        }
    this.getPerson();
  }
}
</script>

<style lang="css">
</style>
