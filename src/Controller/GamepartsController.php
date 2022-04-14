<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\SearchGameForm;

class GamepartsController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');

        $hideCancel = true;
        $searchGame = new SearchGameForm();

        if ($this->request->is('post')) { /*$this->request->getData() Ebben jön az adat, erre kell where feltétel. Keresni a tjáték nevében, utána a kiadók között is. */
            $hideCancel = false;
            $search = $this->request->getData();
            $gameparts = $this->Paginator->paginate(
                $this->Gameparts->find('all')
                    ->where([
                        'or' => array(
                            'Gameparts.name like' => '%' . $search['name'] . '%',
                            'Boardgames.name like' => '%' . $search['name'] . '%'
                        )
                    ])
                    ->contain(['Boardgames'])
            );
        } else {
            $gameparts = $this->Paginator->paginate($this->Gameparts->find('all')->contain(['Boardgames']), ['limit' => '10']);
        }

        $this->set(compact('hideCancel'));
        $this->set(compact('searchGame'));

        $this->set(compact('gameparts'));
    }

    public function modify()
    {

        $this->loadComponent('Paginator');

        if ($this->request->is('ajax')) {
            debug('szia');
            /*

            $gamepart = $this->Gameparts
                ->findById($this->request->getData()['id'])
                ->contain(['Boardgames', 'Tools', 'Products', 'Lifetimes']) //ide kell majd a többi módosításos ablak adatait 
                ->firstOrFail();

            $gameparts = $this->Paginator->paginate($this->Gameparts->find('all')->contain(['Publishers', 'GameStats', 'Last30daysproducts', 'Lifetimes']), ['limit' => '10']);

           // var_dump($gamepart['products']);

            $this->loadModel('Boardgames');
            $boardgames = $this->Boardgames->find('list');
            $this->set(compact('Boardgames'));

            $this->set('gamepart', $gamepart);

            if (count($this->request->getData()) > 1) {

                $this->Boardgames->patchEntity($gamepart, $this->request->getData());
                if ($this->Boardgames->save($gamepart)) {
                 //    $this->Flash->success(__('Társasjáték sikeresen módosítva.'));

                    $content = json_encode(['success' => 1]);

                    $this->response = $this->response->withStringBody($content);
                    $this->response = $this->response->withType('json');

                    return $this->response;
                } else {
                    $this->Flash->error(__('Unable to update your article.'));
                    $this->set("success", 0);
                }
            }*/
        }
    }
}
