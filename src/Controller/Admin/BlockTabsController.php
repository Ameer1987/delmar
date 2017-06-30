<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * BlockTabs Controller
 *
 * @property \App\Model\Table\BlockTabsTable $BlockTabs
 *
 * @method \App\Model\Entity\BlockTab[] paginate($object = null, array $settings = [])
 */
class BlockTabsController extends AppController
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
        $blockTabs = $this->paginate($this->BlockTabs);

        $this->set(compact('blockTabs'));
        $this->set('_serialize', ['blockTabs']);
    }

    /**
     * View method
     *
     * @param string|null $id Block Tab id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blockTab = $this->BlockTabs->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('blockTab', $blockTab);
        $this->set('_serialize', ['blockTab']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $blockTab = $this->BlockTabs->newEntity();
        if ($this->request->is('post')) {
            $blockTab = $this->BlockTabs->patchEntity($blockTab, $this->request->getData());
            if ($this->BlockTabs->save($blockTab)) {
                $this->Flash->success(__('The block tab has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The block tab could not be saved. Please, try again.'));
        }
        $blogs = $this->BlockTabs->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('blockTab', 'blogs'));
        $this->set('_serialize', ['blockTab']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Block Tab id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $blockTab = $this->BlockTabs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $blockTab = $this->BlockTabs->patchEntity($blockTab, $this->request->getData());
            if ($this->BlockTabs->save($blockTab)) {
                $this->Flash->success(__('The block tab has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The block tab could not be saved. Please, try again.'));
        }
        $blogs = $this->BlockTabs->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('blockTab', 'blogs'));
        $this->set('_serialize', ['blockTab']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Block Tab id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blockTab = $this->BlockTabs->get($id);
        if ($this->BlockTabs->delete($blockTab)) {
            $this->Flash->success(__('The block tab has been deleted.'));
        } else {
            $this->Flash->error(__('The block tab could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
