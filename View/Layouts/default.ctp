<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('9amPrayer.info:'); ?>
		<?php echo $this->name; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array(
			'unsemantic/demo',
			'unsemantic/unsemantic-grid-base',
			'unsemantic/unsemantic-grid-mobile',
			'cake.generic',
			'9amprayer'
		));
		echo $this->Html->script(array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
			'http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js',
			'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js',
			'http://maps.google.com/maps/api/js?sensor=true',
			'gmap',
			'jquery.earth3d',
			// 'unsemantic/adapt.min',
			// 'unsemantic/demo',
		));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container" class="grid-container">
		<div id="header" class="mobile-grid-100">
			<div class="mobile-grid-65">
				<h1><?php echo $this->Html->link(__('9amPrayer', true), '/'); ?></h1>
				<div class="mobile-grid-100"><?php echo $this->element('Layout/topmenu');?></div>
			</div>
			<div id="header-right" class="mobile-grid-35 border-5" style="background-color: #000;">Hola</div>
		</div>
		<div id="content" class="mobile-grid-100">
			<?php $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php
				echo $this->element('Layout/footer');
			?>
		</div>
	</div>
	<?php echo $this->element('Layout/google_analytics'); ?>
</body>
</html>
