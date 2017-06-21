<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>salauno</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      body{
        padding-top: 30px;
        background-color: #39C0CB;
      }

      .fondo-amarillo{
        background-color: #FDCD30;
        color: #00758D;
      }

      .fondo-verde{
        background-color: #00758D;
        color: #FFFFFF;
      }
      table{
        font-size: 1.4em;
      }
      .white {
          background-color:#FFFFFF;
          color:#000000;
      }

      .black {
          background-color:#000000;
          color:#FFFFFF;
      }
    </style>


  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel fondo-verde">
            <div class="panel-body">
              <div class="embed-responsive embed-responsive-16by9">
                @yield('video')
              </div>
            </div>
          </div>
          <div class="panel fondo-amarillo">
            <div id="principalPanel" class="panel-body text-center">
              @yield('content')
            
              
            </div>
          </div>
        </div>
        <div class="col-xs-6">
          <div class="panel fondo-verde">
            <div class="panel-body text-center">
                <h1>Preparación</h1>
                <h4>Tiempo aprox. de espera 10 min.</h4>
            </div>
          </div>
          <div class="panel fondo-verde">
            <div class="panel-body text-center table-responsive">
                <h3>Próximos a pasar</h3>
                <table class="table">
                  <tr>
                    <th>Expediente</th>
                    <th>Paciente</th>
                  </tr>
                 @yield('listaespera')
                  
                </table>
            </div>
          </div>
          <center>
            <img src="img/logo.png" alt="">
          </center>
        </div>
      </div>
    </div>

    <script>
  //   $(document).ready(function() {  
  //     function ajaxRenderSection() {
  //       // $.ajax({
  //       //     type: 'GET',
  //       //     url: '/lista_paciente',
  //       //     success: function (data) {
  //       //         $('#principalPanel').empty(); //se toma la data en formato json, luego se borra el Div padre de el Sections y se pinta el json (data) como htlm
  //       //     },
  //       //     error: function (data) {
  //       //         var errors = data;
  //       //         // if (errors) {
  //       //         //     $.each(errors, function (i) {
  //       //         //         console.log(errors[i]);
  //       //         //     });
  //       //         // }
  //       //         console.log(errors);
  //       //     }
  //       // });
  //       $.get('/test', function(){ 
  //       console.log('response'); 
  //   });
  //   }

  //   setInterval(ajaxRenderSection(), 3000);
  //   console.log("ready");
  // });
   $(document).ready(function(){
   var refreshId = setInterval(refrescarTabla, 6000);
   $.ajaxSetup({ cache: false });
 });
   function refrescarTabla() {
    // $('div#principalPanel').empty();
    $('div#principalPanel').load('test');
  // $("#salastatus").load('estadoSala.do?randval='+ Math.random() + " #resulttable", function(){
  // //     //aquí puedes meter más código si necesitas;
  // //     $("#salastatus").css('opacity', 1);
  // //     $("#rolling").toggle();
  // // });
}
    </script>
  </body>
</html>