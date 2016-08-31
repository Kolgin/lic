$(document).ready(function() {

	// Weather
	// --------------------------------------------------

	var dataWeather = [
		[0, 75],
		[1, 69],
		[2, 64],
		[3, 65],
		[4, 78],
		[5, 77],
		[6, 75],
		[7, 68],
		[8, 64],
		[9, 62],
		[10, 67],
		[11, 75],
		[12, 73],
		[13, 68],
		[14, 75],
		[15, 72],
		[16, 73],
		[17, 62],
		[18, 76],
		[19, 74],
		[20, 64],
		[21, 77],
		[22, 80],
		[23, 71]
	];
	var datasetWeather = [{
		label: 'F',
		data: dataWeather,
		color: '#fff'
	}];
	var optionsWeather = {
		series: {
			lines: {
				show: true,
				lineWidth: 2
			},
			points: {
				show: true,
				lineWidth: 4
			},
			shadowSize: 0
		},
		grid: {
			hoverable: true,
			borderWidth: 0
		},
		xaxis: {
			ticks: 0
		},
		yaxis: {
			ticks: 0
		},
		tooltip: {
			show: true,
			content: '%y %s',
			defaultTheme: false
		},
		legend: {
			show: false
		}
	};
	$.plot($('#flot-weather'), datasetWeather, optionsWeather);

});