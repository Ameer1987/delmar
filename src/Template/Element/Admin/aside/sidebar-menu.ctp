<?php

$file = $theme['folder'] . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><?= $this->Html->link(__('List Home Boxes'), ['controller' => 'HomeBoxes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Home Sliders'), ['controller' => 'HomeSliders', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Large Image Boxes'), ['controller' => 'LargeImageBoxes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Responsive Image Boxes'), ['controller' => 'ResponsiveImageBoxes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Small Image Boxes'), ['controller' => 'SmallImageBoxes', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Block Tabs'), ['controller' => 'BlockTabs', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Slider Branches'), ['controller' => 'SliderBranches', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Statistics'), ['controller' => 'Statistics', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Testimonials'), ['controller' => 'Testimonials', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Text Blocks'), ['controller' => 'TextBlocks', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Magazines'), ['controller' => 'Magazines', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Careers'), ['controller' => 'Careers', 'action' => 'index']) ?></li>
        </ul>
    </li>
    
</ul>
<?php } ?>
