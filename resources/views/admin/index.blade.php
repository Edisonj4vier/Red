@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')

<?php
/*$etiquetas = ["Enero", "Febrero", "Marzo", "Abril", "Mayo"];
$datosVentas = [$enero, $febrero, $marzo, $abril, $mayo]*/

?>
<script src="https://cdnjs.coudflare.com/ajax/libs/Chart.js/3.08.0/chart.js"></script>
<script src="https://cdnjs.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

<h1 style="text-align:center"> <strong> Software_Peliculas </strong> </h1>
@stop

@section('plugins.Sweetalert2',true)

@section('content')

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">



          <p> <strong> Peliculas disponibles:</strong> </p>
        </div>
        <div align="center" class="icon">
        </div>
        <a href="/pelicula" class="small-box-footer">Detalles: <i class="fas fa-arrow"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">


          <div style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;Color:yellow">
            <p>
              Peliculas Disponibles en Alquiler:
            </p>
          </div>
        </div>
        <div align="center" ; class="icon">
        </div>

        <a href="/alquiler" class="small-box-footer">Detalles: <i class="fas fa-arrow"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">


          <p>
            <strong>
              Listado de Usuarios
            </strong>
          </p>
        </div>
        <div align="center" class="icon">
        </div>
        <a href="/socio" class="small-box-footer">Detalles: <i class="fas fa-arrow"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">


          <div style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;Color:white">
            <p>
              Formatos Incluidos:
            </p>
          </div>

        </div>
        <div align="center" ;class="icon">

        </div>
        <a href="/formato" class="small-box-footer"> Detalles: <i class="fas fa-arrow"></i></a>
      </div>
      <br />
    </div>
  </div>

  <div class="row">
    <!-- --------tabla 1 -->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Directores con mayor presencia en las Peliculas:
          </h3>
          <div class="card-tools">
                 
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-default"  href="/report" >Reporte</a>

                    </li>
                   
                  </ul>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 320px;">
              <canvas id="movie" width="600" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-------------2 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Peliculas con mayor demanda
          </h3>
          <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-default"  href="/economico" >Reporte</a>
                    


                    </li>

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="red" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!--------Tabla--3--->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Formato disponibles
          </h3>
          <div class="card-tools">
          <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="btn btn-default"  href="index.blade.php" >Reporte</a>
                    


                    </li>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 320px;">
              <canvas id="helen" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-------------4 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Actores con mayor presencia en peliculas:
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="joselyn" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------5 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Actores de Peliculas mas solicitadas:
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="mande" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------6 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Tipo de sexo que mas adquiere las peliculas:
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="sexto" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------7 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Peliculas con mayor demanda
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="septimo" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------8 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Fechas con mayor apertura:
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="octavo" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------9 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Generos mas buscados:
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="noveno" width="600" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-------------10 TABLA---------------------------->
    <section class="col-lg-6 connectedSortable">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-chart-pie mr-1"></i>
            Peliculas de estreno:
            Para cada mes
          </h3>
          <div class="card-tools">

          </div>
        </div>
        <div class="card-body">
          <div class="tab-content p-0">

            <div class="chart tab-pane active" id="revenue-chart1" style="position: relative; height: 320px;">
              <canvas id="decimo" width="800" height="400"></canvas>
            </div>

          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection

@section('css')
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="public/plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="public/plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="public/plugins/summernote/summernote-bs4.min.css">
<!-- admin_custom_css -->
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

<!---------Tabla 1---------------------->

@section('js')
<script type="text/javascript">
  window.livewire.on('closeModal', () => {
    $('#createDataModal').modal('hide');
  });
</script>

