<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Title', 'title', array('class'=>'control-label')); ?>

				<?php echo Form::input('title', Input::post('title', isset($blog) ? $blog->title : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Title')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Slug', 'slug', array('class'=>'control-label')); ?>

				<?php echo Form::input('slug', Input::post('slug', isset($blog) ? $blog->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Slug')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Body', 'body', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('body', Input::post('body', isset($blog) ? $blog->body : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Body')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Date', 'date', array('class'=>'control-label')); ?>

				<?php echo Form::input('date', Input::post('date', isset($blog) ? $blog->date : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Date')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>