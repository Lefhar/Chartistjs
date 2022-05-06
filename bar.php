<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>teste bar Chartist.js</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
</head>
<body>
<div class="ct-chart"></div>
<script>
    new Chartist.Bar('.ct-chart', {
        labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
        series: [2000000, 6001440, 1001120, 2001010, 1000180, 4844120, 2123510, 1000180, 4844120, 2123510, 4844120, 2123510]
    }, {
        distributeSeries: true
    });
</script>
</body>
</html>