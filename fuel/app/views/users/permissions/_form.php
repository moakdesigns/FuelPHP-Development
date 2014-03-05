<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Area', 'area', array('class'=>'control-label')); ?>

				<?php echo Form::input('area', Input::post('area', isset($users_permission) ? $users_permission->area : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Area')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Permission', 'permission', array('class'=>'control-label')); ?>

				<?php echo Form::input('permission', Input::post('permission', isset($users_permission) ? $users_permission->permission : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Permission')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Description', 'description', array('class'=>'control-label')); ?>

				<?php echo Form::input('description', Input::post('description', isset($users_permission) ? $users_permission->description : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Description')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Actions', 'actions', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('actions', Input::post('actions', isset($users_permission) ? $users_permission->actions : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Actions')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($users_permission) ? $users_permission->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>