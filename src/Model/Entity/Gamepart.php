<?php
// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Gamepart extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => true,
        'name' => true,
        'quantity' => true,
        'boardgame_id' => true,
        'material_id' => true,
    ];
}
