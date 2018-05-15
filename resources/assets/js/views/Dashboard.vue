<template>
  <section class="dashboard">
    <header>
      <div class="row column">
        <h5>Dashboard</h5>
        <div class="main">
          <h1 v-text="currentDay"></h1>
          <three-dots></three-dots>
          <h1 v-text="currentDate"></h1>
        </div>
      </div>
    </header>

    <section class="intro">
      <div class="row column">
        <div class="welcome">
          <h2>Welcome {{ $auth.user().first_name }}</h2>

          <div class="panel">
            <div class="panel--header">
              <i class="oa-announcement"></i>
              Announcements
            </div>

            <ul class="menu dotted verticle">
              <li>
                <a>Announcement Title</a>
              </li>
            </ul>

            <div class="panel--footer">
              <a>
                Older
                <i class="oa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="stats">
      <div class="row">
        <div class="large-4 infobar-4 medium-12 small-12 columns">
          <div class="box">
            <div class="icon">
              <i class="oa-gavel"></i>
            </div>

            <div class="stat">
              <span class="number">1,900</span>
              <span class="title">Statistic Title</span>
            </div>
          </div>
        </div>
        <div class="large-4 infobar-4 medium-12 small-12 columns">
          <div class="box goldenrod">
            <div class="icon">
              <i class="oa-scale"></i>
            </div>

            <div class="stat">
              <span class="number">1,900</span>
              <span class="title">Statistic Title</span>
            </div>
          </div>
        </div>
        <div class="large-4 infobar-4 medium-12 small-12 columns">
          <div class="box red">
            <div class="icon">
              <i class="oa-court"></i>
            </div>

            <div class="stat">
              <span class="number">1,900</span>
              <span class="title">Statistic Title</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news">
      <div class="row column">
        <div class="panel">
          <div class="panel--header border-bottom">
            <div class="title">
              <div class="heading">
                <i class="oa-article"></i>
                <p>News Banner</p>
              </div>

              <div class="subheading">
                <h4>News Title</h4>
                <p>News Type <span>|</span> 01.01.2018</p>
              </div>
            </div>
          </div>

          <div class="panel--content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloribus deserunt dolor error fugit mollitia laborum qui sit iure facilis ratione autem ea nihil id alias, eum molestias excepturi totam?
            </p>
          </div>

          <div class="panel--footer">
            <button class="teal icon button">
              <i class="oa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="large-6 medium-6 small-12 columns">
          <div class="panel">
            <div class="panel--header border-bottom">
              <div class="title">
                <div class="heading">
                  <i class="oa-article"></i>
                  <p>News Banner</p>
                </div>

                <div class="subheading">
                  <h4>News Title</h4>
                  <p>News Type <span>|</span> 01.01.2018</p>
                </div>
              </div>
            </div>

            <div class="panel--content">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloribus deserunt dolor error fugit mollitia laborum qui sit iure facilis ratione autem ea nihil id alias, eum molestias excepturi totam?
              </p>
            </div>

            <div class="panel--footer">
              <button class="teal icon button">
                <i class="oa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="large-6 medium-6 small-12 columns">
          <div class="panel">
            <div class="panel--header border-bottom">
              <div class="title">
                <div class="heading">
                  <i class="oa-article"></i>
                  <p>News Banner</p>
                </div>

                <div class="subheading">
                  <h4>News Title</h4>
                  <p>News Type <span>|</span> 01.01.2018</p>
                </div>
              </div>
            </div>

            <div class="panel--content">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia doloribus deserunt dolor error fugit mollitia laborum qui sit iure facilis ratione autem ea nihil id alias, eum molestias excepturi totam?
              </p>
            </div>

            <div class="panel--footer">
              <button class="teal icon button">
                <i class="oa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="calendar">
      <div class="row column">
        <div class="panel">
          <div class="panel--header">
            <div class="title">
              <div class="heading">
                <i class="oa-calendar"></i>
                <p>Calendar</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-links">
      <div class="row column">
        <div class="panel">
          <div class="panel--header">
            <div class="title">
              <div class="heading">
                <i class="oa-reply"></i>
                <p>Site Links</p>
              </div>
            </div>
          </div>
          <table class="table table--list unstriped">
            <tbody>
              <tr>
                <td>
                  Anaqua
                </td>
                <td class="has-button">
                  <a class="teal icon button">
                    <i class="oa-arrow-right"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  LMS
                </td>
                <td class="has-button">
                  <a class="teal icon button">
                    <i class="oa-arrow-right"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  Health Equity
                </td>
                <td class="has-button">
                  <a class="teal icon button">
                    <i class="oa-arrow-right"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <footer>
      <div class="text-center">
        <five-dots></five-dots>
      </div>
    </footer>
  </section>
</template>

// <script>
//   import moment from 'moment';
//
//   export default {
//     data() {
//       return {
//         currentDay: '',
//         currentDate: ''
//       }
//     },
//
//     props: [],
//     components: {},
//     methods: {},
//     created() {
//       this.currentDay = moment().format('dddd');
//       this.currentDate = moment().format('MMMM MM, Y');
//     },
//     mounted() {
//       this.$store.commit('setLoading', false);
//     }
//   }
// </script>
