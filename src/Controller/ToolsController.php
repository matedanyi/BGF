<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\SearchGameForm;

class ToolsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');

        $hideCancel = true;

        $searchGame = new SearchGameForm();

        if ($this->request->is('post')) { /*$this->request->getData() Ebben jön az adat, erre kell where feltétel. Keresni a tjáték nevében, utána a kiadók között is. */
            $hideCancel = false;
            $search = $this->request->getData();
            $tools = $this->Paginator->paginate($this->Tools->find('all')
                ->where([
                    'or' => array(
                        'Tools.name like' => '%' . $search['name'] . '%',
                        'Publishers.name like' => '%' . $search['name'] . '%'
                    )
                ])
                ->contain(['Publishers', 'Lifetimes']), (['limit' => '10']));
        } else {
            $tools = $this->Paginator->paginate($this->Tools->find('all')
                ->where(['active >' => 0])
                ->order(['tools.id' => 'DESC'])
                ->contain(['Publishers', 'Lifetimes']), ['limit' => '10']);
        }

        $this->set(compact('hideCancel'));
        $this->set(compact('searchGame'));

        $this->set(compact('tools'));
    }

    public function startGenerateTools()
    {
        $this->generateTools();

        $this->redirect(['action' => 'index']);
    }
}
