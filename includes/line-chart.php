<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Day', 'Page Visits', 'Total Song Plays', 'Likes'],
                ['MON', 500, 700, 129],
                ['TUES', 1170, 460, 129],
                ['WED', 660, 1120, 129],
                ['THURS', 1030, 540, 129],
                ['FRI', 500, 700, 129],
                ['SAT', 500, 700, 129],
                ['SUN', 500, 700, 129]
            ]);

            var options = {
                title: 'Your Weekly Stats',
                curveType: 'function',
                legend: {
                    position: 'bottom'
                },
                colors: ['#CB9DFF', '#6CD9CE', '#8CB3E2'],
                

            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
            
            
        }
    </script>
</head>

<body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
</body></html>