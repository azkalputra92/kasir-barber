        var options = {
          series: [{
          name: 'Pendapatan',
          data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
          name: 'Pengeluaran',
          data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
        },],
          chart: {
          type: 'bar',
          height: 350,
          toolbar: {
            show: false,
           }
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
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          }
        },
        
        };

        var chart = new ApexCharts(document.querySelector("#grafikKeuanganJasa"), options);

        chart.render();
      