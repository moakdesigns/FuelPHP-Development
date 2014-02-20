<ul class="nav nav-pills">
	<li class='<?php echo Arr::get($subnav, "action_view" ); ?>'><?php echo Html::anchor('users/action_view','Action view');?></li>
	<li class='<?php echo Arr::get($subnav, "action_edit--module=user" ); ?>'><?php echo Html::anchor('users/action_edit--module=user','Action edit--module=user');?></li>

</ul>
<p>Action edit--module=user</p>