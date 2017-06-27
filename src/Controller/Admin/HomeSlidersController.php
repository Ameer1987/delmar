<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * HomeSliders Controller
 *
 * @property \App\Model\Table\HomeSlidersTable $HomeSliders
 *
 * @method \App\Model\Entity\HomeSlider[] paginate($object = null, array $settings = [])
 */
class HomeSlidersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $homeSliders = $this->paginate($this->HomeSliders);

        $this->set(compact('homeSliders'));
        $this->set('_serialize', ['homeSliders']);
    }

    /**
     * View method
     *
     * @param string|null $id Home Slider id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $homeSlider = $this->HomeSliders->get($id, [
            'contain' => []
        ]);

        $this->set('homeSlider', $homeSlider);
        $this->set('_serialize', ['homeSlider']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homeSlider = $this->HomeSliders->newEntity();
        if ($this->request->is('post')) {
            $homeSlider = $this->HomeSliders->patchEntity($homeSlider, $this->request->getData());
            if ($this->HomeSliders->save($homeSlider)) {
                $this->Flash->success(__('The home slider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home slider could not be saved. Please, try again.'));
        }
        $this->set(compact('homeSlider'));
        $this->set('_serialize', ['homeSlider']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Home Slider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homeSlider = $this->HomeSliders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homeSlider = $this->HomeSliders->patchEntity($homeSlider, $this->request->getData());
            if ($this->HomeSliders->save($homeSlider)) {
                $this->Flash->success(__('The home slider has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The home slider could not be saved. Please, try again.'));
        }
        $this->set(compact('homeSlider'));
        $this->set('_serialize', ['homeSlider']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Home Slider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homeSlider = $this->HomeSliders->get($id);
        if ($this->HomeSliders->delete($homeSlider)) {
            $this->Flash->success(__('The home slider has been deleted.'));
        } else {
            $this->Flash->error(__('The home slider could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
