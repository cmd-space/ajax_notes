<?php
	foreach($notes as $note)
	{
?>
<script>
	// $(document).ready(function()
	// {
	// 	$('.scroll').click(function()
	// 		{
	// 			var otext = this.text();
	// 			this.replaceWith('<textarea>'+otext+'</textarea>');
	// 		});
	// });
</script>
		<div class='note'>
			<h3><?= $note['title'] ?></h3>
			<form action="/notes/destroy/<?= $note['id'] ?>" class='delete' method='post'>
				<input type="submit" class='delete' value="delete">
			</form>
			<form action="/notes/update/<?= $note['id'] ?>" method="post">
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