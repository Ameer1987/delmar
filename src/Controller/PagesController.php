<?php

/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function home() {
        $Contacts = TableRegistry::get('Contacts')->find('all');
        $this->set('Contacts', $Contacts->first());

        $HomeSliders = TableRegistry::get('HomeSliders')->find('all');
        $this->set('HomeSliders', $HomeSliders->toArray());

        $HomeBoxes = TableRegistry::get('HomeBoxes')->find('all');
        $this->set('HomeBoxes', $HomeBoxes->toArray());

        $SmallImageBoxes = TableRegistry::get('SmallImageBoxes')->find('all');
        $this->set('SmallImageBoxes', $SmallImageBoxes->toArray());

        $LargeImageBoxes = TableRegistry::get('LargeImageBoxes')->find('all', ['contain' => ['Blogs']]);
        $this->set('LargeImageBoxes', $LargeImageBoxes->toArray());

        $ResponsiveImageBoxes = TableRegistry::get('ResponsiveImageBoxes')->find('all');
        $this->set('ResponsiveImageBoxes', $ResponsiveImageBoxes->toArray());

        $Statistics = TableRegistry::get('Statistics')->find('all');
        $this->set('Statistics', $Statistics->first());

        $Testimonials = TableRegistry::get('Testimonials')->find('all');
        $this->set('Testimonials', $Testimonials->toArray());

        $BlockTabs = TableRegistry::get('BlockTabs')->find('all');
        $this->set('BlockTabs', $BlockTabs->toArray());

        $TextBlocks = TableRegistry::get('TextBlocks')->find('all');
        $this->set('TextBlocks', $TextBlocks->toArray());

        $SliderBranches = TableRegistry::get('SliderBranches')->find('all');
        $this->set('SliderBranches', $SliderBranches->toArray());

        $this->set('dir', "ltr");
        $this->set('lang', "en");
    }

    public function contactNow() {
        $Contacts = TableRegistry::get('Contacts')->find('all');
        $this->set('Contacts', $Contacts->first());

        $this->set('dir', "ltr");
        $this->set('lang', "en");
    }

}
