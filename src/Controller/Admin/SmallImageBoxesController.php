<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SmallImageBoxes Controller
 *
 * @property \App\Model\Table\SmallImageBoxesTable $SmallImageBoxes
 *
 * @method \App\Model\Entity\SmallImageBox[] paginate($object = null, array $settings = [])
 */
class SmallImageBoxesController extends AppController
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
        $smallImageBoxes = $this->paginate($this->SmallImageBoxes);

        $this->set(compact('smallImageBoxes'));
        $this->set('_serialize', ['smallImageBoxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Small Image Box id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $smallImageBox = $this->SmallImageBoxes->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('smallImageBox', $smallImageBox);
        $this->set('_serialize', ['smallImageBox']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $smallImageBox = $this->SmallImageBoxes->newEntity();
        if ($this->request->is('post')) {
            $smallImageBox = $this->SmallImageBoxes->patchEntity($smallImageBox, $this->request->getData());
            if ($this->SmallImageBoxes->save($smallImageBox)) {
                $this->Flash->success(__('The small image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The small image box could not be saved. Please, try again.'));
        }
        $blogs = $this->SmallImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('smallImageBox', 'blogs'));
        $this->set('_serialize', ['smallImageBox']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Small Image Box id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $smallImageBox = $this->SmallImageBoxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smallImageBox = $this->SmallImageBoxes->patchEntity($smallImageBox, $this->request->getData());
            if ($this->SmallImageBoxes->save($smallImageBox)) {
                $this->Flash->success(__('The small image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The small image box could not be saved. Please, try again.'));
        }
        $blogs = $this->SmallImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('smallImageBox', 'blogs'));
        $this->set('_serialize', ['smallImageBox']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Small Image Box id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smallImageBox = $this->SmallImageBoxes->get($id);
        if ($this->SmallImageBoxes->delete($smallImageBox)) {
            $this->Flash->success(__('The small image box has been deleted.'));
        } else {
            $this->Flash->error(__('The small image box could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
