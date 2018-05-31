<template lang="html">
  <aside  v-if="$auth.check()">
    <section class="info">
      <div class="person">
        <router-link tag="li" to="/people">
          <a>
            <img src="" alt="avatar">
          </a>
        </router-link>

        <h4 v-text="$auth.user().first_name"></h4>
      </div>
      <div class="icons">
        <ul>
          <li><router-link :to="`/people/${$auth.user().id}`">View Profile</router-link></li>
          <li><a @click="$auth.logout()">Log Out</a></li>
        </ul>
      </div>
    </section>

    <section class="search">
      <input type="text" placeholder="Search...">
    </section>

    <section class="forms-progress">

    </section>

    <section class="quick-links">
      <h5>Quick Links</h5>
      <ul>

      </ul>
    </section>
  </aside>

</template>

<script>
export default {
  data() {
    return {

    }
  },

  methods: {

  }
}
</script>

<style lang="css">
</style>
