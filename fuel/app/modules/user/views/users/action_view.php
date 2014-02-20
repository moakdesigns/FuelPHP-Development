<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "action_view" ); ?>'><?php echo Html::anchor('users/action_view','Action view');?></li>
	<li class='<?php echo Arr::get($subnav, "action_edit" ); ?>'><?php echo Html::anchor('users/action_edit','Action edit');?></li>
	<li class='<?php echo Arr::get($subnav, "action_delete" ); ?>'><?php echo Html::anchor('users/action_delete','Action delete');?></li>

</ul>
<p>Action view</p>