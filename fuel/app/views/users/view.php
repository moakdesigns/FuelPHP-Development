<h2>Viewing <span class='muted'>#<?php echo $user->id; ?></span></h2>


<?php echo Html::anchor('users/edit/'.$user->id, 'Edit'); ?> |
<?php echo Html::anchor('users', 'Back'); ?>