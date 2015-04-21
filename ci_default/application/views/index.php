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
			$('#add_note').submit(function()
			{
				$.post('/notes/create', function(res)
				{
					$('#notes').html(res);
				});
				return false;
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
			$('.scroll').click(function()
			{
				var otext = this.text();
				$('p').replaceWith('<textarea>'+otext+'</textarea>');
			});
			$('h3').click(function()
			{
				$('h3').html('<button>hello</button>');
			});
		});
	</script>
</head>
<body>
	<h4>Notes</h4>
	<div id='notes'></div>
	<form action="notes/create" id="add_note" method="post">
		<p><input type="text" name='title' id='title' value='insert note title here...'></p>
		<p><input type="submit" id='add' value="Add Note"></p>
	</form>
</body>
</html>