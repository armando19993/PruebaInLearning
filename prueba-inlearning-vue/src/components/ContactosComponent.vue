<template>
<div class="row">
  <div class="col-md-2 pt-5 d-none d-md-block">
  <ul>
    <li><i class="fa fa-home icon-menu"></i> <span class="text-menu">Inicio</span></li>
    <li> <i class="fa fa-laptop-code icon-menu active"></i> <span class="text-menu active">Mi Curso</span>
    <ul>
    <li><i class="fa fa-circle icon-menu active text-li"></i> <span class="text-menu active">Estudiantes</span> </li>
    </ul>
    </li>
   </ul>
  </div>


  <div class="col-md-10">
        <h1 class="titulo">Estudiantes</h1>
        <div class="col-md-6">
        <div class="input-group rounded">
        <input type="text" class="form-control rounded" placeholder="Buscar" v-on:keyup="buscarNombre()" v-model="buscar" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <i class="fa fa-search" style="color: #722AE9;"></i>
        </span>
        </div>
        </div>

        
        <br>
        <div class="row">
        <div class="col-md-9 nombre">Numero de Participantes: {{total}}</div>
        <div class="col-md-3 text-right"> <a href="">Descargar Lista</a> </div>
        <br><br>
        <div class="col-md-4" v-for="(contacto, index) in contactos" :key="index">
            <div class="card p-2 mb-3">
                <div class="row">
                    <div class="col-3"><img :src="contacto.imagen" class="rounded-circle img-fluid"></div>
                    <div class="col-9 nombre">{{contacto.nombre}}</div>

                     <div class="col-1 mail"><i class="far fa-envelope"></i></div>
                    <div class="col-10 mail-text">{{contacto.correo}}</div>

                    <a href="" class="view">Ver historial de notas e inasistencias</a>
                </div>
            </div>
        </div>

        </div>
  </div>
</div>
</template>

<script>
import ContactosDataService from "../services/ContactosDataService";

export default {
  name: "contactos-list",
  data() {
    return {
      contactos: [],
      total: 0,
      buscar: '',
    };
  },
  methods: {
    listContactos() {
      ContactosDataService.getAll()
        .then(response => {
          this.contactos = response.data.data;
          this.total = response.data.total;
          console.log(this.total);
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },

    buscarNombre()
    {
        if(this.buscar.length >= 3)
        {
            ContactosDataService.search(this.buscar)
            .then(response => {
            this.contactos = response.data.data;
            this.total = response.data.total;
            console.log(this.total);
            console.log(response.data);
            })
            .catch(e => {
            console.log(e);
            });
        }

        if(this.buscar.length == 0)
        {
            this.listContactos();
        }
    }
  },
  mounted() {
    this.listContactos();
  }
};
</script>

<style>
.list {
  text-align: left;
  max-width: 750px;
  margin: auto;
}

.nombre{
    font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 17px;
margin-top: 10px;
}

a{
    color: #722AE9;
    font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 17px;
text-decoration-line: underline;
}


.mail{
    margin-left: 10px;
    font-weight: bold;
}

.mail-text{
font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
display: flex;
align-items: center;

}

.card{
    border-radius: 5px;
}

.view{
    font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 14px;
line-height: 17px;
text-decoration-line: underline;
color: #722AE9;
margin-left: 25px;
margin-top: 10px;
}

.titulo{
font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 30px;
line-height: 37px;
color: #000000;
}

.nav-item{
    color: white;
}

.perfil-nav{
    font-family: Montserrat;
    font-style: normal;
    font-weight: bold;
    font-size: 18px;
    line-height: 22px;
    text-align: right;
    color: white;
}

.text-menu{
    font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 14px;
line-height: 17px;
color: #7F8794;
}

.icon-menu{
    font-family: Montserrat;
font-style: normal;
font-weight: 500;
font-size: 20px;
line-height: 17px;
color: #7F8794;
}

ul{
     list-style:none
}

li{
     list-style:none
}

.active {
    color: #722AE9;
}

.text-li{
    font-size: 7px;
}
</style>