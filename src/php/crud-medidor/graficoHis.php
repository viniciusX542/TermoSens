<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfico</title>

    <?php
    $RegistroDeTemperatura = [-2,-1,0,1,2]
    ?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {  
        var data = google.visualization.arrayToDataTable([
          ['horas', 'temperatura'],
          ['13:20',<?= $RegistroDeTemperatura[0] ?>],
          ['14:20',<?= $RegistroDeTemperatura[1] ?>],
          ['15:20',<?= $RegistroDeTemperatura[2] ?>],
          ['16:20',<?= $RegistroDeTemperatura[3] ?>],
          ['17:20',<?= $RegistroDeTemperatura[4] ?>],
        ]);

        var options = {
          title: 'Registro por hora',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

</head>
<body>
    <div id="curve_chart" style="width: 1500px; height: 800px"></div>
</body>
</html>