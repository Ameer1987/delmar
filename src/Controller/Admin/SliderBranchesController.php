<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * SliderBranches Controller
 *
 * @property \App\Model\Table\SliderBranchesTable $SliderBranches
 *
 * @method \App\Model\Entity\SliderBranch[] paginate($object = null, array $settings = [])
 */
class SliderBranchesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sliderBranches = $this->paginate($this->SliderBranches);

        $this->set(compact('sliderBranches'));
        $this->set('_serialize', ['sliderBranches']);
    }

    /**
     * View method
     *
     * @param string|null $id Slider Branch id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sliderBranch = $this->SliderBranches->get($id, [
            'contain' => []
        ]);

        $this->set('sliderBranch', $sliderBranch);
        $this->set('_serialize', ['sliderBranch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sliderBranch = $this->SliderBranches->newEntity();
        if ($this->request->is('post')) {
            $sliderBranch = $this->SliderBranches->patchEntity($sliderBranch, $this->request->getData());
            if ($this->SliderBranches->save($sliderBranch)) {
                $this->Flash->success(__('The slider branch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slider branch could not be saved. Please, try again.'));
        }
        $this->set(compact('sliderBranch'));
        $this->set('_serialize', ['sliderBranch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Slider Branch id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sliderBranch = $this->SliderBranches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sliderBranch = $this->SliderBranches->patchEntity($sliderBranch, $this->request->getData());
            if ($this->SliderBranches->save($sliderBranch)) {
                $this->Flash->success(__('The slider branch has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The slider branch could not be saved. Please, try again.'));
        }
        $this->set(compact('sliderBranch'));
        $this->set('_serialize', ['sliderBranch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Slider Branch id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sliderBranch = $this->SliderBranches->get($id);
        if ($this->SliderBranches->delete($sliderBranch)) {
            $this->Flash->success(__('The slider branch has been deleted.'));
        } else {
            $this->Flash->error(__('The slider branch could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
