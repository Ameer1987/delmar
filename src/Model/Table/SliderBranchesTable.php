<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SliderBranches Model
 *
 * @method \App\Model\Entity\SliderBranch get($primaryKey, $options = [])
 * @method \App\Model\Entity\SliderBranch newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SliderBranch[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SliderBranch|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SliderBranch patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SliderBranch[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SliderBranch findOrCreate($search, callable $callback = null, $options = [])
 */
class SliderBranchesTable extends Table
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

        $this->setTable('slider_branches');
        $this->setDisplayField('title');
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
//        $validator
//            ->requirePresence('subtitle', 'create')
//            ->notEmpty('subtitle');
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
//            ->requirePresence('text', 'create')
//            ->notEmpty('text');
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
