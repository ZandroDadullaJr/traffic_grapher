<!doctype html>
<html>
	<head>
		<title>Line Chart</title>
		<!-- 		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
		<script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
		<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
		<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.3"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
		<script src="https://www.chartjs.org/samples/latest/utils.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/hammerjs@2.0.8"></script>
		<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-zoom@0.7.3"></script>
		<style>
			canvas {
				-moz-user-select: none;
				-webkit-user-select: none;
				-ms-user-select: none;
			}
		</style>
	</head>
	<body>
		<div style="width:1000px">
			<canvas id="chart1"></canvas>
		</div>
		<br>
		<br>
		Chart Type:
		<select id="type">
			<option value="line">Line</option>
			<option value="bar">Bar</option>
		</select>
		<button id="update">update</button>
		<button onclick="resetZoom()">Reset Zoom</button>
		
		<script>
			function randomNumber(min, max) {
				return Math.random() * (max - min) + min;
			}
			function randomBar(date, lastClose) {
				var open = randomNumber(lastClose * 0.95, lastClose * 1.05).toFixed(2);
				var close = randomNumber(open * 0.95, open * 1.05).toFixed(2);
				return {
					t: date.valueOf(),
					y: close
				};
			}
			var dateFormat = 'MMMM DD YYYY';
			var date = moment('April 01 2017', dateFormat);
			var data = [randomBar(date, 300)];
			while (data.length < 365) {
				date = date.clone().add(1, 'd');
				if (date.isoWeekday() <= 5) {
					data.push(randomBar(date, data[data.length - 1].y));
				}
			}
			var ctx = document.getElementById('chart1').getContext('2d');
			ctx.canvas.width = 1000;
			ctx.canvas.height = 300;
			var color = Chart.helpers.color;
			var cfg = {
				type: 'bar',
				data: {
					datasets: [{
						label: 'PRTG Traffic graph trend',
						backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
						borderColor: window.chartColors.red,
						data: data,
						type: 'bar',
						pointRadius: 0,
						fill: false,
						lineTension: 0,
						borderWidth: 2
					}]
				},
				options: {
					scales: {
						xAxes: [{
							type: 'time',
							distribution: 'series',
							ticks: {
								source: 'data',
								autoSkip: true
							}
						}],
						yAxes: [{
							scaleLabel: {
								display: true,
								labelString: 'Bandwidth (Mbps)'
							}
						}]
					},
									plugins: {
					zoom: {
						zoom: {
							enabled: true,
							drag: true,
							mode: 'x',
							speed: 0.05
						}
					}
				},
					tooltips: {
						intersect: false,
						mode: 'index',
						callbacks: {
							label: function(tooltipItem, myData) {
								var label = myData.datasets[tooltipItem.datasetIndex].label || '';
								if (label) {
									label += ': ';
								}
								label += parseFloat(tooltipItem.value).toFixed(2);
								return label;
							}
						}
					}
				}
			};
			var chart = new Chart(ctx, cfg);
			document.getElementById('update').addEventListener('click', function() {
			    var type = document.getElementById('type').value;
			    chart.config.data.datasets[0].type = type;
			    chart.update();
			});
			window.resetZoom = function() {
			    window.myLine.resetZoom();
			};

			window.onload = function() {
			    var ctx = document.getElementById('chart1').getContext('2d');
			    window.myLine = new window.Chart(ctx, cfg);
			};
		</script>
	</body>
</html>