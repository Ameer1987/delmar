<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HomeSliders Model
 *
 * @method \App\Model\Entity\HomeSlider get($primaryKey, $options = [])
 * @method \App\Model\Entity\HomeSlider newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HomeSlider[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HomeSlider|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HomeSlider patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HomeSlider[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HomeSlider findOrCreate($search, callable $callback = null, $options = [])
 */
class HomeSlidersTable extends Table
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

        $this->setTable('home_sliders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('layer1', 'create')
            ->notEmpty('layer1');

        $validator
            ->requirePresence('layer2', 'create')
            ->notEmpty('layer2');

        $validator
            ->requirePresence('layer3', 'create')
            ->notEmpty('layer3');

        $validator
            ->requirePresence('layer4', 'create')
            ->notEmpty('layer4');

        $validator
            ->requirePresence('locale', 'create')
            ->notEmpty('locale');

        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        $validator
            ->requirePresence('align', 'create')
            ->notEmpty('align');

        $validator
            ->requirePresence('border', 'create')
            ->notEmpty('border');

        return $validator;
    }
}
