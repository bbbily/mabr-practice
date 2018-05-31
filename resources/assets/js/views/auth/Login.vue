<template lang="html">
  <section class="login">
    <form @submit.prevent="onSubmit">
      <label for="email">E-mail</label>
      <input type="email" name="email" v-model="email" placeholder="name@mabr.com">
      <label for="password">Password</label>
      <input type="password" v-model="password">
      <input type="submit">
    </form>
    <span
        v-if="error"
        v-text="error"
        class="form-error is-visible form-error--info"></span>
  </section>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
      error: ''
    }
  },

  methods: {
    onSubmit() {
      this.$auth.login({
        params: {
          email: this.email,
          password: this.password
        },
        success: function(res) {
        },
        error: function(error) {
          console.log(error.response.data)
          this.error = error.response.data.error;
        },
        redirect: '/',
        fetchUser: true,
      })
      // axios({
      //   url: '/auth/login',
      //   method: 'post',
      //   data: this.data
      // }).then(data => {
      //   console.log(data)
      // })
    }
  }
}
</script>

<style lang="scss">
</style>
