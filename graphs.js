// PLDT

function create_PLDT_Object() {
            // var data = kbit;
            var Options = {
                chart: {
                    renderTo: 'pldt',
                    zoomType: 'x'
                },
                title: {
                    text: "PRTG Bandwidth Utilization: PLDT: 200MB"
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
                    color: '#F44336',
                    turboThreshold: 500000,
                    
                }],
            };
            Highcharts.chart(Options);
        }


function create_EASTERN_Object() {
            // var data = kbit;
            var Options = {
                chart: {
                    renderTo: 'eastern',
                    zoomType: 'x'
                },
                title: {
                    text: "PRTG Bandwidth Utilization: EASTERN 200MB"
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
                    color: '#F44336',
                    turboThreshold: 500000,
                    
                }],
            };
            Highcharts.chart(Options);
        }

function create_GLOBE_Object() {
            // var data = kbit;
            var Options = {
                chart: {
                    renderTo: 'globe',
                    zoomType: 'x'
                },
                title: {
                    text: "PRTG Bandwidth Utilization: GLOBE 90MB"
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
                    color: '#F44336',
                    turboThreshold: 500000,
                    
                }],
            };
            Highcharts.chart(Options);
        }

