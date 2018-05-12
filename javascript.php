<html>
	<head>
	<script src="js/jquery-3.3.1.min.js"></script>
	</head>
	<body>
		<div id="1">
		</div>

		<hr>
		<button id="start">Start List Students</button>
		&nbsp;
		<button id="stop">Stop List Students</button>

		<div id="stu">
		</div>


		<?php
		// alternative else if statement
		$a = 1;
		$b = 2;
		if($a == 2):
		?>
		<!-- 1 -->
		<?php elseif($b == 2): ?>
		<!-- 2asd -->
		<?php endif ?>


	</body>

	<script>
		const _ = (id) => document.getElementById(id);

		const multiply = (x, y) => x * y;
		_('1').innerHTML += multiply(10, 5) + '<br>';

		const isZero = n => n === 0;
		const a = [0, 1, 0, 3, 4, 0, 0, 0];
		_('1').innerHTML += a.filter(isZero).length + '<br>';

		const getSalutation = hour => hour < 12 ?
			"Good Morning" : "Good Afternoon";
		_('1').innerHTML += getSalutation(10) + '<br>';

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
		console.lot('asd') : console.log('dsa');

		if(typeof(Worker) !== "undefined")
		{
			_('1').innerHTML += 'Web worker support';
		}
		else
		{
			_('1').innerHTML += 'No web worker support';
		}

		_('start').addEventListener('click', function()
		{
			worker = new Worker('js/worker-ajax.js');
			worker.onmessage = function(event)
			{
				_('stu').innerHTML += event.data + '<br>';
			}
		});

		_('stop').addEventListener('click', function()
		{
			worker.terminate();
			worker = undefined;	
		})

		_('1').innerHTML += `<br>C = ${c} and B = ${b} when added is equal to ${c + b}`;
		</script>

</html>