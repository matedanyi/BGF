<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Product extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'publisher_id' => true,
        'boardgame_id' => true,
        'quantity' => true,
        'production_date' => true

    ];
}
