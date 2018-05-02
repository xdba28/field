<html>
<head>
	<title>Calendar</title>
</head>
<body>
	<div id="calendar" style="height:800px;">
	</div>
</body>
<script>
	import Calendar from 'tui-calendar';

	var calendar = new Calendar('#calendar', {
  defaultView: 'month',
  taskView: true,
  template: {
    monthGridHeader: function(model) {
      var date = new Date(model.date);
      var template = '<span class="tui-full-calendar-weekday-grid-date">' + date.getDate() + '</span>';
      return template;
    }
  }
});
</script>
</html>