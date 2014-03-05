<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Parent id', 'parent_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('parent_id', Input::post('parent_id', isset($users_metadatum) ? $users_metadatum->parent_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parent id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Key', 'key', array('class'=>'control-label')); ?>

				<?php echo Form::input('key', Input::post('key', isset($users_metadatum) ? $users_metadatum->key : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Key')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Value', 'value', array('class'=>'control-label')); ?>

				<?php echo Form::input('value', Input::post('value', isset($users_metadatum) ? $users_metadatum->value : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Value')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($users_metadatum) ? $users_metadatum->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>