<template lang="html">
  <aside  v-if="$auth.ready()">
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
