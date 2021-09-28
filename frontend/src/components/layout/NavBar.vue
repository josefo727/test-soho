<template>
  <div class="col-12">
    <b-navbar toggleable="lg">
      <router-link
          custom
          :to="{ name: 'Index'}"
          v-slot="{ href, navigate }"
      >
        <b-navbar-brand @click="navigate">
          <img class="nav-bar-logo" src="/images/logo.png" alt="Soho">
        </b-navbar-brand>
      </router-link>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>

        <!-- Right aligned nav items -->
        <b-navbar-nav class="routes">
            <template v-for="(route, index) in routes">
              <router-link
                  class="mx-3"
                  :key="index"
                  custom
                  :to="{ name: route.name}"
                  v-slot="{ href, navigate, isActive, isExactActive }"
              >
                <b-nav-item
                    @click="navigate"
                    class="router-item"
                    :active="isActive && isExactActive"
                >
                  {{ route.label }}
                </b-nav-item>
              </router-link>
            </template>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>

<script>
import routes from '@/data/routes';

export default {
  name: "NavBar",
  data() {
    return {
      routes: routes
    }
  }
}
</script>

<style lang="scss" scoped>
.navbar-toggler {
  margin-right: 18px;
  background: white;
}
.routes {
  margin-right: 30px;
  margin-left: auto;
}
.router-item {
  margin-right: 20px;
  font-size: 20px;
  a {
    color: white !important;
    padding: 8px 2px 0 !important;
  }
  a.active {
    font-weight: bold;
    color: white;
    border-bottom-style: solid;
    border-bottom-width: 5px;
    border-bottom-color: #02B300;
    width: fit-content;
  }
}
.nav-bar-logo {
  cursor: pointer;
  margin: 5px 30px;
}
@media screen and (max-width: 991px){
  .nav-bar-logo {
    height: 40px;
    margin: 5px 15px;
  }
  .routes {
    height: 350px;
  }
  .router-item {
    a {
      color: black !important;
    }
  }
}
</style>
