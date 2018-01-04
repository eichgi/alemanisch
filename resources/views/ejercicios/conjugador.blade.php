<!doctype html>
<html lang="en" xmlns:v-on="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pronombres</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Alemannisch</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Pronombres <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        {{--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>--}}
    </div>
</nav>
<br>
<div class="container">
    <div id="app" class="row">
        <div class="col-sm-6">
            <div {{--id="app"--}} class="card mb-3">
                <h4 class="card-header">Pronombres Nominativos</h4>
                <div class="card-body">
                    <form>
                        <template v-for="pronombre in pronombres.pronombres">
                            <pronombre :pronombre="pronombre" v-on:actualizar="actualizarRespuesta"></pronombre>
                        </template>
                        <hr>
                        <div class="form-group text-center">
                            <input type="submit" v-on:click.prevent="validar" class="btn btn-success btn-block"
                                   value="Terminar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-3">
                <h4 class="card-header">Instrucciones</h4>
                <div class="card-body">
                    <ol>
                        <li>Revisa la
                            <button class="btn btn-primary btn-sm" v-on:click="mostrarGuia">guía</button>
                            cuantas veces sea necesario.
                        </li>
                        <li>Llena los campos con el pronombre correcto</li>
                        <li>Una vez completados oprime el botón de "Terminar"</li>
                    </ol>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3">
                <h4 class="card-header">Información</h4>
                <div class="card-body">
                    <p class="card-text">
                        Los pronombres personales en Nominativo es una de las primeras cosas que hay
                        aprender en alemán, dado que son básicos para realizar nuestras primeras oraciones.
                    </p>
                    <p class="card-text">
                        Puedes encontrar más información en el siguiente enlace:
                        <a href="https://www.alemansencillo.com/pronombres-en-aleman" target="_blank"
                           style="color: snow;">https://www.alemansencillo.com/pronombres-en-aleman</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="template-pronombre" type="text/template">
    <div class="form-group form-inline has-success">
        <label style="min-width: 5em;">@{{pronombre.pronombre.capitalize()}}</label>&nbsp;&nbsp;&nbsp;
        <input type="text" v-on:keyup="validarInput($event)" v-model="pronomen"
               :class="[valid ? 'is-valid' : '', 'form-control']">
        {{--<div class="valid-feedback">@{{pronombre.ejemplo.capitalize()}} | <span>@{{pronomen.capitalize()}}</span> lerne</div>--}}
        <div class="valid-feedback">@{{pronombre.ejemplo.capitalize()}} | @{{pronombre.exempel.capitalize()}}</div>
    </div>
</script>

<script id="guia" type="text/template">
    <h5>Pronombres Personales Nominativos</h5>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Español</th>
            <th>Alemán</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="pronombre in pronombres">
            <td>@{{pronombre.pronombre}}</td>
            <td>@{{pronombre.pronomen}}</td>
        </tr>
        </tbody>
    </table>
</script>

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/popper.min.js"></script>--}}
<script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.11/vue.js"></script>
<script src="https://unpkg.com/sweetalert2@7.1.1/dist/sweetalert2.all.js"></script>
<script>
    String.prototype.capitalize = function () {
        return this.charAt(0).toUpperCase() + this.slice(1);
    };
    Vue.prototype.$http = axios;
    /*Vue.component('pronombre', {
     props: ['pronombre'],
     data: function () {
     return {
     valid: false,
     }
     },
     template: '#template-pronombre',
     methods: {
     validarInput(event){
     this.valid = event.target.value === this.pronombre.pronomen;
     }
     }
     });*/

    let componente = {
        props: ['pronombre'],
        data: function () {
            return {
                valid: false,
                pronomen: ''
            }
        },
        template: '#template-pronombre',
        methods: {
            validarInput(event){
                if (event.target.value.toLowerCase() === this.pronombre.pronomen) {
                    this.valid = true;
                    this.$emit('actualizar', this.pronombre.pronombre);
                } else {
                    this.valid = false;
                }
            }
        }
    };

    let tabla = {
        props: ['pronombres'],
        template: '#guia'
    };

    const app = new Vue({
        el: '#app',
        components: {
            'pronombre': componente,
            'guia': tabla
        },
        data: {
            pronombres: [],
            respuesta: {
                yo: false,
                tu: false,
                el: false,
                ella: false,
                eso: false,
                nosotros: false,
                ustedes: false,
                ellos: false,
            }
        },
        mounted: function () {
            this.obtenerPronombres();
        },
        methods: {
            obtenerPronombres(){
                axios.get('/api/pronombres')
                    .then((response) => {
                        app.pronombres = response.data.data;
                    });
            },
            actualizarRespuesta(value){
                this.respuesta[value] = true;
            },
            validar(){
                let isValid = true;
                for (let elem in this.respuesta) {
                    if (!this.respuesta[elem]) {
                        //return false;
                        isValid = false;
                    }
                }
                if (isValid) {
                    swal(
                        '',
                        'Ejercicio terminado',
                        'success'
                    );
                } else {
                    swal(
                        '',
                        'Revisa tus respuestas',
                        'error'
                    );
                }
            },
            mostrarGuia(){
                let html = `<h5><i>Pronombres Personales Nominativos</i></h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Español</th>
                                        <th>Alemán</th>
                                    </tr>
                                </thead>
                                <tbody>`;
                let pros = Array.from(this.pronombres.pronombres);
                pros.forEach((elem) => {
                    html += `<tr>`;
                    html += `<td>${elem.pronombre.capitalize()}</td>`;
                    html += `<td>${elem.pronomen.capitalize()}</td>`;
                    html += `</tr>`;
                });
                html += `</tbody></table>`;
                swal({
                    html: html
                });
            }
        }
    });
</script>
</body>
</html>