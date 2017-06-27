<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * LargeImageBoxes Controller
 *
 * @property \App\Model\Table\LargeImageBoxesTable $LargeImageBoxes
 *
 * @method \App\Model\Entity\LargeImageBox[] paginate($object = null, array $settings = [])
 */
class LargeImageBoxesController extends AppController
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
        $largeImageBoxes = $this->paginate($this->LargeImageBoxes);

        $this->set(compact('largeImageBoxes'));
        $this->set('_serialize', ['largeImageBoxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Large Image Box id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $largeImageBox = $this->LargeImageBoxes->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('largeImageBox', $largeImageBox);
        $this->set('_serialize', ['largeImageBox']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $largeImageBox = $this->LargeImageBoxes->newEntity();
        if ($this->request->is('post')) {
            $largeImageBox = $this->LargeImageBoxes->patchEntity($largeImageBox, $this->request->getData());
            if ($this->LargeImageBoxes->save($largeImageBox)) {
                $this->Flash->success(__('The large image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The large image box could not be saved. Please, try again.'));
        }
        $blogs = $this->LargeImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('largeImageBox', 'blogs'));
        $this->set('_serialize', ['largeImageBox']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Large Image Box id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $largeImageBox = $this->LargeImageBoxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $largeImageBox = $this->LargeImageBoxes->patchEntity($largeImageBox, $this->request->getData());
            if ($this->LargeImageBoxes->save($largeImageBox)) {
                $this->Flash->success(__('The large image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The large image box could not be saved. Please, try again.'));
        }
        $blogs = $this->LargeImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('largeImageBox', 'blogs'));
        $this->set('_serialize', ['largeImageBox']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Large Image Box id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $largeImageBox = $this->LargeImageBoxes->get($id);
        if ($this->LargeImageBoxes->delete($largeImageBox)) {
            $this->Flash->success(__('The large image box has been deleted.'));
        } else {
            $this->Flash->error(__('The large image box could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
