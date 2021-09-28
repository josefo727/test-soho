<template>
  <section class="container-fluid bg-section">
    <div class=" py-5 text-white">
      <div class="col-sm-12 text-center m-auto">
        <h2 class="fw-bold">Lo que dicen nuestros clientes</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-4 client client-01">
          <div class="">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
            <span>Cristobal Fernandez - CEO Copec</span>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 client client-02">
          <div class="">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
            <span>Maria Paz Sagers - Leas Digital BBVA</span>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 client client-03">
          <div class="">
            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
            <span>Renato Bascuñán - Lead Digital Chilena</span>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center p-5">
      <button class="btn btn-soho fw-bold px-4 py-2">HABLEMOS DE TU PROYECTO</button>
    </div>
  </section>
</template>

<script>
export default {
  name: "OurClients"
}
</script>

<style scoped>
hr {
  width: 50px;
  border: 2px solid #02B300;
  color: #02B300;
  margin: 10px auto 20px;
}

.client {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  opacity: 0.8;
}
.client p {
  font-size: 16px;
}
.client span {
  font-weight: bold;
  font-size: 18px;
}
.client-01 {
  background: url("/images/cliente01.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  height: 600px
}
.client-02 {
  background: url("/images/cliente02.jpg");
  background-repeat: no-repeat;
  background-size: 100%;
  height: 600px
}
.client-03 {
  background: url("/images/cliente03.jpeg");
  background-repeat: no-repeat;
  background-size: 100%;
  height: 600px
}
</style>