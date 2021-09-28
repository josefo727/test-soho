<template>
  <section class="container-fluid">
    <div class="row justify-content-md-center text-white banner">
      <div class="d-flex flex-column justify-content-center align-items-center text-center">
        <p class="h2">Nos especializamos en <br>
          <strong class="sub-title">interfaces digitales que los usuarios aman</strong>
        </p>
        <button class="btn btn-soho fw-bold px-4 py-2">HABLEMOS DE TU PROYECTO</button>
      </div>
    </div>

    <div class="row">
      <div class="d-flex justify-content-md-between align-items-baseline banner-bottom bg-black">
        <div> <img src="/images/en-directo.png" alt="en-directo" width="40px"> </div>
        <div class="d-none d-sm-none d-md-block pt-3">
          <p>
            <span>EN DIRECTO</span> - SOHO está presente en el <span>DIGITALBANK MONTEVIDEO.</span> "Experiencia de usuario" por Alvaro Añón (SEO de Soho)
          </p>
        </div>
        <div class="m-sm-auto mr-md-2">
          <button class="btn mx-2 btn-soho">VER EVENTO</button>
          <button class="btn mx-2 btn-outline-soho">PROXIMOS EVENTOS</button>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "WelcomeComponent"
}
</script>

<style lang="scss" scoped>
.banner {
  background-image: url('/images/lets-talk-about-your-project.jpg');
  background-repeat: round;
  background-size: cover;
  height: calc(100vh - 70px);
  margin-top: -102px;
  @media screen and (max-width: 991px) {
    width: auto;
  }
}
.bg-black {
  color: white;
}
.h2 {
  font-weight: 600;
}
.sub-title {
  -webkit-text-fill-color: #02B300; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #02B300;
}
</style>
