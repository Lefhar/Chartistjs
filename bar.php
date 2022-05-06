<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>teste bar Chartist.js</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<style>

   .ct-series .ct-bar {
       /* Colour of your bars */
       stroke: rgba(11, 138, 217, 0.58);
       /* The width of your bars */
       stroke-width: 40px;
   font-size: 14px;
       /* Yes! Dashed bars! */
       /* Maybe you like round corners on your bars? *
   }
</style>
</head>
<body>
<div class="ct-chart"  ></div>
<script>
    new Chartist.Bar('.ct-chart', {
        labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        series: [754000, 641124, 455456, 487244, 786354, 484410, 512310, 700180, 822441, 852417, 484120, 523510]
    },
    {

height:500,
        distributeSeries: true
    });
</script>
</body>
</html>