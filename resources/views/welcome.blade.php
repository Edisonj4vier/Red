@extends('adminlte::page')
@section('title', __('Bienvenido a nuestro sitio'))
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5><span class="text-center fa fa-home"></span> @yield('title')</h5>
                </div>
                <div class="card-body">
                    <h5>
                        @guest
                        <strong> "Presione en la palabra Perfil para poder ingresar al sistema" .</strong>
                        @else
                        Hola {{ Auth::user()->name }}, Ingrese lo que desee ver {{ config('app.name', 'Laravel') }}.
                        @endif
                    </h5>
                </div>
                <center><img src="https://www.quepeliculaver.com/uploads/2021/12/peliculas-mas-esperadas-2022-1024x500.jpg" height="300" width="500"></center>
            
            
            </div>
            
        </div>
      
    </div>
</div>




@endsection