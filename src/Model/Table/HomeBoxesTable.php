<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeBoxes Model
 *
 * @property \App\Model\Table\BlogsTable|\Cake\ORM\Association\BelongsTo $Blogs
 *
 * @method \App\Model\Entity\HomeBox get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeBox newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeBox[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeBox|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeBox patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeBox[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeBox findOrCreate($search, callable $callback = null, $options = [])
 */
class HomeBoxesTable extends Table
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

        $this->setTable('home_boxes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Blogs', [
            'foreignKey' => 'blog_id',
//            'joinType' => 'INNER'
        ]);
        
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
        $validator
                ->allowEmpty('photo');
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
//            ->requirePresence('title', 'create')
//            ->notEmpty('title');
//
////        $validator
////            ->requirePresence('photo', 'create')
////            ->notEmpty('photo');
////
////        $validator
////            ->requirePresence('dir', 'create')
////            ->notEmpty('dir');
//
//        
//
//        $validator
//            ->requirePresence('avatar', 'create')
//            ->notEmpty('avatar');
//
//        $validator
//            ->requirePresence('text', 'create')
//            ->notEmpty('text');
//
//        $validator
//            ->requirePresence('locale', 'create')
//            ->notEmpty('locale');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['blog_id'], 'Blogs'));

        return $rules;
    }
}