<script>
  const cData = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData);
  const ctx = document.getElementById('movie').getContext('2d');
  const areaChart = new Chart(ctx, {
    type: 'horizontalBar',
    data: {
      labels: cData.label,
      datasets: [{
        label: 'Cantidad de Ingresos:',
        data: cData.data,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!---------Tabla 2---------------------->

<script>
  <script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js" >
</script>

<script>
const salesGraphChartCanvas3 = document.getElementById('red').getContext('2d');



var salesGraphChartData3 = {
  labels: ['Increible','Amor','Anime','Chistes','Drama','Comedia','Drama','Fantasia','Accion','Terror'],
  datasets: [
    {
      label: 'Pedidos',
      fill: false,
      borderWidth: 2,
      lineTension: 0,
      spanGaps: true,
      borderColor: '#72C02C',
      pointRadius: 3,
      pointHoverRadius: 7,
      pointColor: '#green',
      pointBackgroundColor: '#green',
      data: {{$spm['data']}} 
    }
  ]
}

var salesGraphChartOptions3 = {
  maintainAspectRatio: false,
  responsive: true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      ticks: {
        fontColor: '#000000'
      },
      gridLines: {
        display: false,
        color: '#000000',
        drawBorder: false
      }
    }],
    yAxes: [{
      ticks: {
        stepSize: 4,
        fontColor: '#000000'
      },
      gridLines: {
        display: true,
        color: '#000000',
        drawBorder: false
      }
    }]
  }
}


var salesGraphChart3 = new Chart(salesGraphChartCanvas3, { // lgtm[js/unused-local-variable]
  type: 'line',
  data: salesGraphChartData3,
  options: salesGraphChartOptions3
});
</script>


<!---------Tabla 3---------------------->
<script>
  const cData3 = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData3);
  const ctx3 = document.getElementById('helen').getContext('2d');
  const areaChart3 = new Chart(ctx3, {

    type: 'radar',
    data: {
      labels: cData3.label,
      datasets: [{
        label: 'Cantidad de Formatos Utilizados:',
        data: cData3.data,
        backgroundColor: [
          'rgba(0, 99, 132, 0.6)',
          'rgba(30, 99, 132, 0.6)',
          'rgba(60, 99, 132, 0.6)',
          'rgba(90, 99, 132, 0.6)',
          'rgba(120, 99, 132, 0.6)',
          'rgba(150, 99, 132, 0.6)',
        ],
        borderColor: [
          'rgba(0, 99, 132, 1)',
          'rgba(30, 99, 132, 1)',
          'rgba(60, 99, 132, 1)',
          'rgba(90, 99, 132, 1)',
          'rgba(120, 99, 132, 1)',
          'rgba(150, 99, 132, 1)',
          'rgba(180, 99, 132, 1)',
          'rgba(210, 99, 132, 1)',
          'rgba(240, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!---------Tabla 4---------------------->
<script>
  const cData4 = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData4);
  const ctx4 = document.getElementById('joselyn').getContext('2d');
  const areaChart4 = new Chart(ctx4, {
    type: 'polarArea',
    data: {
      labels: cData4.label,
      datasets:

        [{
          label: 'Cantidad de Actores:',
          data: cData4.data,
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 2
        }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
  });
</script>

<!---------Tabla 5---------------------->
<script>
  const cData5 = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData4);
  const ctx5 = document.getElementById('mande').getContext('2d');
  const areaChart5 = new Chart(ctx5, {
    type: 'bar',
    data: {
      labels: cData5.label,
      datasets: [{
        label: 'Cantidad de Peliculas:',
        data: cData5.data,
        backgroundColor: [
          'rgba(0, 99, 132, 0.6)',
          'rgba(30, 99, 132, 0.6)',
          'rgba(60, 99, 132, 0.6)',
          'rgba(90, 99, 132, 0.6)',
          'rgba(120, 99, 132, 0.6)',
          'rgba(150, 99, 132, 0.6)',
        ],
        borderColor: [
          'rgba(0, 99, 132, 1)',
          'rgba(30, 99, 132, 1)',
          'rgba(60, 99, 132, 1)',
          'rgba(90, 99, 132, 1)',
          'rgba(120, 99, 132, 1)',
          'rgba(150, 99, 132, 1)',
          'rgba(180, 99, 132, 1)',
          'rgba(210, 99, 132, 1)',
          'rgba(240, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!---------Tabla 6---------------------->
<script>
const alq_chart1 = document.getElementById('sexto').getContext('2d');

var peliculaData1 = {
  labels: ['Masculino','Femenino'],
  datasets: [
    {
      label: 'Sexo:',
      fill: true,
      backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ], 
      fillColor: '#99C4C8',
      borderWidth: 8,
      lineTension: 0.8,
      spanGaps: true,
      borderColor: '#F1C40F',
      pointRadius: 8,
      pointHoverRadius: 10,
      pointColor: '#18978F',
      pointBackgroundColor: '#18978F',
      data: {{$lista['data']}} 
    }
  ]
}

var alquilerGraphChartOptions1 = {
  maintainAspectRatio: false,
  responsive: true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      ticks: {
        fontColor: '#000000'
      },
      gridLines: {
        display: false,
        color: '#000000',
        drawBorder: false
      }
    }],
    yAxes: [{
      ticks: {
        stepSize: 1,
        fontColor: '#000000'
      },
      gridLines: {
        display: true,
        color: '#000000',
        drawBorder: false
        
      },
      
    }]
  }
}

const alquilerChart1 = new Chart(alq_chart1, {
  type: 'pie',
  data: peliculaData1,
  options: alquilerGraphChartOptions1
});
</script>

<!---------Tabla 7---------------------->
<script>
  const cData7 = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData7);
  const ctx7 = document.getElementById('septimo').getContext('2d');
  const areaChart7 = new Chart(ctx7, {
    type: 'horizontalBar',
    data: {
      labels: cData7.label,
      datasets: [{
        label: 'Cantidad de Peliculas:',
        data: cData7.data,
        backgroundColor: [
          'rgba(0, 99, 132, 0.6)',
          'rgba(30, 99, 132, 0.6)',
          'rgba(60, 99, 132, 0.6)',
          'rgba(90, 99, 132, 0.6)',
          'rgba(120, 99, 132, 0.6)',
          'rgba(150, 99, 132, 0.6)',
        ],
        borderColor: [
          'rgba(0, 99, 132, 1)',
          'rgba(30, 99, 132, 1)',
          'rgba(60, 99, 132, 1)',
          'rgba(90, 99, 132, 1)',
          'rgba(120, 99, 132, 1)',
          'rgba(150, 99, 132, 1)',
          'rgba(180, 99, 132, 1)',
          'rgba(210, 99, 132, 1)',
          'rgba(240, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!---------Tabla 8---------------------->
<script>
  const cData8 = JSON.parse(`<?php echo $data; ?>`);
  console.log(cData8);
  const ctx8 = document.getElementById('octavo').getContext('2d');
  const areaChart8 = new Chart(ctx8, {
    type: 'line',
    data: {
      labels: cData8.label,
      datasets: [{
        label: 'Entrega de Peliculas:',
        data: cData8.data,
        backgroundColor: [
          'rgba(0, 99, 132, 0.6)',
          'rgba(30, 99, 132, 0.6)',
          'rgba(60, 99, 132, 0.6)',
          'rgba(90, 99, 132, 0.6)',
          'rgba(120, 99, 132, 0.6)',
          'rgba(150, 99, 132, 0.6)',
        ],
        borderColor: [
          'rgba(0, 99, 132, 1)',
          'rgba(30, 99, 132, 1)',
          'rgba(60, 99, 132, 1)',
          'rgba(90, 99, 132, 1)',
          'rgba(120, 99, 132, 1)',
          'rgba(150, 99, 132, 1)',
          'rgba(180, 99, 132, 1)',
          'rgba(210, 99, 132, 1)',
          'rgba(240, 99, 132, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<!---------Tabla 9---------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<script>

const salesGraphChartCanvas = document.getElementById('noveno').getContext('2d');



  var salesGraphChartData = {
    labels: ['Increible','Amor','Anime','Chistes','Drama','Comedia','Drama','Fantasia','Accion','Terror'],
    datasets: [
      {
        label: 'Pedidos',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#72C02C',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#green',
        pointBackgroundColor: '#green',
        data: {{$spm['data']}} 
      }
    ]
  }

  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#000000'
        },
        gridLines: {
          display: false,
          color: '#000000',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 4,
          fontColor: '#000000'
        },
        gridLines: {
          display: true,
          color: '#000000',
          drawBorder: false
        }
      }]
    }
  }


  var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
  })

</script>


<!---------Tabla 10---------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>



<script>
const alq_chart = document.getElementById('decimo').getContext('2d');

var peliculaData = {
  labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre','Noviembre','Diciembre'],
  datasets: [
    {
      label: 'Lista de directores:',
      fill: true,
      fillColor: '#99C4C8',
      borderWidth: 8,
      lineTension: 0.8,
      spanGaps: true,
      borderColor: '#99C4C8',
      pointRadius: 8,
      pointHoverRadius: 10,
      pointColor: '#18978F',
      pointBackgroundColor: '#18978F',
      data: {{$peli['data']}} 
    }
  ]
}

var alquilerGraphChartOptions = {
  maintainAspectRatio: false,
  responsive: true,
  legend: {
    display: false
  },
  scales: {
    xAxes: [{
      ticks: {
        fontColor: '#000000'
      },
      gridLines: {
        display: false,
        color: '#000000',
        drawBorder: false
      }
    }],
    yAxes: [{
      ticks: {
        stepSize: 1,
        fontColor: '#000000'
      },
      gridLines: {
        display: true,
        color: '#000000',
        drawBorder: false
        
      },
      
    }]
  }
}

const alquilerChart = new Chart(alq_chart, {
  type: 'bar',
  data: peliculaData,
  options: alquilerGraphChartOptions
});

</script>

@stop