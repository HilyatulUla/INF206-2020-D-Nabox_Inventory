@extends('layouts.app')

@section('content')
<div id= ChartStatistik></div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('ChartStatistik', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Statistik Penjualan'
    },
    subtitle: {
        text: 'PT. Sejahtera'
    },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Barang yang terjual (per item)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Tomat',
        data: [7.0, 6.0, 9.0, 14.0, 18.0, 21.0, 25.0, 26.0, 23.0, 18.0, 13.0, 9.0]
    }, {
        name: 'Kecap',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }]
});
</script>