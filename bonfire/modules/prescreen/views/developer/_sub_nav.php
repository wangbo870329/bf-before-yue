<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/developer/prescreen') ?>"
		id="list"><?php echo lang('prescreen_list'); ?> </a>
	</li>
	<?php if ($this->auth->has_permission('Prescreen.Developer.Create')) : ?>
	<li
	<?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a
		href="<?php echo site_url(SITE_AREA .'/developer/prescreen/create') ?>"
		id="create_new"><?php echo lang('prescreen_new'); ?> </a>
	</li>
	<?php endif; ?>
</ul>
