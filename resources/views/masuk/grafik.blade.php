@extends('layout.admin')

@section('content')
    <div class="row row-sm mt-3">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Grafik</h6>
                    </div>
                    <div id="chartLine">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="assets/js/chart.chartjs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@2.1.8"></script>
    
    <script>
      // $(function(){
      // var total = JSON.parse(``);
      var pengeluaran = <?php echo json_encode($total)?>;
      var bulan = <?php echo json_encode($bulan)?>;
      
    var options = {
  chart: {
    height: 455,
    type: "line",
    stacked: false
  },
  dataLabels: {
    enabled: false
  },
  colors: ['#007BFF', '#99C2A2', '#6F42C1'],
  series: [
    
    {
      name: 'Pengeluaran',
      type: 'column',
      data: [30, 23, 33.1, 34, 44.1, 44.9, 56.5, 58.5]
    },
    {
      name: "Pemasukan",
      type: 'column',
      data: [10, 19, 27, 26, 34, 35, 40, 38]
    },
    {
      name: "Pendapatan",
      type: 'line',
      data: [1, 1.9, 2.5, 1.5, 2.5, 2.8, 3.8, 4.6]
    },
  ],
  stroke: {
    width: [4, 4, 4]
  },
  plotOptions: {
    bar: {
      columnWidth: "20%"
    }
  },
 
  xaxis: {
    categories: [2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016]
  },
  yaxis: [
    {
      seriesName: 'Pengeluaran',
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
      },
      title: {
        text: "Pengeluaran"
      }
    },
    {
      seriesName: 'Pengeluaran',
      show: false
    }, {
      opposite: true,
      seriesName: 'Pendapatan',
      axisTicks: {
        show: true
      },
      axisBorder: {
        show: true,
      },
      title: {
        text: "Pemasukan"
      }
    }
  ],
  tooltip: {
    shared: false,
    intersect: true,
    x: {
      show: false
    }
  },    
  legend: {
    horizontalAlign: "left",
    offsetX: 40
  }
};

var chart = new ApexCharts(document.querySelector("#chartLine"), options);

chart.render();

      
    </script>


    {{-- @include('sweetalert::alert') --}}
@endsection
