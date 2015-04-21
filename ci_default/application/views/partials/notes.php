<?php
// var_dump($notes);
// die();
	foreach($notes as $note)
	{
?>
		<div class='note'>
			<h3><?= $note['title'] ?></h3>
			<form action="/notes/destroy/<?= $note['id'] ?>" class='delete' method='post'>
				<input type="submit" class='delete' value="delete">
			</form>
			<p class='scroll'><?= $note['description'] ?></p>
		</div>
<?php
	}
?>