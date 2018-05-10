<html>
	<head>
	</head>
	<body>
		<div id="1">
		</div>
		<?php
		// alternative else if statement
		$a = 1;
		$b = 2;
		if($a == 2):
		?>
		1
		<?php elseif($b == 2): ?>
		2
		<?php endif ?>
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

		// JS object
		var person = 
		{
			firstName: 'Denver',
			lastName: 'Arancillo',
			age: '19',
			list: [],
			address: 
			{
				street: '1173 5th street Our Lady\'s Village',
				Municipality: 'Legazpi City',
 			},
			fullName: function()
			{
				return this.firstName + ' ' + this.lastName;
			}
		}

		person.list.push('asd');

		person.list = '';

		console.log(person.list);

		var c = 1, b = 0;
		a == b ?
		conlos.lot('asd') : console.log('dsa')
	</script>
</html>