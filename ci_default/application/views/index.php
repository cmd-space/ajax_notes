<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Notes</title>
	<link rel="stylesheet" href="/assets/stylesheets/style.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$.get('/notes/index_html', function(res)
			{
				$('#notes').html(res);
			});
			$('#title').focus(function()
			{
				if(this.value == 'insert note title here...')
				{
					this.value = '';
				}
			});
			$('#title').blur(function()
			{
				if(this.value == '')
				{
					this.value = 'insert note title here...'
				}
			});
		});
	</script>
</head>
<body>
	<h4>Notes</h4>
	<div id='notes'></div>
	<form action="notes/create" method="post">
		<p><input type="text" name='title' id='title' value='insert note title here...'></p>
		<p><input type="submit" id='add' value="Add Note"></p>
	</form>
</body>
</html>