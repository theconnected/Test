<?php
 include_once './config/db_connect.php';
 
 $sql = "SELECT created FROM datas WHERE user_id = '".$_SESSION['user']['id']."' GROUP BY month(created)";
 $sql_in = "SELECT created,SUM(qty) AS sum_in FROM datas WHERE user_id = '".$_SESSION['user']['id']."' AND type = 'income' GROUP BY month(created)";
 $sql_exp = "SELECT created,SUM(qty) AS sum_exp FROM datas WHERE user_id = '".$_SESSION['user']['id']."' AND type = 'pay' GROUP BY month(created)";
 
 $query = mysql_query($sql);
 $query_in = mysql_query($sql_in);
 $query_exp = mysql_query($sql_exp);
 
?>


<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<script>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'รายงานรายรับ-รายจ่าย ประจำปี'
        },
        subtitle: {
            text: 'คุณ : <?php echo $_SESSION['user']['fname'] . ' ' . $_SESSION['user']['lname']; ?>'
        },
        xAxis: {
            categories: [
                <?php while($d = mysql_fetch_array($query)):?>
					'<?php echo DateThai_Report($d['created']);?>',
				<?php endwhile;?>
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: 'จำนวนเงิน (บาท)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} บาท</b></td></tr>',
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
            name: 'รายจ่าย',
            data: [
			<?php while($rs = mysql_fetch_array($query_exp)):?>
				<?php echo $rs['sum_exp'];?>,
			<?php endwhile;?>
			]

        },  {
            name: 'รายได้',
            data: [
			<?php while($rs = mysql_fetch_array($query_in)):?>
				<?php echo $rs['sum_in'];?>,
			<?php endwhile;?>
			]

        }]
    });
});



/**
 * Sand-Signika theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   href: 'http://fonts.googleapis.com/css?family=Signika:400,700',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
   proceed.call(this);
   this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
});


Highcharts.theme = {
   colors: ["#ff1a1a", "#00b300", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
   chart: {
      backgroundColor: null,
      style: {
         fontFamily: "Signika, serif"
      }
   },
   title: {
      style: {
         color: 'black',
         fontSize: '16px',
         fontWeight: 'bold'
      }
   },
   subtitle: {
      style: {
         color: 'black'
      }
   },
   tooltip: {
      borderWidth: 0
   },
   legend: {
      itemStyle: {
         fontWeight: 'bold',
         fontSize: '13px'
      }
   },
   xAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   yAxis: {
      labels: {
         style: {
            color: '#6e6e70'
         }
      }
   },
   plotOptions: {
      series: {
         shadow: true
      },
      candlestick: {
         lineColor: '#404048'
      },
      map: {
         shadow: false
      }
   },

   // Highstock specific
   navigator: {
      xAxis: {
         gridLineColor: '#D0D0D8'
      }
   },
   rangeSelector: {
      buttonTheme: {
         fill: 'white',
         stroke: '#C0C0C8',
         'stroke-width': 1,
         states: {
            select: {
               fill: '#D0D0D8'
            }
         }
      }
   },
   scrollbar: {
      trackBorderColor: '#C0C0C8'
   },

   // General
   background2: '#E0E0E8'
   
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);
</script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

