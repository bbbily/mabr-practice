<template>
  <section class="dashboard">
    <header>
      <p>Dashboard</p>
      <div class="heading">
        <h1>Monday</h1>
        ...
        <h1>January</h1>
      </div>
    </header>

    <div class="hero">
      <h2>Welcome name</h2>
      <div class="annoucements">
        <h3>Announcements</h3>
      </div>
    </div class="hero">

    <section class="stats">
      <div class="stat">

      </div>
      <div class="stat">

      </div>
      <div class="stat">

      </div>
    </section>
  </section>
</template>

<script>
export default {
}
</script>

<style lang="scss">
@import "../../sass/variables";
  .dashboard {
    background: $gray;

    header .heading {
      display: flex;
    }

    .hero {
      background: lightblue;
      height: 50vw;
    }
  }
</style>
