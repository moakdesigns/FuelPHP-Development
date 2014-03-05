<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Parent id', 'parent_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('parent_id', Input::post('parent_id', isset($users_provider) ? $users_provider->parent_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Parent id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Provider', 'provider', array('class'=>'control-label')); ?>

				<?php echo Form::input('provider', Input::post('provider', isset($users_provider) ? $users_provider->provider : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Provider')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Uid', 'uid', array('class'=>'control-label')); ?>

				<?php echo Form::input('uid', Input::post('uid', isset($users_provider) ? $users_provider->uid : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Uid')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Secret', 'secret', array('class'=>'control-label')); ?>

				<?php echo Form::input('secret', Input::post('secret', isset($users_provider) ? $users_provider->secret : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Secret')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Access token', 'access_token', array('class'=>'control-label')); ?>

				<?php echo Form::input('access_token', Input::post('access_token', isset($users_provider) ? $users_provider->access_token : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Access token')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Expires', 'expires', array('class'=>'control-label')); ?>

				<?php echo Form::input('expires', Input::post('expires', isset($users_provider) ? $users_provider->expires : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Expires')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Refresh token', 'refresh_token', array('class'=>'control-label')); ?>

				<?php echo Form::input('refresh_token', Input::post('refresh_token', isset($users_provider) ? $users_provider->refresh_token : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Refresh token')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($users_provider) ? $users_provider->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>