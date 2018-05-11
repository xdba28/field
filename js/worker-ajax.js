var data = 0
function list_student()
{
	data = data + 1;

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			postMessage(this.responseText);
			setTimeout('list_student()', 500);
		}
		else
		{
			console.log(xhttp.getAllResponseHeaders());
		}
  	};
	xhttp.open('POST', 'ajax-php/list-student.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data=' + data);

	// $.ajax(
	// {
	// 	type: 'POST',
	// 	url: 'ajax-php/list-student.php',
	// 	data: data,
	// 	success: function(data)
	// 	{
			// postMessage(data);
			// setTimeout('list_student()', 500);
	// 	},
	// 	error: function(jqXHR, testStatus, errorThrown)
	// 	{
	// 		console.log('jqXHR:');
	// 		console.log(jqXHR);
	// 		console.log('textStatus:');
	// 		console.log(textStatus);
	// 		console.log('errorThrown:');
	// 		console.log(errorThrown);
	// 		window.alert("Request Not sent");
	// 	}
	// });
}
list_student();