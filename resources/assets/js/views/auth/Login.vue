<template lang="html">
  <section class="login">
    <form @submit.prevent="onSubmit">
      <label for="email">E-mail</label>
      <input type="email" name="email" v-model="email" placeholder="name@mabr.com">
      <label for="password">Password</label>
      <input type="password" v-model="password">
      <input type="submit">
    </form>
  </section>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: ''
    }
  },

  methods: {
    onSubmit() {
      console.log(this.email, this.password)
      this.$auth.login({
        params: {
          email: this.email,
          password: this.password
        },
        success: function(res) {
          console.log(res)
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
