@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                  <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Grafik</h6>
                    </div>
                    {{-- <div class="chartjs-wrapper-demo"> --}}
                        <div id="grafik"></div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    
   
@endsection

@section('charts')
    
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
  Highcharts.chart('grafik', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Pengeluaran'
    },
    xAxis: {
        categories: {!! json_encode($month) !!},
        crosshair: true
    },
    yAxis: {
        title: {
            useHTML: true,
            text: 'Barang Di Beli'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Banyak pembeli',
        data: {!! json_encode($data) !!}

    }
  ]
});
</script>
@endsection
