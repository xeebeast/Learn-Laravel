<script type="text/javascript">
	
	$(document).ready(function(){
		
		$( ".setting" ).click(function() {

		  $( ".sub-setting" ).animate({

		    opacity: 1,
		    height: "toggle"
		  }, 500, function() {
		    // Animation complete.
		  });

		});

		var view_point_height = $( window ).height();
		$('.col').css("height",view_point_height);

		$('ul.nav-justified .first').css("background","#FFFFFF");
		$('ul.nav-justified li').click(function(e){

	    	$('ul.nav-justified li').css("background","none");
	     	$(this).css("background","#FFFFFF");

	    });

		$(".home").show(500);
	    $('.first').click(function(){

	    	$(".home").show(500);
	    	$(".chart").hide(500);

		});
		$('.second').click(function(){

	    	$(".chart").show(500);
	    	$(".home").hide(500);

		});

	    $(function () {

	    	/*HightChart*/
    $('.container1').highcharts({
        chart: {
            type: 'pyramid',
            marginRight: 100
        },
        title: {
            text: 'Xee Site',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Unique users',
            data: [
                ['Website visits',      15654],
                ['Downloads',            4064],
                ['Requested price list', 1987],
                ['Invoice sent',          976],
                ['Finalized',             846]
            ]
        }]
    });
});


	    $(function () {

	    	/*HightChart*/
    $('.container2').highcharts({
        chart: {
            type: 'pyramid',
            marginRight: 100
        },
        title: {
            text: 'Wiki Site',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'Unique users',
            data: [
                ['Website visits',      2000],
                ['Downloads',            356],
                ['Requested price list', 1987],
                ['Invoice sent',          1526],
                ['Finalized',             861]
            ]
        }]
    });
});
	    	/*END HightChart*/

	});

</script>