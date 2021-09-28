<template>
  <main>
    <Welcome />
    <Experience />
    <FeaturedProjects />
    <OurClients />
    <Footer />
  </main>
</template>

<script>
import Welcome from "../components/layout/Welcome";
import Experience from "../components/sections/Experience";
import FeaturedProjects from "../components/sections/FeaturedProjects";
import OurClients from "../components/sections/OurClients";
import Footer from "../components/layout/Footer";

export default {
  name: 'Home',
  components: {
    Welcome: Welcome,
    Experience: Experience,
    FeaturedProjects: FeaturedProjects,
    OurClients: OurClients,
    Footer: Footer
  }
}
</script>

<style scoped>

</style>