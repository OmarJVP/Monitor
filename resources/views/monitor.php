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
    <script>
      $(document).ready(function() {
        var url      = window.location.href;
        url = url+'monitor';
          function getValues(){
            $.ajax({
              method: 'post',
              url: url,
              data: {'clinica' : 'coyoacan',
                      'Etapa' : 'Preparacion'
                    },
              success: function(data){
                $('#paciente').text(data['paciente']);
                $('#expediente').text(data['expediente']);
                $('#consultorio').text(data['consultorio']);
                  console.log('data:'+data);
              },
              error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                  console.log(JSON.stringify(jqXHR));
                  console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
              }
            });
          }

          setInterval(getValues, 3000);
      });
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-6">
          <div class="panel fondo-verde">
            <div class="panel-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/videoseries?list=PL8955E75A5DB72E0F&amp;controls=0" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="panel fondo-amarillo">
            <div class="panel-body text-center">
                <h1 id="paciente">-----<br><small id="expediente">-----</small></h1>
                <h1 id="consultorio">-----</h1>
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
                  <tr>
                    <td>EX-021505</td>
                    <td>Rodolfo Alvares</td>
                  </tr>
                  <tr>
                    <td>EX-021505</td>
                    <td>Rodolfo Alvares</td>
                  </tr>
                  <tr>
                    <td>EX-021505</td>
                    <td>Rodolfo Alvares</td>
                  </tr>
                  <tr>
                    <td>EX-021505</td>
                    <td>Rodolfo Alvares</td>
                  </tr>
                  <tr>
                    <td>EX-021505</td>
                    <td>Rodolfo Alvares</td>
                  </tr>
                </table>
            </div>
          </div>
          <center>
            <img src="img/logo.png" alt="">
          </center>
        </div>
      </div>
    </div>
  </body>
</html>