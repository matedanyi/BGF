<?php
// src/Controller/ArticlesController.php
namespace App\Controller;

use App\Controller\AppController;
use App\Form\SearchGameForm;

class PublishersController extends AppController
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
                //    echo "van search[name] ";
                $publishers = $this->Paginator->paginate($this->Publishers->find('all')
                    ->where([
                        'or' => array(
                            'Publishers.name like' => '%' . $search['name'] . '%'
                        )
                    ])
                    ->order(['Publishers.id' => 'DESC'])
                    ->contain(['PublisherToolStats', 'PublisherStats']));
            } else {
                // echo "van search[name] TELJES LISTA ";
                $publishers = $this->Paginator->paginate($this->Publishers->find('all')
                    ->order(['Publishers.id' => 'DESC'])
                    ->contain(['PublisherToolStats', 'PublisherStats', 'Last30dayspublishers']), ['limit' => '10']);
            }
        } else {
            // echo "NEM AZ ISSET ";
            $publishers = $this->Paginator->paginate($this->Publishers->find('all')
                ->order(['Publishers.id' => 'DESC'])
                ->contain(['PublisherToolStats', 'PublisherStats', 'Last30dayspublishers']), ['limit' => '10']);
        }

        $this->set(compact('hideCancel'));
        $this->set(compact('searchGame'));
        $this->set(compact('publishers'));

        if ($this->request->is('ajax')) {
            $this->render('/element/Publisher/table');
        }
    }

    private function generatecode($publisher)
    {
        $name = $publisher["name"];

        // string replace ???
        $code = substr($name, 0, 3);

        return $code;
    }

    public function add()
    {
        $publisher = $this->Publishers->newEmptyEntity();
        if ($this->request->is('ajax')) {

            if (count($this->request->getData()) > 0) {


                $code = $this->generatecode($this->request->getData());
                $publisher["code"] = $code;


                $publisher = $this->Publishers->patchEntity($publisher, $this->request->getData());

                if ($this->Publishers->save($publisher)) {
                    $this->Flash->success(__('Publisher succesfully added'));

                    $content = json_encode(['success' => 1]);

                    $this->response = $this->response->withStringBody($content);
                    $this->response = $this->response->withType('json');

                    return $this->response;
                }
                $this->Flash->error(__('Unable to add your article.'));
            }
        }
        $this->set('publisher', $publisher);
    }

    public function modify()
    {
        $this->loadComponent('Paginator');

        if ($this->request->is('ajax')) {
            $publisher = $this->Publishers
                ->findById($this->request->getData()['id'])
                ->contain(['Boardgames', 'Tools', 'PublisherBoardgamesStats', 'Lifetimes']) //ide kell majd a többi módosításos ablak adatait 
                ->firstOrFail();

            $publishers = $this->Paginator->paginate($this->Publishers->find('all')->contain(['PublisherToolStats', 'PublisherStats', 'Lifetimes']), ['limit' => '10']);

            // var_dump($publisher['lifetimes']);

            $this->set('publisher', $publisher);

            if (count($this->request->getData()) > 1) {
                $this->Publishers->patchEntity($publisher, $this->request->getData());
                if ($this->Publishers->save($publisher)) {
                    $this->Flash->success(__('Publisher succesfully modified.'));


                    $content = json_encode(['success' => 1]);

                    $this->response = $this->response->withStringBody($content);
                    $this->response = $this->response->withType('json');

                    return $this->response;
                } else {
                    $this->Flash->error(__('Unable to update your publisher.'));
                    $this->set("success", 0);
                }
            }
        }
    }
}
