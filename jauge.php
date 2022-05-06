<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>teste jauge chartistjs</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <style>
        .ct-series-a .ct-bar, .ct-series-a .ct-line, .ct-series-a .ct-point, .ct-series-a .ct-slice-donut {
            stroke: #d70606;
        }
        .ct-series-b .ct-bar, .ct-series-b .ct-line, .ct-series-b .ct-point, .ct-series-b .ct-slice-donut {
            stroke: #ff6600;
        }
        .ct-series-c .ct-bar, .ct-series-c .ct-line, .ct-series-c .ct-point, .ct-series-c .ct-slice-donut {
            stroke: #0CC162;
        }
        .ct-chart {
            margin: auto;
            width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
<div class="ct-chart"  ></div>
<script>
    new Chartist.Pie('.ct-chart', {
        series: [60, 20, 20]
    }, {
        donut: true,
        donutWidth: 60,
        startAngle: 270,
        total: 200,
        showLabel: true
    });
</script>
</body>
</html>