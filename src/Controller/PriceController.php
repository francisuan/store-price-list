<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Price Controller
 *
 * @property \App\Model\Table\PriceTable $Price
 */
class PriceController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items']
        ];
        $price = $this->paginate($this->Price);
		
        $this->set(compact('price'));
        $this->set('_serialize', ['price']);
    }
	
	public function search()
    {
    }
	
}
