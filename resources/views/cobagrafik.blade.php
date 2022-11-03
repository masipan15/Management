@extends('layout.admin')

@section('content')
<div class="row row-sm mt-3">
    <div class="col-lg-12">
        <div class="card custom-card overflow-hidden">
            <div class="card-body">
				<div>
					<h6 class="main-content-label mb-1">Grafik</h6>
				</div>
				<div class="morris-wrapper-demo" id="chart"></div>
            </div>
        </div>
    </div>
</div>

{{-- <script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris.js/morris.min.js"></script>
<script src="assets/js/chart.morris.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts@2.1.8"></script>


    <script>
     var options = {
		colors: ['#6259ca', '#01b8ff', '#53caed'],
          series: [{
          name: 'Pengeluaran',
          data: {!! json_encode($array_pengeluaran) !!}
        }, {
          name: 'Pemasukan',
          data: {!! json_encode($array_pemasukan) !!}
        }, 
		// {
        //   name: 'Free Cash Flow',
        //   data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
        // }
	],
          chart: {
          type: 'bar',
          height: 455
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: {!! json_encode($previousMonths) !!}
        },
        yaxis: {
          title: {
            text: 'Harga'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "Rp." + val + " "
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

    </script>
@endsection