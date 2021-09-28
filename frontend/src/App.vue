<template>
  <div id="app">
    <NavBar />
    <router-view/>
  </div>
</template>

<script>
import NavBar from "@/components/layout/NavBar";

export default {
  name: "App",
  components: {
    NavBar: NavBar
  },
  data() {
    return {

    }
  }
}
</script>

<style lang="scss">
  @import 'styles/_custom.scss';
</style>
