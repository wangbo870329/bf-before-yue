<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a
		href="<?php echo site_url(SITE_AREA .'/reports/purchase_history') ?>"
		id="list"><?php echo lang('purchase_history_list'); ?> </a>
	</li>
	<?php if ($this->auth->has_permission('Purchase_history.Reports.Create')) : ?>
	<li
	<?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a
		href="<?php echo site_url(SITE_AREA .'/reports/purchase_history/create') ?>"
		id="create_new"><?php echo lang('purchase_history_new'); ?> </a>
	</li>
	<?php endif; ?>
</ul>
