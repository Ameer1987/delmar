<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * HomeBoxes Controller
 *
 * @property \App\Model\Table\HomeBoxesTable $HomeBoxes
 *
 * @method \App\Model\Entity\HomeBox[] paginate($object = null, array $settings = [])
 */
class HomeBoxesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $homeBoxes = $this->paginate($this->HomeBoxes);

        $this->set(compact('homeBoxes'));
        $this->set('_serialize', ['homeBoxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Home Box id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeBox = $this->HomeBoxes->get($id, [
            'contain' => []
        ]);

        $this->set('homeBox', $homeBox);
        $this->set('_serialize', ['homeBox']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeBox = $this->HomeBoxes->newEntity();
        if ($this->request->is('post')) {
            $homeBox = $this->HomeBoxes->patchEntity($homeBox, $this->request->getData());
            if ($this->HomeBoxes->save($homeBox)) {
                $this->Flash->success(__('The home box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home box could not be saved. Please, try again.'));
        }
        $this->set(compact('homeBox'));
        $this->set('_serialize', ['homeBox']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Box id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeBox = $this->HomeBoxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeBox = $this->HomeBoxes->patchEntity($homeBox, $this->request->getData());
            if ($this->HomeBoxes->save($homeBox)) {
                $this->Flash->success(__('The home box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home box could not be saved. Please, try again.'));
        }
        $this->set(compact('homeBox'));
        $this->set('_serialize', ['homeBox']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Box id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeBox = $this->HomeBoxes->get($id);
        if ($this->HomeBoxes->delete($homeBox)) {
            $this->Flash->success(__('The home box has been deleted.'));
        } else {
            $this->Flash->error(__('The home box could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
