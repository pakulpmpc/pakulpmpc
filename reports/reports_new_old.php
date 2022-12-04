<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var totalMembers = 150;
var membersData = {
	"Regular Members vs Associate Members": [{
		click: membersChartDrilldownHandler,
		cursor: "pointer",
		explodeOnClick: false,
		innerRadius: "75%",
		legendMarkerType: "square",
		name: "Regular Members vs Associate Members",
		radius: "100%",
		showInLegend: true,
		startAngle: 90,
		type: "doughnut",
		dataPoints: [
			{ y: 519960, name: "Regular Members", color: "#E7823A" },
			{ y: 363040, name: "Associate Members", color: "#546BC1" }
		]
	}],
	"Regular Members": [{
		color: "#E7823A",
		name: "Regular Members",
		type: "column",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date("1 Jan 2015"), y: 1 },
			{ x: new Date("1 Feb 2015"), y: 2 },
			{ x: new Date("1 Mar 2015"), y: 2 },
			{ x: new Date("1 Apr 2015"), y: 1 },
			{ x: new Date("1 May 2015"), y: 5 },
			{ x: new Date("1 Jun 2015"), y: 5 },
			{ x: new Date("1 Jul 2015"), y: 4 },
			{ x: new Date("1 Aug 2015"), y: 4 },
			{ x: new Date("1 Sep 2015"), y: 4 },
			{ x: new Date("1 Oct 2015"), y: 4 },
			{ x: new Date("1 Nov 2015"), y: 0 },
			{ x: new Date("1 Dec 2015"), y: 87 }
		]
	}],
	"Associate Members": [{
		color: "#546BC1",
		name: "Associate Members",
		type: "column",
		xValueFormatString: "MMM YYYY",
		dataPoints: [
			{ x: new Date("1 Jan 2015"), y: 22000 },
			{ x: new Date("1 Feb 2015"), y: 26040 },
			{ x: new Date("1 Mar 2015"), y: 25840 },
			{ x: new Date("1 Apr 2015"), y: 23760 },
			{ x: new Date("1 May 2015"), y: 28800 },
			{ x: new Date("1 Jun 2015"), y: 29400 },
			{ x: new Date("1 Jul 2015"), y: 33440 },
			{ x: new Date("1 Aug 2015"), y: 37720 },
			{ x: new Date("1 Sep 2015"), y: 35200 },
			{ x: new Date("1 Oct 2015"), y: 35280 },
			{ x: new Date("1 Nov 2015"), y: 31160 },
			{ x: new Date("1 Dec 2015"), y: 34400 }
		]
	}]
};

var RegularMembersvsAssociateMembersOptions = {
	animationEnabled: true,
	theme: "light2",
	title: {
		text: "Regular Members vs Associate Members"
	},
	subtitles: [{
		text: "Click on Any Segment to Drilldown",
		backgroundColor: "#2eacd1",
		fontSize: 16,
		fontColor: "white",
		padding: 5
	}],
	legend: {
		fontFamily: "calibri",
		fontSize: 14,
		itemTextFormatter: function (e) {
			return e.dataPoint.name + ": " + Math.round(e.dataPoint.y / totalMembers * 1) + "%";  
		}
	},
	data: []
};

var membersDrilldownedChartOptions = {
	animationEnabled: true,
	theme: "light2",
	axisX: {
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2"
	},
	axisY: {
		gridThickness: 0,
		includeZero: false,
		labelFontColor: "#717171",
		lineColor: "#a2a2a2",
		tickColor: "#a2a2a2",
		lineThickness: 1
	},
	data: []
};

RegularMembersvsAssociateMembersOptions.data = membersData["Regular Members vs Associate Members"];
$("#chartContainer").CanvasJSChart(RegularMembersvsAssociateMembersOptions);

function membersChartDrilldownHandler(e) {
	e.chart.options = membersDrilldownedChartOptions;
	e.chart.options.data = membersData[e.dataPoint.name];
	e.chart.options.title = { text: e.dataPoint.name }
	e.chart.render();
	$("#backButton").toggleClass("invisible");
}

$("#backButton").click(function() { 
	$(this).toggleClass("visible");
	RegularMembersvsAssociateMembersOptions.data = membersData["Regular Members vs Associate Members"];
	$("#chartContainer").CanvasJSChart(RegularMembersvsAssociateMembersOptions);
});

}
</script>
<style>
	#backButton {
		border-radius: 4px;
		padding: 8px;
		border: none;
		font-size: 16px;
		background-color: #2eacd1;
		color: white;
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
	}
	.invisible {
		display: none;
	}
</style>
</head>
<body>

<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<button class="btn invisible" id="backButton">< Back</button>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>