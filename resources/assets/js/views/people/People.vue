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
          <table class="table table--list unstriped links" v-if="people.length">
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
              :to="`/people/${person.id}`"
              :key="person.id">
                <td v-text="person.first_name"></td>
                <td v-text="person.email"></td>
                <td v-text="person.direct_phone"></td>
              </router-link>
            </tbody>
          </table>

          <!-- <section class="padded" v-if="!loading && !people.length">
            <div class="column row text-center">
              <h5 class="text-white">Nothing here...</h5>
            </div>
          </section> -->
        </div>
        <ul>
          <li v-for="i in pages" v-text="i" @click="goToPage(i)"></li>
        </ul>
      </div>
    </section>
  </section>
</template>

<script>
  export default {
    data() {
      return {
        people: [],
        pagination: {
          total: 0,
          per_page: 1
        },
      }
    },

    computed: {
      pages() {
        // if (this.pagination.hasOwnProperty('total')) {
        // }
        // else {
        //   return 1;
        // }
        return Math.ceil(this.pagination.total / this.pagination.per_page);
      }
    },

    watch: {
      '$route': function(to, from) {
        this.getPeople(to.query.page);
        console.log(to.query.page)
      }
    },

    methods: {
      getPeople(page) {

        this.$http.get('/people', {
          params: {
            page: page,
          }
        })
        .then(({data}) => {
          this.people = data.data;
          for (var prop in data) {
            if (prop !== 'data') {
              this.pagination[prop] = data[prop];
            }
          }
          console.log(this.pagination)
          // this.$set(this, 'people', data.data);
          // this.pagination = data;
        })
        .catch((err) => console.error(err))
        // .then(() => this.$store.commit('setLoading', false));
      },

      goToPage(page) {
        this.$router.push({path: '/people', query: {page: page}})
      }
    },
    created() {
      this.getPeople(this.$route.query.page);
      console.log('created')
    },
    mounted() {}
  }
</script>
