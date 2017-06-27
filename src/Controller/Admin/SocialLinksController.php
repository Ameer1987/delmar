<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SocialLinks Controller
 *
 * @property \App\Model\Table\SocialLinksTable $SocialLinks
 *
 * @method \App\Model\Entity\SocialLink[] paginate($object = null, array $settings = [])
 */
class SocialLinksController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Blogs']
        ];
        $socialLinks = $this->paginate($this->SocialLinks);

        $this->set(compact('socialLinks'));
        $this->set('_serialize', ['socialLinks']);
    }

    /**
     * View method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $socialLink = $this->SocialLinks->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('socialLink', $socialLink);
        $this->set('_serialize', ['socialLink']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $socialLink = $this->SocialLinks->newEntity();
        if ($this->request->is('post')) {
            $socialLink = $this->SocialLinks->patchEntity($socialLink, $this->request->getData());
            if ($this->SocialLinks->save($socialLink)) {
                $this->Flash->success(__('The social link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social link could not be saved. Please, try again.'));
        }
        $blogs = $this->SocialLinks->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('socialLink', 'blogs'));
        $this->set('_serialize', ['socialLink']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $socialLink = $this->SocialLinks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $socialLink = $this->SocialLinks->patchEntity($socialLink, $this->request->getData());
            if ($this->SocialLinks->save($socialLink)) {
                $this->Flash->success(__('The social link has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The social link could not be saved. Please, try again.'));
        }
        $blogs = $this->SocialLinks->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('socialLink', 'blogs'));
        $this->set('_serialize', ['socialLink']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Social Link id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $socialLink = $this->SocialLinks->get($id);
        if ($this->SocialLinks->delete($socialLink)) {
            $this->Flash->success(__('The social link has been deleted.'));
        } else {
            $this->Flash->error(__('The social link could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
