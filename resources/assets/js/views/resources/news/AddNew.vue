<template lang="html">
  <div class="test">
    <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions"></vue-dropzone>
    <a class="a">tets</a>
  </div>

</template>

<script>
import vue2Dropzone from 'vue2-dropzone'
import 'vue2-dropzone/dist/vue2Dropzone.min.css'
export default {
  data() {
    return {
      dropzoneOptions: {
        url: 'https://httpbin.org/post',
        // thumbnailWidth: 150,
        // maxFilesize: 0.5,
        headers: { "My-Awesome-Header": "header value" }
      }
    }
  },

  components: {
    vueDropzone: vue2Dropzone
  },
}
</script>

<style lang="scss">
  .test {
    .a {
      background: red;
    }
  }
</style>
