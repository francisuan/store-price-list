<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories','Price']
        ];
        $items = $this->paginate($this->Items);
        $this->set(compact('items'));
        $this->set('_serialize', ['items']);
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Categories', 'Price']
        ]);

        $this->set('item', $item);
        $this->set('_serialize', ['item']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $price = $this->Items->Price->newEntity();
                $price->item_id = $item->id;
                $price->price = $item->Price['price'];
                if($this->Items->Price->save($price)){
                    $this->Flash->success(__('The item has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $this->set(compact('item', 'categories'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Price']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $submitted_data = $this->request->getData();
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                //if there is a change of price, create a new instance on the price table
                if($item->price[0]->price!=$submitted_data['Price']['price']){
                    $price = $this->Items->Price->newEntity();
                    $price->item_id = $item->id;
                    $price->price = $submitted_data['Price']['price'];
                    $this->Items->Price->save($price);
                }   
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $this->set(compact('item', 'categories'));
        $this->set('_serialize', ['item']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
	
	public function search(){
		//$this->request->allowMethod(['post']);
		$request = $this->request->getData();
		if(empty($request)) $request['q'] = 'Tanduay';
        if($request['q'] != '' ){
            $items = $this->Items->find('all')
                ->where(["Items.name LIKE '%".addslashes($request['q'])."%' OR Items.category_id IN (SELECT id FROM `categories` WHERE name LIKE '%".addslashes($request['q'])."%')"])
                ->contain(['Categories','Price']);
            $this->set(compact('items'));
            $this->set('_serialize', ['items']);
        }	
	}
}
