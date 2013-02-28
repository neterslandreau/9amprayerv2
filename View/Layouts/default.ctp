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
			// 'cake.generic',
			'9amprayer'
		));
		echo $this->Html->script(array(
			'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
			'http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js',
			'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js',
			'http://maps.google.com/maps/api/js?sensor=true',
			'core',
			'gmap',
			'jquery.earth3d',
		));
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container" class="grid-container">
		<div id="header" class="mobile-grid-100">
			<div class="mobile-grid-55">
				<?php
					echo $this->Html->link(
						$this->Html->image('sml_coloredlogo.png', array(
							'alt' => '9amPrayer',
							'title' => 'Have you prayed today?',
						)),
						array(
							'controller' => 'Pages',
							'action' => 'display', 'home',
							'plugin' => false,
						),
						array('escape' => false)
					);
				?>
				<div class="mobile-grid-100"><?php echo $this->element('Layouts/topmenu');?></div>
			</div>
			<div id="header-right" class="mobile-grid-45 dk-purple-background">Hola</div>
		</div>
		<div id="content" class="mobile-grid-100">
			<?php $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
			<?php
				echo $this->element('Layouts/footer');
			?>
		</div>
	</div>
<?php
	echo $this->Html->scriptBlock('
		App.basePath = "' . $this->Html->url('/') . '";
		App.baseUrl = "' . $this->Html->url('/', true) . '";'
	);
	echo $this->element('Layouts/google_analytics');
?>
</body>
</html>
