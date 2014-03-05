<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Group id', 'group_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('group_id', Input::post('group_id', isset($users_group_role) ? $users_group_role->group_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Group id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Role id', 'role_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($users_group_role) ? $users_group_role->role_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>