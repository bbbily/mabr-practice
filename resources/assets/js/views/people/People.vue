<template>
  <section class="people">
    <header>
      <div class="row column">
        <h5>People</h5>
        <div class="main">
          <h1>View All People</h1>
        </div>
      </div>
    </header>

    
    <section class="list">
      <div class="row column">
        <div class="small-12 text-right" v-if="$auth.check('admin')">
          <section class="padded">
            <button class="small teal dropdown actions button" data-toggle="people-actions">
              Actions
              <!-- <zf-dropdown id="people-actions">
                <ul>
                  <router-link tag="li" :to="{name: 'addPerson'}">
                    Add
                    <i class="oa-plus"></i>
                  </router-link>
                </ul>
              </zf-dropdown> -->
            </button>
          </section>
        </div>
        <div class="panel">
          <div class="panel--header">
            <div class="title">
              <div class="heading">
                <i class="oa-profile"></i>
                <p>People</p>
              </div>
            </div>
          </div>
          <table class="table table--list unstriped links" v-if="!loading && people.length">
            <thead>
              <tr>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Phone
                </th>
              </tr>
            </thead>
            <tbody>
              <router-link
              v-for="person in people"
              tag="tr"
              :to="{name: 'viewPerson', params: { id: person.id }}"
              :key="person.id">
                <td v-text="person.full_name"></td>
                <td v-text="person.email"></td>
                <td v-text="person.direct_phone"></td>
              </router-link>
            </tbody>
          </table>

          <section class="padded" v-if="!loading && !people.length">
            <div class="column row text-center">
              <h5 class="text-white">Nothing here...</h5>
            </div>
          </section>
        </div>
<!--
        <zf-pagination
        @paginate="goToPage"
        :data="pagination">
        </zf-pagination> -->
      </div>
    </section>
  </section>
</template>

<script>
  export default {
    data() {
      return {
        people: [],
        pagination: {},
      }
    },

    computed: {
      loading() {
        return this.$store.state.loading;
      }
    },

    watch: {
      '$route.query.page': function(page) {
        this.getPeople(page);
      }
    },

    methods: {
      getPeople(page) {
        this.$store.commit('setLoading', true);

        this.$http.get('/people', {
          params: {
            page: page,
          }
        })
        .then(({data}) => {
          this.$set(this, 'people', data.data);
          this.pagination = data;
        })
        .catch((err) => console.error(err))
        .then(() => this.$store.commit('setLoading', false));
      },

      goToPage(page) {
        this.$router.push({name: 'people', query: {page: page}})
      }
    },
    created() {
      this.getPeople();
    },
    mounted() {}
  }
</script>
