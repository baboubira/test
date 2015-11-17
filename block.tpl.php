<?php
// $Id: block.tpl.php,v 1.1 2009/08/25 19:15:43 troy Exp $
?>

<?php if ($block->subject) { ?>
	<div class="title-connexion">
		<h2 class="title"> <?php print $block->subject; ?></h2>
	</div>
<?php } ?>

<?php print $block->content; ?>