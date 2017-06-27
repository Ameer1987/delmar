<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * ResponsiveImageBoxes Controller
 *
 * @property \App\Model\Table\ResponsiveImageBoxesTable $ResponsiveImageBoxes
 *
 * @method \App\Model\Entity\ResponsiveImageBox[] paginate($object = null, array $settings = [])
 */
class ResponsiveImageBoxesController extends AppController
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
        $responsiveImageBoxes = $this->paginate($this->ResponsiveImageBoxes);

        $this->set(compact('responsiveImageBoxes'));
        $this->set('_serialize', ['responsiveImageBoxes']);
    }

    /**
     * View method
     *
     * @param string|null $id Responsive Image Box id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsiveImageBox = $this->ResponsiveImageBoxes->get($id, [
            'contain' => ['Blogs']
        ]);

        $this->set('responsiveImageBox', $responsiveImageBox);
        $this->set('_serialize', ['responsiveImageBox']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsiveImageBox = $this->ResponsiveImageBoxes->newEntity();
        if ($this->request->is('post')) {
            $responsiveImageBox = $this->ResponsiveImageBoxes->patchEntity($responsiveImageBox, $this->request->getData());
            if ($this->ResponsiveImageBoxes->save($responsiveImageBox)) {
                $this->Flash->success(__('The responsive image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsive image box could not be saved. Please, try again.'));
        }
        $blogs = $this->ResponsiveImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('responsiveImageBox', 'blogs'));
        $this->set('_serialize', ['responsiveImageBox']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsive Image Box id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsiveImageBox = $this->ResponsiveImageBoxes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsiveImageBox = $this->ResponsiveImageBoxes->patchEntity($responsiveImageBox, $this->request->getData());
            if ($this->ResponsiveImageBoxes->save($responsiveImageBox)) {
                $this->Flash->success(__('The responsive image box has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsive image box could not be saved. Please, try again.'));
        }
        $blogs = $this->ResponsiveImageBoxes->Blogs->find('list', ['limit' => 200]);
        $this->set(compact('responsiveImageBox', 'blogs'));
        $this->set('_serialize', ['responsiveImageBox']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsive Image Box id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsiveImageBox = $this->ResponsiveImageBoxes->get($id);
        if ($this->ResponsiveImageBoxes->delete($responsiveImageBox)) {
            $this->Flash->success(__('The responsive image box has been deleted.'));
        } else {
            $this->Flash->error(__('The responsive image box could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
