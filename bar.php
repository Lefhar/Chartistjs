<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>teste bar Chartist.js</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
</head>
<body>
<script>
    let chart = new Chartist.Line('.ct-chart', {
        labels: [1, 2, 3],
        series: [
            [
                {meta: 'description', value: 1 },
                {meta: 'description', value: 5},
                {meta: 'description', value: 3}
            ],
            [
                {meta: 'other description', value: 2},
                {meta: 'other description', value: 4},
                {meta: 'other description', value: 2}
            ]
        ]
    }, {
        low: 0,
        high: 8,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip()
        ]
    });
</script>
</body>
</html>