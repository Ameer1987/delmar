<?php

$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
    <?php
        $loggeduser = $this->request->session()->read('Auth.User');
            if($loggeduser) {
                $loggeduser['username'] ;
                ?>
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            
            <!-- Notifications: style can be found in dropdown.less -->
            
            <!-- Tasks: style can be found in dropdown.less -->
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'user-image', 'alt' => 'User Image')); ?>
                    <span class="hidden-xs">
                        <?php
        $loggeduser = $this->request->session()->read('Auth.User');
            if($loggeduser) 
                 echo $loggeduser['username'];
                ?>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <?php echo $this->Html->image('user2-160x160.jpg', array('class' => 'img-circle', 'alt' => 'User Image')); ?>

                        <p>
                            <?php
        $loggeduser = $this->request->session()->read('Auth.User');
            if($loggeduser) 
                 echo $loggeduser['username'];
                ?>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <?= $this->Html->link('Profile', ['controller' => 'users', 'action' => 'view', $loggeduser['id'] ], array('class' => 'btn btn-default btn-flat')) ?>
                        </div>
                        <div class="pull-right">
                            <?= $this->Html->link('Sign out', ['controller' => 'users', 'action' => 'logout' ], array('class' => 'btn btn-default btn-flat')) ?>
                        </div>
                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            
        </ul>
    <?php 
                } 
    ?>
    </div>
</nav>
<?php } ?>