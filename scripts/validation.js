function workshop_validations () {
	var title = document.getElementById('title');
	var start_date = document.getElementById('start_date');
	var end_date = document.getElementById('end_date');
	var start_time = document.getElementById('start_time');
	var end_time = document.getElementById('end_time');
	var technology = document.getElementById('technology');
	var ws_description = document.getElementById('ws_description');

	var is_error = false;
}

//You can either use this syntax
$(document).ready(function () {
	$("#start_date").datetimepicker({
		format : "YYYY-MM-DD",
		minDate : new Date()
	});

	$("#end_date").datetimepicker({
		format : "YYYY-MM-DD",
		minDate : new Date()
	});

	$("#start_time").datetimepicker({
		format : "HH:mm",
	});

	$("#end_time").datetimepicker({
		format : "HH:mm",
	});
});
