<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($user) ? $user->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last name', 'last_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_name', Input::post('last_name', isset($user) ? $user->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last name')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>