import Vuex from 'vuex';

export default new Vuex.Store({
  state: {
    loading: false
  },

  getters: {

  },

  mutations: {
    setLoading(state, status) {
      state.loading = status;
    }
  },

   actions: {

   }
});
