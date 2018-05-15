
window._ = require('lodash');
window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';
import VueRouter from 'vue-router';
import VueAxios  from 'vue-axios';
// import VueResource from 'vue-resource';
import router from './router';

Vue.router = router;
Vue.use(VueAxios, axios);
// Vue.use(VueResource);
Vue.use(VueRouter);
Vue.use(require('@websanova/vue-auth'), {
  auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
  http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
  router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js')
})

// Vue.http.options.root = 'https://api-demo.websanova.com/api/v1';
Vue.axios.defaults.baseURL = 'https://api-demo.websanova.com/api/v1';

window.Vue = Vue;
