<?php
use yii\helpers\Html;

$this->title = 'Graph';
$this->params['breadcrumbs'][] = ['label' => 'Traffic', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>

<h1>Graph</h1>
<div id= 'container' class = "traffic-graph" style= "width:100%; height:400px">

    <script>
        $(function () { 
            var myChart = Highcharts.chart('container', {
                chart: {
                type: 'line'
                },
                title: {
                    text: 'Website Traffic'
                },
                xAxis: {
                	title: {
                		text: 'Weeks'
                	},
                    categories: [
                    	<?php foreach($week as $data) { echo '\'' . $data . '\','; } ?>
	 				          ]
                },
                yAxis: {
                    title: {
                    text: 'Traffic'
                }
            },
            series: [{
                name: 'Traffic',
                data: [
                	<?php foreach($traffic as $data) { echo $data . ','; } ?>
          ],
	 			color: '#D91728'
            }]
        });

        // function for hiding or showing all series
        $("button.hideAll").click(function(){
          	var $this = $(this);
    		$this.toggleClass('hideAll');
    		if($this.hasClass('hideAll')){
    			$(myChart.series).each(function(){
           			this.setVisible(true, true);
           		})
       			$this.text('Hide All');         
   			} else {
   				$(myChart.series).each(function(){
           			this.setVisible(false, false);
           		})
       			$this.text('Show All');
   			}
           	myChart.redraw();
        })
    });

    </script>
    </div>
    <div class= "traffic-graph">
		<button class= "hideAll btn btn-info">Hide All</button>
    </div>