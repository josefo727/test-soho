<template>
  <section class="container-fluid bg-section">
    <div class="row p-5 text-white">
      <div class="col-sm-12 col-md-8 text-center m-auto">
        <h2 class="fw-bold">Proyectos destacados</h2>
        <hr>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur at autem
          cumque dolor enim error incidunt itaque iure libero maiores minima mollitia, necessitatibus
          quaerat, quisquam ratione ut voluptate voluptatem.
        </p>
      </div>
    </div>

    <template v-for="(project, index) in projects" >
      <div class="row pb-sm-5 pb-md-0 pt-md-5" :key="index" :style="{background: project.background}">
        <div class="col-sm-12 col-md-6 ps-5 my-2" :class="getOrder(index)">
          <img :src="project.logo" width="180px" alt="logoDiner">
          <h2 class="fw-bold text-white mt-2">{{ project.name }}</h2>
          <p class="text-white my-2">{{ project.description }}</p>
          <div class="tag">
            <i class="fas fa-tag text-secondary"></i>
            <a v-for="(tag, index) in project.tags" class="mx-2" href="#" :key="index">{{ tag }}</a>
          </div>
          <button class="btn btn-light mt-3" :style="{color: project.background}">Ver más</button>
        </div>
        <div class="col-sm-12 col-md-6">
          <img :src="project.image" width="100%" alt="">
        </div>
      </div>
    </template>

  </section>

</template>

<script>
import {mapActions, mapGetters} from 'vuex';

export default {
  name: "FeaturedProjects",
  mounted() {
    this.getProjects();
  },
  computed: {
    ...mapGetters({
      'projects' : 'getProjects'
    }),
  },
  methods: {
    ...mapActions(['getProjects']),
    getOrder(index) {
      return index % 2 ? 'order-sm-1 order-md-0' : 'order-sm-0 order-md-1';
    }
  }
}
</script>

<style scoped>
hr {
  width: 50px;
  border: 2px solid #02B300;
  color: #02B300;
  margin: 10px auto 20px;
}
.bg-blue {
  background: #223B82;
}
.text-blue {
  font-weight: bold;
  color: #223B82;
}

.bg-red {
  background: #C92C3A;
}
.text-red {
  font-weight: bold;
  color: #C92C3A;
}
.bg-white {
  background: #ffffff;
}
</style>