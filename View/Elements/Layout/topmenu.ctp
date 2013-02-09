<div id="topmenu_container">
	<div id="topmenu">
	<?php if ($this->name !== 'Home') : ?>
	<span class="topmenu">
		<?php
			echo $this->Html->link('Home','/');
		?>
	</span>
	<?php elseif ($this->name !== 'Partners') : ?>
	<span class="topmenu">
		<?php
			echo $this->Html->link('Partners', array(
				'controller' => 'Pages',
				'action' => 'display', 'partners'
			));
		?>
	</span>
	<?php endif; ?>
	</div>
</div>
