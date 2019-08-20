<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <style>
        /* [COSMETICS - DOES NOT MATTER] */
        html, body {
        font-family: arial;
        }
        table {
        border-collapse: collapse;
        }
        table tr td {
        border: 1px solid #000;
        padding: 10px;
        }
        </style>
    </head>
    <body>
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto; width: 90%"></div>
        
        <div>
            <h3>Top 10 Highest Instance</h3>
            <div id="top">
                
            </div>
            
        </div>
        <script async="true" type="text/javascript">
        function createObject() {
            // var data = kbit;
            var Options = {
                chart: {
                    renderTo: 'container',
                    zoomType: 'x'
                },
                title: {
                    text: "PRTG Bandwidth Utilization"
                },
                credits: {
                    enabled: false
                },
                yAxis: [{
                    title: {
                        text: 'Bandwidth (Kbps)'
                    }
                }],
                xAxis: {
                    // type: 'category',
                    tickInterval: kbit_in.length / 4,
                    labels: {
                        enabled: true,
                        formatter: function() {
                            return kbit_in[this.value];
                        },
                    }
                },
                series: [{
                    type: 'areaspline',
                    name: 'Bandwidth In',
                    data: kbit_in,
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[3],
                        fillColor: 'white'
                    },
                    turboThreshold: 500000,
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    }
                }, {
                    type: 'areaspline',
                    name: 'Bandwidth Out',
                    data: kbit_out,
                    color: 'red',
                    turboThreshold: 500000,
                    
                }],
            };
            Highcharts.chart(Options);
        }
        </script>
        <script async="true" type="text/javascript" src="get_data.js"></script>
    </body>
</html>