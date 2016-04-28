<?php 
foreach($gcrud->css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($gcrud->js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<div>
<h4><?php print_r($title); ?></h4>
<hr>
	<?php echo $gcrud->output; ?>
</div>

