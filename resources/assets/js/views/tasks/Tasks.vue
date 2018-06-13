<template lang="html">
  <table>
    <thead>
      <tr>
        <th>title</th>
        <th>attorney</th>
        <th>created date</th>
        <th>due</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="task in tasks">
        <td>{{ task.title }}</td>
        <td>{{ task.person_id }}</td>
        <td>{{ task.created_at }}</td>
        <td>{{ task.due }}</td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  data() {
    return {
      tasks: [],
      pagination: {
        total: 0,
        perPage: 5
      },
    }
  },

  methods: {
    getTasks(page = 1) {
      this.axios({
        url: '/tasks',
        method: 'get',
        params: {
          page: page
        }
      }).then(data => {
        this.tasks = data.data;
        console.log(data)
      })
    },

    goToPage(page) {
      this.getTasks(page);
    }
  },

  created() {
    this.getTasks();
  }
}
</script>

<style lang="scss">
</style>
