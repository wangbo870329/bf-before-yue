
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
	<a class="close" data-dismiss="alert">&times;</a>
	<h4 class="alert-heading">Please fix the following errors :</h4>
	<?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($industry) ) {
    $industry = (array)$industry;
}
$id = isset($industry['id']) ? $industry['id'] : '';
?>
<div class="admin-box">
	<h3>Industry</h3>
	<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
	<fieldset>
		<div
			class="control-group <?php echo form_error('industry_industry_name') ? 'error' : ''; ?>">
			<?php echo form_label('Industry'. lang('bf_form_label_required'), 'industry_industry_name', array('class' => "control-label") ); ?>
			<div class='controls'>
				<input id="industry_industry_name" type="text"
					name="industry_industry_name" maxlength="40"
					value="<?php echo set_value('industry_industry_name', isset($industry['industry_industry_name']) ? $industry['industry_industry_name'] : ''); ?>" />
				<span class="help-inline"><?php echo form_error('industry_industry_name'); ?>
				</span>
			</div>


		</div>



		<div class="form-actions">
			<br /> <input type="submit" name="save" class="btn btn-primary"
				value="Create Industry" /> or
			<?php echo anchor(SITE_AREA .'/settings/industry', lang('industry_cancel'), 'class="btn btn-warning"'); ?>

		</div>
	</fieldset>
	<?php echo form_close(); ?>


</div>
