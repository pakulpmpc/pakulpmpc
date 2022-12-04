<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	animationEnabled: true,
	title: {
		text: "GDP Growth Rate - 2016"
	},
	axisY: {
		title: "Growth Rate (in %)",
		suffix: "%"
	},
	axisX: {
		title: "Countries"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.0#"%"",
		dataPoints: [
			{ label: "Lambakin", y: 10.09 },	
			{ label: "Pakul", y: 9.40 },	
			{ label: "calabasa", y: 8.50 },
			{ label: "Ethiopia", y: 7.96 },	
			{ label: "Uzbekistan", y: 7.80 },
			{ label: "Nepal", y: 7.56 },
			{ label: "Iceland", y: 7.20 },
			{ label: "India", y: 7.1 }
			
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>