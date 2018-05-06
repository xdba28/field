<html>
<head>
	<title>Calendar</title>
	<link rel='stylesheet' href='fullcalendar/fullcalendar.css'>
	<script src='js/jquery-3.3.1.min.js'></script>
	<script src='js/moment.min.js'></script>
	<script src='fullcalendar/fullcalendar.js'></script>
<script>
$(document).ready(function()
{
	$(function(){
	
		var calendar = $('#calendar').fullCalendar('getCalendar');

		$('#calendar').fullCalendar(
		{
		// put your options and callbacks here

			dayClick: function()
			{
				alert('a day has been clicked!');
			}

			
		})

	});

});
</script>
</head>
<body>
	<div id="calendar" style="height:800px;">
	</div>
</body>
</html>