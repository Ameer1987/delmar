<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Magazines Controller
 *
 * @property \App\Model\Table\MagazinesTable $Magazines
 *
 * @method \App\Model\Entity\Magazine[] paginate($object = null, array $settings = [])
 */
class MagazinesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $magazines = $this->paginate($this->Magazines);

        $this->set(compact('magazines'));
        $this->set('_serialize', ['magazines']);
    }

    /**
     * View method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $magazine = $this->Magazines->get($id, [
            'contain' => []
        ]);

        $this->set('magazine', $magazine);
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $magazine = $this->Magazines->newEntity();
        if ($this->request->is('post')) {
            $magazine = $this->Magazines->patchEntity($magazine, $this->request->getData());
            if ($this->Magazines->save($magazine)) {
                $this->Flash->success(__('The magazine has been saved.'));
                $extension = pathinfo($magazine['folder'], PATHINFO_EXTENSION);
                if ($extension == 'zip') {
                    $zip = new \ZipArchive();
                    if ($zip->open("../" . $magazine['folder_dir'] . $magazine['folder']) === TRUE) {
                        $zip->extractTo("../" . $magazine['folder_dir'] . 'magazine_' . $magazine['id']);
                        $zip->close();
                    } else {
                        echo 'Failed to open the archive!';
                    }
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
        }
        $this->set(compact('magazine'));
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $magazine = $this->Magazines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $magazine = $this->Magazines->patchEntity($magazine, $this->request->getData());
            if ($this->Magazines->save($magazine)) {
                $this->Flash->success(__('The magazine has been saved.'));
                $extension = pathinfo($magazine['folder'], PATHINFO_EXTENSION);
                if ($extension == 'zip') {
                    $zip = new \ZipArchive();
                    if ($zip->open("../" . $magazine['folder_dir'] . $magazine['folder']) === TRUE) {
                        $zip->extractTo("../" . $magazine['folder_dir'] . '/magazine_' . $magazine['id']);
                        $zip->close();
                    } else {
                        echo 'Failed to open the archive!';
                    }
                }
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The magazine could not be saved. Please, try again.'));
        }
        $this->set(compact('magazine'));
        $this->set('_serialize', ['magazine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Magazine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $magazine = $this->Magazines->get($id);
        if ($this->Magazines->delete($magazine)) {
            $this->Flash->success(__('The magazine has been deleted.'));
        } else {
            $this->Flash->error(__('The magazine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
