@extends('welcome')

@section('content')

<div id="crud" class="row">
    <div class="col-xs-12">
        <h2 class="page-header"> Listado</h2>
    </div>
    <div class="col-sm-7">
        <a href="#" class="btn btn-primary pull-right">Nuevo nombre</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th colspan="2"> &nbsp;</th>
                </tr>
            </thead>
            <tbody>
                    <tr v-for="keep in keeps">
                        <td >@{{keep.nombre}}</td>
                        <td width="10px">@{{keep.ubicacion}}</td>
                        <td width="10px">
                            <a href="#" class="btn btn-warning btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>          
                    </tr>
            </tbody>
        </table>
        
    </div>

    <div class="col-sm-5">
        <pre>
            @{{ $data }}
        </pre>
    </div>
</div>
@endsection


@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        console.log("Hola :v");
        var crud = new Vue({
            el: '#crud',
            created: function(){
                this.getKeeps();
            },
            data:{
                keeps: []
            },
            methods:{
                getKeeps: function(){
                    var urlKeeps = 'wintel';
                    axios.get(urlKeeps).then(response =>{
                        var hola = response.data;
                        console.log(hola);
                        this.keeps = response.data
                    });
                }
            }
        })
        
    </script>
@endsection