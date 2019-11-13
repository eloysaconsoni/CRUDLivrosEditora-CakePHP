<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Editoras Controller
 *
 * @property \App\Model\Table\EditorasTable $Editoras
 *
 * @method \App\Model\Entity\Editora[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EditorasController extends AppController
{
    /** 
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $editoras = $this->paginate($this->Editoras);

        $this->set(compact('editoras'));
    }

    /**
     * View method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $editora = $this->Editoras->get($id, [
            'contain' => ['Livros']
        ]);

        $this->set('editora', $editora);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $editora = $this->Editoras->newEntity();
        if ($this->request->is('post')) {
            $editora = $this->Editoras->patchEntity($editora, $this->request->getData());
            if ($this->Editoras->save($editora)) {
                $this->Flash->success(__('The editora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editora could not be saved. Please, try again.'));
        }
        $this->set(compact('editora'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $editora = $this->Editoras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $editora = $this->Editoras->patchEntity($editora, $this->request->getData());
            if ($this->Editoras->save($editora)) {
                $this->Flash->success(__('The editora has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The editora could not be saved. Please, try again.'));
        }
        $this->set(compact('editora'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Editora id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $editora = $this->Editoras->get($id);
        if ($this->Editoras->delete($editora)) {
            $this->Flash->success(__('The editora has been deleted.'));
        } else {
            $this->Flash->error(__('The editora could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
