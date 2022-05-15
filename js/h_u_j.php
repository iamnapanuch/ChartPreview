 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
 <hr>
 <p align="center">
     <canvas id="myChart" width="800px" height="300px"></canvas>
     <script>
         var ctx = document.getElementById("myChart").getContext('2d');
         var myChart = new Chart(ctx, {
             //type: 'bar',
             //type: 'line',
             type: 'pie',
             data: {
                 labels: [<?php echo $datesave; ?>

                 ],
                 datasets: [{
                     label: 'จำนวนการขอดูเวชระเบียนย้อนหลัง 12 เดือน',
                     data: [<?php echo $totol; ?>],
                     backgroundColor: [
                         'rgba(255, 99, 132, 0.2)',
                         'rgba(54, 162, 235, 0.2)',
                         'rgba(255, 206, 86, 0.2)',
                         'rgba(75, 192, 192, 0.2)',
                         'rgba(153, 102, 255, 0.2)',
                         'rgba(255, 159, 64, 0.2)'
                     ],
                     borderColor: [
                         'rgba(255,99,132,1)',
                         'rgba(54, 162, 235, 1)',
                         'rgba(255, 206, 86, 1)',
                         'rgba(75, 192, 192, 1)',
                         'rgba(153, 102, 255, 1)',
                         'rgba(255, 159, 64, 1)'
                     ],
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     yAxes: [{
                         ticks: {
                             beginAtZero: true
                         }
                     }]
                 },
                 responsive: true,
                 title: {
                     display: true,
                     text: 'จำนวนคนที่ขอดูเวชระเบียน'
                 }
             }
         });
     </script>