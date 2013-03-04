<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/user/text_form') ?>"
		id="list"><?php echo lang('text_form_list'); ?> </a>
	</li>
	<?php if ($this->auth->has_permission('Text_form.User.Create')) : ?>
	<li
	<?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/user/text_form/create') ?>"
		id="create_new"><?php echo lang('text_form_new'); ?> </a>
	</li>
	<?php endif; ?>
</ul>
