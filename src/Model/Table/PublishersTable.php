<?php
// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class PublishersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('bgf_publishers'); // if prefix set tablename should be prefix_users
        $this->addBehavior('Timestamp');

        $this->hasOne('PublisherStats', [
            'className' => 'PublisherStats'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('publisherstats')
            ->setBindingKey('id');

        $this->hasOne('PublisherToolStats', [
            'className' => 'PublisherToolStats'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('publishertoolstats')
            ->setBindingKey('id');

        $this->hasMany('Boardgames', [
            'className' => 'Boardgames'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('boardgames')
            ->setBindingKey('id');

        $this->hasMany('Tools', [
            'className' => 'Tools'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('tools')
            ->setBindingKey('id');

        $this->hasMany('PublisherBoardgamesStats', [
            'className' => 'PublisherBoardgamesStats'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('publisherboardgamesstats')
            ->setBindingKey('id');

        $this->hasOne('Last30dayspublishers', [
            'className' => 'Last30dayspublishers'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('last30dayspublishers')
            ->setBindingKey('id');

        $this->hasMany('Lifetimes', [
            'className' => 'Lifetimes'
        ])
            ->setForeignKey('publisher_id')
            ->setProperty('lifetimes')
            ->setBindingKey('id');
    }
}
