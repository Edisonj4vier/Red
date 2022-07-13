
@extends('adminlte::page')
@section('title', __('Bienvenido a nuestro sitio'))
@section('content')


<h1>Reporte:
</h1>
<section>
    <table class="table   class="colapsado" border="3" >
        <thead>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO:</th>
        </thead>
        <tbody>
            @foreach($economico as $director)
            <tr>
                <td>{{$director->id}}</td>
                <td>{{$director->pel_nombre}}</td>
                <td>{{$director->pel_costo}}</td>
                <td>{{$director->for_nombre}}</td>
            </tr>
            @endforeach 
         
        </tbody>
    </table>
</section>

<style>
.btg{background-color:rebeccapurple;color:white;font-size:1.2em;padding:12px;}
</style>


<button class="bt3 btg">PDF</button>
@endsection