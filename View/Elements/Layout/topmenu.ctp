<div id="topmenu_container">
	<div style="float: left;">Blessed is the nation whose God is the Lord. - Psalms 33:12</div>
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
