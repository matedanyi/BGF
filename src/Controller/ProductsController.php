<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\SearchGameForm;

class ProductsController extends AppController
{
    public function index()
    {
        //  $this->generateProducts();

        $this->loadComponent('Paginator');

        $hideCancel = true;
        $searchGame = new SearchGameForm();

        if ($this->request->is('post')) { /*$this->request->getData() Ebben jön az adat, erre kell where feltétel. Keresni a tjáték nevében, utána a kiadók között is. */
            $hideCancel = false;
            $search = $this->request->getData();
            $products = $this->Paginator->paginate(
                $this->Products->find('all')
                    ->where([
                        'or' => array(
                            'Boardgames.name like' => '%' . $search['name'] . '%',
                            'Publishers.name like' => '%' . $search['name'] . '%'
                        )
                    ])
                    ->order(['Products.id' => 'DESC'])
                    ->contain(['Publishers', 'Boardgames']),
                (['limit' => '10'])
            );
        } else {
            $products = $this->Paginator->paginate(
                $this->Products->find('all')
                    ->order(['Products.id' => 'DESC'])
                    ->contain(['Publishers', 'Boardgames']),
                ['limit' => '10']
            );
        }

        $this->set(compact('hideCancel'));
        $this->set(compact('searchGame'));

        $this->set(compact('products'));
    }

    public function startGenerateProducts()
    {
        $this->generateProducts();

        $this->redirect(['action' => 'index']);
    }
}
