<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TextBlocks Controller
 *
 * @property \App\Model\Table\TextBlocksTable $TextBlocks
 *
 * @method \App\Model\Entity\TextBlock[] paginate($object = null, array $settings = [])
 */
class TextBlocksController extends AppController
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
        $textBlocks = $this->paginate($this->TextBlocks);

        $this->set(compact('textBlocks'));
        $this->set('_serialize', ['textBlocks']);
    }

    /**
     * View method
     *
     * @param string|null $id Text Block id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $textBlock = $this->TextBlocks->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('textBlock', $textBlock);
        $this->set('_serialize', ['textBlock']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $textBlock = $this->TextBlocks->newEntity();
        if ($this->request->is('post')) {
            $textBlock = $this->TextBlocks->patchEntity($textBlock, $this->request->getData());
            if ($this->TextBlocks->save($textBlock)) {
                $this->Flash->success(__('The text block has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The text block could not be saved. Please, try again.'));
        }
        $blogs = $this->TextBlocks->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('textBlock', 'blogs'));
        $this->set('_serialize', ['textBlock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Text Block id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $textBlock = $this->TextBlocks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $textBlock = $this->TextBlocks->patchEntity($textBlock, $this->request->getData());
            if ($this->TextBlocks->save($textBlock)) {
                $this->Flash->success(__('The text block has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The text block could not be saved. Please, try again.'));
        }
        $blogs = $this->TextBlocks->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('textBlock', 'blogs'));
        $this->set('_serialize', ['textBlock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Text Block id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $textBlock = $this->TextBlocks->get($id);
        if ($this->TextBlocks->delete($textBlock)) {
            $this->Flash->success(__('The text block has been deleted.'));
        } else {
            $this->Flash->error(__('The text block could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
