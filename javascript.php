<html>
	<head>
	</head>
	<body>
		<div id="1">
		</div>
	</body>
	<script>
		const _ = (id) => document.getElementById(id);

		const multiply = (x, y) => x * y;
		_('1').innerHTML += multiply(10, 5);
		_('1').innerHTML += '<br>';

		const isZero = n => n === 0;
		const a = [0, 1, 0, 3, 4, 0];
		_('1').innerHTML += a.filter(isZero).length;
		_('1').innerHTML += '<br>';

		const getSalutation = (hour) => hour < 12 ?
			"Good Morning" : "Good Afternoon";
		_('1').innerHTML += getSalutation(10);
		_('1').innerHTML += '<br>';
	</script>
</html>