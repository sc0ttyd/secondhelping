<div class="offerings form">
<?php echo $this->Form->create('Offering'); ?>
	<fieldset>
		<legend><?php echo __('Add Offering'); ?></legend>
	<?php
		echo $this->Form->input('location_id');

		?><div id="location_form_holder" style="display:none"><?php
			echo $this->Form->input('Location.lat');
			echo $this->Form->input('Location.lon');
			echo $this->Form->input('Location.name');
			echo $this->Form->input('Location.street_address');
			echo $this->Form->input('Location.area');
			echo $this->Form->input('Location.town_or_city');
			echo $this->Form->input('Location.postcode');
		?></div><?php
		//echo $this->Form->input('status');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('due');
		echo $this->Form->input('tags');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Offerings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Collection Requests'), array('controller' => 'collection_requests', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Collection Request'), array('controller' => 'collection_requests', 'action' => 'add')); ?> </li>
	</ul>
</div>
