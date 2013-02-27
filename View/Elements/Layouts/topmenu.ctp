<div id="topmenu_container">
	<div class="float-left"><span class="bolder">Blessed is the nation whose God is the Lord.</span> - <span class="citation"> Psalms 33:12<span></div>
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
