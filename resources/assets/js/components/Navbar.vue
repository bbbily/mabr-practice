
<template lang="html">
  <nav class="navbar"  v-if="$auth.ready()">
    <ul>
      <router-link class="logo show-for-medium" tag="li" to="/" exact>
      </router-link>

      <router-link tag="li" to="/" exact>
        <a>
          <i class="oa-home"></i>
          Home
        </a>
      </router-link>

      <router-link tag="li" to="/tasks">
        <a>
          <i class="oa-clipboard"></i>
          Tasks
        </a>
      </router-link>

      <router-link tag="li" to="/people">
        <a>
          <i class="oa-profile"></i>
          People
        </a>
      </router-link>

      <router-link tag="li" to="/clients">
        <a>
          <i class="oa-briefcase"></i>
          Clients
        </a>
      </router-link>

      <li class="has-submenu">
        <a>
          <i class="oa-calendar"></i>
          Tools
        </a>
        <ul class="menu dotted vertical" style="display:none">
          <li><a href="#">Calendar</a></li>
          <li><a href="#">Time Entry</a></li>
        </ul>
      </li>

      <router-link tag="li" to="/documents">
        <a>
          <i class="oa-document"></i>
          Documents
        </a>
      </router-link>

      <!-- <li
      :class=""
      class="has-submenu">
        <a>
          <i class="oa-folders"></i> Resources
        </a>

        <ul class="menu dotted vertical" style="display:none">
          <router-link tag="li" :to="{ name: 'newsEvents' }">
            <a href="#">News & Events</a>
          </router-link>
          <router-link tag="li" :to="{ name: 'marketingCollateral' }">
            <a href="#">Marketing Collateral</a>
          </router-link>
        </ul>
      </li> -->

      <!-- <li
      v-if="$auth.check('admin')" class="has-submenu">
        <a>
          <i class="oa-settings"></i> Settings
        </a>
        <ul class="menu dotted vertical" style="display:none">
          <router-link tag="li" :to="{ name: 'faqs' }">
            <a href="#">FAQ's</a>
          </router-link>
          <router-link tag="li" :to="{ name: 'siteLinks' }">
            <a href="#">Site Links</a>
          </router-link>
          <router-link tag="li" :to="{ name: 'locations' }">
            <a href="#">Locations</a>
          </router-link>
          <router-link tag="li" :to="{ name: 'announcements' }">
            <a href="#">Announcements</a>
          </router-link>
          <router-link tag="li" :to="{ name: 'shoutOuts' }">
            <a href="#">Shout-Outs</a>
          </router-link>
        </ul>
      </li> -->
    </ul>
  </nav>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
