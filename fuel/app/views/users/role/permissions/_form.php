<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Role id', 'role_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('role_id', Input::post('role_id', isset($users_role_permission) ? $users_role_permission->role_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Role id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Perms id', 'perms_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('perms_id', Input::post('perms_id', isset($users_role_permission) ? $users_role_permission->perms_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Perms id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Actions', 'actions', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('actions', Input::post('actions', isset($users_role_permission) ? $users_role_permission->actions : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Actions')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>