<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\SearchGameForm;
use Cake\Log\Log;

class BoardgamesController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');

        $hideCancel = true;
        $searchGame = new SearchGameForm();

        if ($this->request->is('post')) { /*$this->request->getData() Ebben jön az adat, erre kell where feltétel. Keresni a tjáték nevében, utána a kiadók között is. */
            $hideCancel = false;
            $search = $this->request->getData();
            if (isset($search['name'])) {
                // echo "van search[name] ";
                $boardgames = $this->Paginator->paginate($this->Boardgames->find('all')
                    ->where([
                        'or' => array(
                            'Boardgames.name like' => '%' . $search['name'] . '%',
                            'Publishers.name like' => '%' . $search['name'] . '%'
                        )
                    ])
                    ->order(['boardgames.id' => 'ASC'])
                    ->contain(['Publishers', 'GameStats', 'Last30daysproducts']));
            } else {
                //  echo "van search[name] TELJES LISTA ";
                $boardgames = $this->Paginator->paginate($this->Boardgames->find('all')->order(['Boardgames.id' => 'DESC'])
                    ->contain(['Publishers', 'GameStats', 'Last30daysproducts']), ['limit' => '10']);
            }
        } else {
            //  echo "NEM AZ ISSET ";
            $boardgames = $this->Paginator->paginate($this->Boardgames->find('all')
                ->order(['boardgames.id' => 'ASC'])
                ->contain(['Publishers', 'GameStats', 'Last30daysproducts']), ['limit' => '10']);
        }
        $this->set(compact('hideCancel'));
        $this->set(compact('searchGame'));
        $this->set(compact('boardgames'));

        if ($this->request->is('ajax')) {
            $this->render('/element/Boardgames/table');
        }
        /*  debug($boardgames); */
    }

    public function add()
    {
        $boardgame = $this->Boardgames->newEmptyEntity();
        if ($this->request->is('ajax')) {

            $this->loadModel('Publishers');
            $publishers = $this->Publishers->find('list');

            $this->loadModel('Materials');
            $materials = $this->Materials->find('list');

            $this->set(compact('publishers'));
            $this->set(compact('materials'));



            if (count($this->request->getData()) > 0) {

                $boardgame = $this->Boardgames->newEntity($this->request->getData(), ['associated' => ['Gameparts']]);


                var_dump($boardgame);
                if ($this->Boardgames->save($boardgame, ['associated' => ['Gameparts']])) {
                    $this->Flash->success(__('Társasjáték Hozzáadva'));

                    $content = json_encode(['success' => 1]);

                    $this->response = $this->response->withStringBody($content);
                    $this->response = $this->response->withType('json');

                    return $this->response;
                }
                $this->Flash->error(__('Unable to add your article.'));
            }
        }
        $this->set('boardgame', $boardgame);
    }

    public function modify()
    {

        $this->loadComponent('Paginator');

        if ($this->request->is('ajax')) {

            $boardgame = $this->Boardgames
                ->findById($this->request->getData()['id'])
                ->contain(['Gameparts', 'Tools', 'Products', 'Lifetimes']) //ide kell majd a többi módosításos ablak adatait 
                ->firstOrFail();

            $boardgames = $this->Paginator->paginate($this->Boardgames->find('all')->contain(['Publishers', 'GameStats', 'Last30daysproducts', 'Lifetimes']), ['limit' => '10']);

            var_dump($boardgame['products']);

            $this->loadModel('Publishers');
            $publishers = $this->Publishers->find('list');
            $this->set(compact('publishers'));

            $this->set('boardgame', $boardgame);

            if (count($this->request->getData()) > 1) {

                $this->Boardgames->patchEntity($boardgame, $this->request->getData());
                if ($this->Boardgames->save($boardgame)) {
                    /* $this->Flash->success(__('Társasjáték sikeresen módosítva.'));*/

                    $content = json_encode(['success' => 1]);

                    $this->response = $this->response->withStringBody($content);
                    $this->response = $this->response->withType('json');

                    return $this->response;
                } else {
                    $this->Flash->error(__('Unable to update your article.'));
                    $this->set("success", 0);
                }
            }
        }
    }
}