$(document).ready(function() {

	google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Grade', 'Result'],
	  ['Destintion',     5],
	  ['Merit',      4],
	  ['Pass',  8],
	  ['Fail', 2]
	]);

	var options = {
	  title: 'Student results for 2020',
	  pieHole: 0.5,
	};

	var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
	chart.draw(data, options);
	}
	

});
