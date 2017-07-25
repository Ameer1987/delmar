<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html dir="<?= $dir ?>" lang="<?= $lang ?>">
    <head>
        <?= $this->Html->charset() ?>

        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Medicale - Health & Medical HTML5 Template" />
        <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
        <meta name="author" content="ThemeMascot" />

        <title>Delmar and Attalla pharmacies</title>

        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('jquery-ui.min.css') ?>
        <?= $this->Html->css('animate.css') ?>
        <?= $this->Html->css('css-plugin-collections.css') ?>
        <?= $this->Html->css('menuzord-skins/menuzord-border-bottom.css') ?>
        <?= $this->Html->css('style-main.css') ?>
        <?= $this->Html->css('style.css') ?>
        <?php if ($dir == "rtl"): ?>
            <?= $this->Html->css('bootstrap-rtl.min.css') ?>
            <?= $this->Html->css('style-main-rtl.css') ?>
            <?= $this->Html->css('style-main-rtl-extra.css') ?>
        <?php endif; ?>
        <?= $this->Html->css('preloader.css') ?>
        <?= $this->Html->css('custom-bootstrap-margin-padding.css') ?>
        <?= $this->Html->css('responsive.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/settings.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/layers.css') ?>
        <?= $this->Html->css('../js/revolution-slider/css/navigation.css') ?>
        <?= $this->Html->css('colors/theme-skin-blue6.css') ?>


        <?= $this->Html->script('jquery-2.2.4.min.js') ?>
        <?= $this->Html->script('jquery-ui.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('jquery-plugin-collection.js') ?>
        <?= $this->Html->script('revolution-slider/js/jquery.themepunch.tools.min.js') ?>
        <?= $this->Html->script('revolution-slider/js/jquery.themepunch.revolution.min.js') ?>
        <?= $this->Html->script('custom.js') ?>

        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body class="<?= $dir ?>">
        <?= $this->Flash->render() ?>
        <div id="wrapper" class="clearfix">
            <?php // echo $this->element('preloader'); ?>

            <?= $this->element('header') ?>

            <?= $this->fetch('content') ?>

            <?= $this->element('footer') ?>

            <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
        </div>
    </body>
</html>
