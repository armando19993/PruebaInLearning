<template style="background-color: #E5E5E5">
  <div id="app">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EVA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
      </ul>
      <form class="form-inline">
        <i class="far fa-envelope text-white mr-3"></i>
        <i class="far fa-bell text-white mr-3"></i>
        <span class="perfil-nav mr-3">Armando Campos</span>
        <img src="https://d500.epimg.net/cincodias/imagenes/2016/07/04/lifestyle/1467646262_522853_1467646344_noticia_normal.jpg" class="rounded-circle img-fluid" style="width: 40px;">
      </form>
    </div>
  </nav>

    <div class="mt-3 pr-5 pl-5">
      <router-view />
    </div>
  </div>
</template>

<script>
export default {
  name: "app"
};
</script>
