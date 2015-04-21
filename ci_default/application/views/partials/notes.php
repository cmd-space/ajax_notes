<?php
	foreach($notes as $note)
	{
?>
<script>
	$('.delete').submit(function()
	{
		$.post($(this).attr('action'), $(this).serialize(), function(res)
		{
			$('#notes').html(res);
		});
		return false;
	});
	$('.update').submit(function()
	{
		$.post($(this).attr('action'), $(this).serialize(), function(res)
		{
			$('#notes').html(res);
		});
		return false;
	});
</script>
		<div class='note'>
			<h3><?= $note['title'] ?></h3>
			<form action="/notes/destroy/<?= $note['id'] ?>" class='delete' method='post'>
				<input type="submit" class='delete' value="delete">
			</form>
			<form action="/notes/update/<?= $note['id'] ?>" class="update" method="post">
			<input type="text" name="title">
			<div class='scroll'>
				<textarea name='desc'rows='10'><?= $note['description'] ?></textarea>
			</div>
				<input type="submit" value="Update Note">
			</form>
		</div>
<?php
	}
?>