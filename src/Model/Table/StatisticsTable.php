<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statistics Model
 *
 * @method \App\Model\Entity\Statistic get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statistic newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statistic[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statistic|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statistic patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statistic[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statistic findOrCreate($search, callable $callback = null, $options = [])
 */
class StatisticsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('statistics');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
//        $validator
//            ->integer('id')
//            ->allowEmpty('id', 'create');
//
//        $validator
//            ->integer('order')
//            ->requirePresence('order', 'create')
//            ->notEmpty('order');
//
//        $validator
//            ->requirePresence('number_1', 'create')
//            ->notEmpty('number_1');
//
//        $validator
//            ->requirePresence('number_2', 'create')
//            ->notEmpty('number_2');
//
//        $validator
//            ->requirePresence('number_3', 'create')
//            ->notEmpty('number_3');
//
//        $validator
//            ->requirePresence('number_4', 'create')
//            ->notEmpty('number_4');
//
//        $validator
//            ->requirePresence('title_1', 'create')
//            ->notEmpty('title_1');
//
//        $validator
//            ->requirePresence('title_2', 'create')
//            ->notEmpty('title_2');
//
//        $validator
//            ->requirePresence('title_3', 'create')
//            ->notEmpty('title_3');
//
//        $validator
//            ->requirePresence('title_4', 'create')
//            ->notEmpty('title_4');
//
//        $validator
//            ->requirePresence('locale', 'create')
//            ->notEmpty('locale');
//
////        $validator
////            ->requirePresence('photo', 'create')
////            ->notEmpty('photo');
////
////        $validator
////            ->requirePresence('dir', 'create')
////            ->notEmpty('dir');

        return $validator;
    }
}
