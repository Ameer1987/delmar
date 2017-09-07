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
use Cake\Routing\Router;
use Cake\I18n\I18n;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    private $lang;

    public function switchLang($locale) {
        $this->request->session()->write('lang', $locale);

        $refer_url = $this->referer('/', true);

        return $this->redirect($refer_url);
    }

    public function setLang($request) {
        if (null === $request->session()->read('lang')) {
            $request->session()->write('lang', 'Arabic');
        }

        $this->lang = $request->session()->read('lang');
        I18n::locale($this->lang == "English" ? "en_GB" : "ar_AR");
    }

    public function home() {
        $this->setLang($this->request);

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

//        $Statistics = TableRegistry::get('Statistics')->find('all');
//        $this->set('Statistics', $Statistics->first());

        $Testimonials = TableRegistry::get('Testimonials')->find('all');
        $this->set('Testimonials', $Testimonials->toArray());

        $BlockTabs = TableRegistry::get('BlockTabs')->find('all');
        $this->set('BlockTabs', $BlockTabs->toArray());

        $TextBlocks = TableRegistry::get('TextBlocks')->find('all');
        $this->set('TextBlocks', $TextBlocks->toArray());

        $SliderBranches = TableRegistry::get('SliderBranches')->find('all');
        $this->set('SliderBranches', $SliderBranches->toArray());

        $Magazines = TableRegistry::get('Magazines')->find('all', ['order' => ['order' => 'ASC']]);
        $this->set('Magazines', $Magazines->toArray());

        $Careers = TableRegistry::get('Careers')->find('all');
        $this->set('Careers', $Careers->toArray());

        $lang = $this->lang == "English" ? "en" : "ar";
        $dir = $this->lang == "English" ? "ltr" : "rtl";
        $this->set('dir', $dir);
        $this->set('lang', $lang);
    }

    public function nearestBranch() {
        $this->setLang($this->request);

        $Contacts = TableRegistry::get('Contacts')->find('all');
        $this->set('Contacts', $Contacts->first());

        $SliderBranches = TableRegistry::get('SliderBranches')->find('all');
        $this->set('SliderBranches', $SliderBranches->toArray());

        $lang = $this->lang == "English" ? "en" : "ar";
        $dir = $this->lang == "English" ? "ltr" : "rtl";
        $this->set('dir', $dir);
        $this->set('lang', $lang);
    }

    public function contactNow() {
        $this->setLang($this->request);

        $Contacts = TableRegistry::get('Contacts')->find('all');
        $this->set('Contacts', $Contacts->first());

        $lang = $this->lang == "English" ? "en" : "ar";
        $dir = $this->lang == "English" ? "ltr" : "rtl";
        $this->set('dir', $dir);
        $this->set('lang', $lang);
    }

    public function viewBlog($blog_id) {
        $this->setLang($this->request);

        $Blog = TableRegistry::get('Blogs')->find('all')
                ->where(['Blogs.id' => $blog_id]);

        $this->set('Blog', $Blog->first());

        $Contacts = TableRegistry::get('Contacts')->find('all');
        $this->set('Contacts', $Contacts->first());

        $lang = $this->lang == "English" ? "en" : "ar";
        $dir = $this->lang == "English" ? "ltr" : "rtl";
        $this->set('dir', $dir);
        $this->set('lang', $lang);
    }

    public function sendMailConsultation() {
        $this->autoRender = false;

        $Contacts = TableRegistry::get('Contacts')->find('all')->first()->toArray();
        $data = $this->request->getData();

        $email = new Email('default');
        $emailStr = 'Name: ' . $data['form_name'] . '<br /> Email: ' . $data['form_email']
                . '<br /> Subject: ' . $data['form_subject'] . '<br /> Phone: ' . $data['form_phone']
                . '<br /> Message: ' . $data['form_message'];
        $email->from(['no-reply@delmar-attalla.com' => 'Delmar & Attalla'])
                ->to($Contacts['email_consultation'])
                ->subject('Consultation')
                ->emailFormat('html')
                ->send($emailStr);

        $status_array = array(
            'message' => 'Thanks for contacting us, your email was sent successfully and our team will contact you as soon as possible.',
            'status' => true
        );
        echo json_encode($status_array);
    }

    public function sendMailContact() {
        $this->autoRender = false;

        $Contacts = TableRegistry::get('Contacts')->find('all')->first()->toArray();
        $data = $this->request->getData();

        $email = new Email('default');
        $emailStr = 'Name: ' . $data['form_name'] . '<br /> Email: ' . $data['form_email']
                . '<br /> Subject: ' . $data['form_subject'] . '<br /> Phone: ' . $data['form_phone']
                . '<br /> Message: ' . $data['form_message'];
        $email->from(['no-reply@delmar-attalla.com' => 'Delmar & Attalla'])
                ->to($Contacts['email_contacts'])
                ->subject('Contact us')
                ->emailFormat('html')
                ->send($emailStr);

        $status_array = array(
            'message' => 'Thanks for contacting us, your email was sent successfully and our team will contact you as soon as possible.',
            'status' => true
        );
        echo json_encode($status_array);
    }

    public function sendMailCareer() {
        $this->autoRender = false;

        $Contacts = TableRegistry::get('Contacts')->find('all')->first()->toArray();
        $data = $this->request->getData();

        $email = new Email('default');
        $emailStr = 'Name: ' . $data['form_name'] . '<br /> Email: ' . $data['form_email']
                . '<br /> Sex: ' . $data['form_sex'] . '<br /> Job: ' . $data['form_job']
                . '<br /> Message: ' . $data['form_message'];
        $email->from(['no-reply@delmar-attalla.com' => 'Delmar & Attalla'])
                ->to($Contacts['email_career'])
                ->subject('C.V ' . $data['form_job'])
                ->emailFormat('html')
                ->attachments([$data['form_attachment']['name'] => $data['form_attachment']['tmp_name']])
                ->send($emailStr);

        $status_array = array(
            'message' => 'Thanks for contacting us, your email was sent successfully and our team will contact you as soon as possible.',
            'status' => true
        );
        echo json_encode($status_array);
    }

}
