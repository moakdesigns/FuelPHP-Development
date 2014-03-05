<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Session id', 'session_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('session_id', Input::post('session_id', isset($users_sessionscope) ? $users_sessionscope->session_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Session id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Access token', 'access_token', array('class'=>'control-label')); ?>

				<?php echo Form::input('access_token', Input::post('access_token', isset($users_sessionscope) ? $users_sessionscope->access_token : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Access token')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Scope', 'scope', array('class'=>'control-label')); ?>

				<?php echo Form::input('scope', Input::post('scope', isset($users_sessionscope) ? $users_sessionscope->scope : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Scope')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>