
<div class="login-box" style="margin: 0 auto">
  <div class="login-logo">
    <a href="<?php echo $this->Url->build(array('controller' => 'pages', 'action' => 'display', 'home')); ?>"><h1 style="margin:0 auto"><?php echo 'Delmar-Attalla' ?></h1></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <?= $this->Form->create(); ?>
        <?= $this->Form->input('email'); ?>
        <?= $this->Form->input('password', array('type' => 'password')); ?>
        <?= $this->Form->submit('Login', array('class' => 'button')); ?>
  </div>
  <!-- /.login-box-body -->
