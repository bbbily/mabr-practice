import VueRouter from 'vue-router';

let routes = [
  {
    path: '/',
    component: require('./views/Dashboard.vue'),
    meta: {
      auth: true
    }
  },
  {
    path: '/login',
    component: require('./views/auth/Login.vue')
  },
  {
    path: '/tasks',
    component: require('./views/tasks/Tasks.vue')
  },
  {
    path: '/people',
    component: require('./views/people/People.vue')
  },
  {
    path: '/people/:id',
    component: require('./views/people/ViewPerson.vue'),
    props: true
  },
  {
    path: '/people/:id/edit',
    component: require('./views/people/EditPerson.vue'),
    props: true
  },
  {
    path: '/resources/news/create',
    component: require('./views/resources/news/AddNew.vue'),
    props: true
  },
];

export default new VueRouter({
  routes
})
