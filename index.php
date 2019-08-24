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
        <div>
            <div id="pldt" style="min-width: 310px; margin: 0 auto; width: 90%"></div>
            <div id="eastern" style="min-width: 310px;margin: 0 auto; width: 90%"></div>
            <div id="globe" style="min-width: 310px;margin: 0 auto; width: 90%"></div>
        </div>
        <div>
            <div>
                <h3>Top 10 Highest Instance: PLDT</h3>
                <div>
                    <table id="topBandwidth">
                        <tr>
                            <th>Date</th>
                            <th>Bandwidth In</th>
                            <th>Bandwidth Out</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
           <!--  <div>
                <h3>Top 10 Highest Instance: PLDT</h3>
                <div id="top"></div>
            </div>
            <div>
                <h3>Top 10 Highest Instance: PLDT</h3>
                <div id="top"></div>
            </div> -->
        </div>
        
        <script async="true" type="text/javascript" src="graphs.js"></script>
        <script async="true" type="text/javascript" src="get_data.js"></script>
    </body>
</html>