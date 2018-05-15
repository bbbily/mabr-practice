import VueRouter from 'vue-router';

let routes = [
  {
    path: '/dashboard',
    component: require('./views/Dashboard.vue')
  },
  {
    path: '/tasks',
    component: require('./views/tasks/Tasks.vue')
  },
  {
    path: '/people',
    component: require('./views/people/People.vue')
  },
];

export default new VueRouter({
  routes
})
