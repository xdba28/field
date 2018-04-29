<html>
	<body>
		<form id="form1" method="post">
		<div>
			<input type="checkbox" name="brand[]" value="A"> A
			<input type="checkbox" name="brand[]" value="B"> B
		</div>
		<br>
		<div>
			<input type="checkbox" name="type[]" value="1"> 1
			<input type="checkbox" name="type[]" value="2"> 2
		</div>
		<br>
		<div>
			<input type="checkbox" name="color[]" value="blue"> blue
			<input type="checkbox" name="color[]" value="red"> red
		</div>
		</form>
		<div>
			<!-- <input type="text" name="a" id="1">
			<input type="text" name="b" id="2"> -->
			<button type="submit" name="btn" onclick="send()">Submit</button>
		</div>
		<br>
		<div id="result">
		</div>
	</body>
	<script src="jquery-3.3.1.min.js"></script>
	<script>
		function _(id)
		{
			return document.getElementById(id);
		}

		function send()
		{
			var form = $("form").serialize();
			$.ajax(
			{
				type: 'POST',
				url: 'ajax_post.php',
				data: form,
				success: function(data)
				{
					_('result').innerHTML = data;
				},
				error: function(jqXHR, testStatus, errorThrown)
				{
					console.log('jqXHR:');
					console.log(jqXHR);
					console.log('textStatus:');
					console.log(textStatus);
					console.log('errorThrown:');
					console.log(errorThrown);
					window.alert("Request Not sent");
				}
			})
		}
	</script>
</html>