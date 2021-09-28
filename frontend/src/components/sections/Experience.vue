<template>
  <section class="container-fluid bg-section">
    <div class="row text-center text-white">
      <div class="col-12">
        <div class="row py-5 px-2">
          <div class="col-sm-12 col-md-8 text-center m-auto">
            <h2 class="fw-bold">17 años de experiencia en pos de tu proyecto</h2>
            <hr>
            <p>
              Especializados desde 1996 en usabilidad, experiencia del usuario (UX) y diseño de experiencias de
              proyectos digitales. Aportamos estrategias e innovación centrada en el usuario y los objetivos de
              negocios de tu proyecto. Cotrabajado mejoraremos su tasa de conversión, KPI's, ROI y los resultados
              de tu actual publicidad PPC (pay per click).
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 service px-sm-3 bg-low">
        <h3 class="text-color-primary">Estrategia, usabilidad & ux</h3>
        <p>Te ofrecemos excelente usabilidad y experiencias en tu proyecto, junto a una visión innovadora.</p>
      </div>
      <div class="col-sm-12 col-md-4 service px-sm-3 bg-high">
        <h3 class="text-color-primary">Mejoramos la experiencia</h3>
        <p>Tangibilizamos tu proyecto digital a través de un diseño centrado en el usuario y técnicas avanzadas</p>
      </div>
      <div class="col-sm-12 col-md-4 service px-sm-3 bg-half">
        <h3 class="text-color-primary">Medición continua de objetivos</h3>
        <p>Implementación, testing con usuarios y medicion continua son necesarias para garantizar el éxito de tu proyecto</p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Experience"
}
</script>

<style scoped>
hr {
  width: 50px;
  border: 2px solid #02B300;
  color: #02B300;
  margin: 10px auto 20px;
}
.bg-low {
  background: #3B4148;
}
.bg-half {
  background: #202A37;
}
.bg-high {
  background: #161C21;
}
.service {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 50px 30px 50px 30px;
  color: white;
}
</style>