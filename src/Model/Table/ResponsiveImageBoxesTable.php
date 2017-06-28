<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResponsiveImageBoxes Model
 *
 * @property \App\Model\Table\BlogsTable|\Cake\ORM\Association\BelongsTo $Blogs
 *
 * @method \App\Model\Entity\ResponsiveImageBox get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResponsiveImageBox findOrCreate($search, callable $callback = null, $options = [])
 */
class ResponsiveImageBoxesTable extends Table
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

        $this->setTable('responsive_image_boxes');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->belongsTo('Blogs', [
            'foreignKey' => 'blog_id',
            'joinType' => 'INNER'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');

//        $validator
//            ->requirePresence('photo', 'create')
//            ->notEmpty('photo');
//
//        $validator
//            ->requirePresence('dir', 'create')
//            ->notEmpty('dir');

        $validator
            ->requirePresence('subtitle', 'create')
            ->notEmpty('subtitle');

        $validator
            ->requirePresence('locale', 'create')
            ->notEmpty('locale');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

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
