<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('First name', 'first_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('first_name', Input::post('first_name', isset($contact) ? $contact->first_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'First name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Last name', 'last_name', array('class'=>'control-label')); ?>

				<?php echo Form::input('last_name', Input::post('last_name', isset($contact) ? $contact->last_name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Last name')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Client id', 'client_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('client_id', Input::post('client_id', isset($contact) ? $contact->client_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Client id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Email', 'email', array('class'=>'control-label')); ?>

				<?php echo Form::input('email', Input::post('email', isset($contact) ? $contact->email : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Email')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Phone', 'phone', array('class'=>'control-label')); ?>

				<?php echo Form::input('phone', Input::post('phone', isset($contact) ? $contact->phone : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Phone')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($contact) ? $contact->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>