<template>
  <footer class="container-fluid bg-black">
    <div class="row mx-3">
      <div class="col-sm-12 col-md-4 text-sm-center text-md-start">
        <p class="text-white">©2017 SOHO internet + humana</p>
      </div>
      <div class="col-sm-12 col-md-4 text-sm-center text-md-center">
        <a class="mx-1 link text-green link-footer" href="#">Visítanos</a>
        <a class="mx-1 link text-green link-footer" href="#">Escribenos</a>
        <a class="mx-1 link text-green link-footer" href="#">Llámanos</a>
      </div>
      <div class="col-sm-12 col-md-4 text-sm-center text-md-end">
        <a class="mx-1 link link-footer facebook" href="#">Facebook</a>
        <a class="mx-1 link link-footer twitter" href="#">Twitter</a>
        <a class="mx-1 link link-footer linkedin" href="#">Linkedin</a>
        <a class="mx-1 link link-footer youtube" href="#">Youtube</a>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer"
}
</script>

<style scoped>
footer {
  padding-top: 28px;
  padding-bottom: 10px;
}
.link-footer {
  text-decoration: none;
}
.link-footer:hover {
  color: #016500;
}
.text-green {
  color: #02B300;
}
.facebook {
  color: #3E4DA5;
}
.twitter {
  color: #0AC6EF;
}
.linkedin {
  color: #4A90E2;
}
.youtube {
  color: #D36363;
}
</style>