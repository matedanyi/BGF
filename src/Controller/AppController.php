<?php

declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Utility\Hash;
use Cake\Database\Type;
use \Cake\Database\Type\DateTimeType;
use Cake\Database\TypeFactory;
use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\VarDumper\VarDumper;
use Cake\I18n\FrozenTime;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Authentication.Authentication');
        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // for all controllers in our application, make index and view
        // actions public, skipping the authentication check
        $this->Authentication->addUnauthenticatedActions(['index', 'view']);
    }

    public function generateProducts()
    {
        $this->loadModel('GenerateDailyProducts');

        $this->loadModel('Products');
        $this->loadModel('BoardgamesTools');
        $this->loadModel('ProductTools');
        $list = $this->GenerateDailyProducts->find('all');
        $this->set(compact('list'));

        $products = array();
        $today = date('Y-m-d');
        // $today = '2022-04-02';
        // debug($today);
        $rNumber = rand(1, 5);
        foreach ($list as $key => $value) {
            $rNumber = rand(1, 5);
            $tools = $this->BoardgamesTools->find('all')->select(['tool_id'])
                ->where([
                    'and' => array(
                        'BoardgamesTools.publisher_id' => $value['publisher_id'],
                        'BoardgamesTools.boardgame_id IS NOT' => $value['boardgame_id']
                    )
                ])
                ->enableHydration(false)
                ->toList();
            // debug($tools);

            $toolsList = Hash::extract($tools, '{n}.tool_id');
            // debug($toolsList);

            $record = array(
                'publisher_id' => $value['publisher_id'],
                'boardgame_id' => $value['boardgame_id'],
                'quantity' => $rNumber,
                'production_date' => $today,
                'prodtools' => $tools
            );
            // debug($record);

            $generateDailyProduct = $this->Products->newEntity($record);
            $products[] = $generateDailyProduct;
            // var_dump($products);
        }

        if (empty($products)) {
            $this->Flash->success(__('You can only generate once per day!'));
            return true;
        }

        if ($this->Products->saveMany($products, ['associated' => ['ProductTools']])) {
            $this->Flash->success(__('Products succesfully generated'));
        } else {
            $this->Flash->error(__('Error!'));
        }
    }

    public function generateTools()
    {
        $this->loadModel('GenerateTools');
        $this->loadModel('Tools');
        $list = $this->GenerateTools->find('all');
        $products = array();

        foreach ($list as $key => $value) {
            $generateTool = $this->GenerateTools->newEmptyEntity();

            if ($value['tool_exist'] != NULL) {
                $value['name'] = $this->customName($value['name']);
            };

            $record = array(
                'name' => $value['name'],
                'created' => $value['created'],
                'publisher_id' => $value['publisher_id'],
                'tooltype_id' => $value['tooltype_id']
            );
            /*debug($generateTool);
            debug($record);
            var_dump($products);
            */
            $generateTool = $this->GenerateTools->patchEntity($generateTool, $record);
            //   var_dump($generateTool);
            $products[] = $generateTool;
        }

        if (empty($products)) {
            $this->Flash->success(__('There are enough tools'));
            return true;
        }

        if ($this->Tools->saveMany($products)) {
            $this->Flash->success(__('Tools succesfully generated'));
        } else {
            $this->Flash->error(__('Error!'));
        }
    }

    public function customName($name)
    {
        $list = $this->Tools->find('all');
        $nameParts = explode('-', $name); //szétszedi a NAME-t "-" mentén
        $sql = $list->find('all', [
            'conditions' => ['Tools.name LIKE' => $nameParts[0] . '%']
        ]);
        $quantity = $sql->count();
        $name = $nameParts[0] . '-' . $quantity; // összerakja az új nevet
        /* debug($nameParts[0]);
        debug($sql);
        debug($quantity);
        debug($name);*/
        return $name; //visszatér az értékkel fentre*/
    }
}
