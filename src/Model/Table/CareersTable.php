<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Careers Model
 *
 * @method \App\Model\Entity\Career get($primaryKey, $options = [])
 * @method \App\Model\Entity\Career newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Career[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Career|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Career patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Career[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Career findOrCreate($search, callable $callback = null, $options = [])
 */
class CareersTable extends Table
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

        $this->setTable('careers');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                ],
                
            ]
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
//            ->requirePresence('title', 'create')
//            ->notEmpty('title');
//
//        $validator
//            ->requirePresence('description', 'create')
//            ->notEmpty('description');
//
//        $validator
//            ->requirePresence('salary', 'create')
//            ->notEmpty('salary');
//
//        $validator
//            ->requirePresence('longitude', 'create')
//            ->notEmpty('longitude');
//
//        $validator
//            ->requirePresence('latitude', 'create')
//            ->notEmpty('latitude');
//
//        $validator
//            ->dateTime('created_at')
//            ->requirePresence('created_at', 'create')
//            ->notEmpty('created_at');

        return $validator;
    }
}
