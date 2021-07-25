@extends('dashboardPage.layout')
@section('content')
    <head>
        <meta charset=utf-8 />
        <title>Morris.js Area Chart</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

            body {
                font-family: "Open Sans", Arial;
                background: #EDEDED;
            }

            main {
                width:fit-content;
                margin: 10px auto;
                padding: 10px 20px 30px;
                background: #FFF;
                box-shadow: 0 3px 5px rgba(0, 0, 0, 0.2);
            }

            p {
                margin-top: 2rem;
                font-size: 13px;
            }

            #bar-chart {
                width: 700px;
                height: 300px;
                position: relative;
            }

            #bar-chart::before {
                content: "";
                position: absolute;
                display: block;
                width: 240px;
                height: 30px;
                left: 250px;
                top: 254px;
                background: #FAFAFA;
                box-shadow: 1px 1px 0 0 #DDD;
            }

            #pie-chart {
                width: 700px;
                height: 250px;
                position: relative;
            }


            #pie-chart::after {
                content: "";
                position: absolute;
                display: block;
                top: 260px;
                left: 70px;
                width: 170px;
                height: 2px;
                background: rgba(0, 0, 0, 0.1);
                border-radius: 50%;
                box-shadow: 0 0 3px 4px rgba(0, 0, 0, 0.1);
            }

        </style>
    </head>

    <body>
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <main>
            <h5>number of categories</h5>
            <div id="bar-chart"></div>
            <h5>percent of categories</h5>
            <div id="pie-chart"></div>
        </main>
        <script>
            var analytics = <?php echo $category; ?>

            google.load("visualization", "1", {
                packages: ["corechart"]
            });
            google.setOnLoadCallback(drawCharts);

            function drawCharts() {
                var barData = google.visualization.arrayToDataTable(analytics);
                var barOptions = {
                    focusTarget: 'category',
                    backgroundColor: 'transparent',
                    colors: ['cornflowerblue', 'tomato'],
                    fontName: 'Open Sans',
                    chartArea: {
                        left: 50,
                        top: 10,
                        width: '100%',
                        height: '70%'
                    },
                    bar: {
                        groupWidth: '80%'
                    },
                    hAxis: {
                        textStyle: {
                            fontSize: 11
                        }
                    },
                    vAxis: {
                        minValue: 0,
                        maxValue: 50,
                        baselineColor: '#DDD',
                        gridlines: {
                            color: '#DDD',
                            count: 4
                        },
                        textStyle: {
                            fontSize: 11
                        }
                    },
                    legend: {
                        position: 'bottom',
                        textStyle: {
                            fontSize: 12
                        }
                    },
                    animation: {
                        duration: 1200,
                        easing: 'out',
                        startup: true
                    }
                };
                var barChart = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
                barChart.draw(barData, barOptions);

                var pieData = google.visualization.arrayToDataTable(analytics);
                var pieOptions = {
                    backgroundColor: 'transparent',
                    pieHole: 0.4,
                    colors: ["#a18774",
                        "#6a7986",
                        "#4e748b",
                        "#356586",
                        "#305e7d"
                    ],
                    pieSliceText: 'value',
                    tooltip: {
                        text: 'percentage'
                    },
                    fontName: 'Open Sans',
                    chartArea: {
                        width: '100%',
                        height: '94%'
                    },
                    legend: {
                        textStyle: {
                            fontSize: 13
                        }
                    }
                };
                var pieChart = new google.visualization.PieChart(document.getElementById('pie-chart'));
                pieChart.draw(pieData, pieOptions);
            }
        </script>
    </body>
@endsection
