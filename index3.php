<?php
$dataPoints1 = array();
$dataPoints2 = array();
$vgl = $_POST['vgl'];
$vglexpl = explode("=",$vgl);
$links = str_replace(" ","",$vglexpl[0]);
$rechts = str_replace(" ","",$vglexpl[1]);

$xlinksexpl = explode('x',$links);
$a=$xlinksexpl[0];
$b=str_replace("+","",$xlinksexpl[1]);

$xrechtsexpl = explode('x',$rechts);
$c=$xrechtsexpl[0];
$d=str_replace("+","",$xrechtsexpl[1]);
$teller=$d-$b;
$noemer=$a-$c;
$antwoord = $teller/$noemer;
$yantwoord = $a * $antwoord + $b;
$vergelijking = $a."x + ".$b." = ".$c."x + ".$d;
$vergelijking = str_replace(" + -"," - ",$vergelijking);

$x = round($antwoord, 0)-5;
while ($x < round($antwoord, 0)+5){
    $y1 = $a * $x + $b;
    $y2 = $c * $x + $d;
    array_push($dataPoints1, array("x"=>$x, "y"=>$y1));
    array_push($dataPoints2, array("x"=>$x, "y"=>$y2));
    $x += 0.1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title:{
                    text: ""
                },
                axisX:{
                    title: "x"
                },
                axisY:{
                    title: "y",
                    titleFontColor: "#4F81BC",
                    lineColor: "#4F81BC",
                    labelFontColor: "#4F81BC",
                    tickColor: "#4F81BC"
                },
                legend:{
                    cursor: "pointer",
                    dockInsidePlotArea: true,
                    itemclick: toggleDataSeries
                },
                data: [{
                    type: "line",
                    markerSize: 0,
                    toolTipContent: "x = {x}<br>y1 = {y}",
                    showInLegend: false,
                    dataPoints: <?php echo json_encode($dataPoints1,JSON_NUMERIC_CHECK); ?>
                },
                    {
                    type: "line",
                    markerSize: 0,
                    toolTipContent: "x = {x}<br>y2 = {y}",
                    showInLegend: false,
                    dataPoints: <?php echo json_encode($dataPoints2,JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            function toggleDataSeries(e){
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible)
                    e.dataSeries.visible = false;
                else
                    e.dataSeries.visible = true;
                chart.render();
            }
        }
    </script>
</head>
<body style="font-family: 'Times New Roman'; font-style: italic">

<div class="container" style="font-size: x-large">
    <h1>De oplossing van <?= $vergelijking ?>:</h1>
    x = <sup><?= $teller ?></sup>/<sub><?= $noemer ?></sub> = <?= $antwoord ?> en y = <?= $yantwoord ?>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</div>
</body>
</html>