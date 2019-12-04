<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Tallest Man on Earth', 11],
                ['Phoenix', 2],
                ['Hey Rosetta!', 2]
            ]);

            var options = {
//                title: 'I am currently supporting...',
                pieHole: 0.4,
                colors: ['#CB9DFF', '#6CD9CE', '#8CB3E2']
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
    <style>

    </style>
</head>

<body>
    <div class="user-stats" id="donutchart" style="width: 900px; height: 500px;"></div>
</body></html>