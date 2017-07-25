<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contacts Model
 *
 * @property \App\Model\Table\BlogsTable|\Cake\ORM\Association\BelongsTo $Blogs
 *
 * @method \App\Model\Entity\Contact get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contact newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contact[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contact|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contact patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contact[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contact findOrCreate($search, callable $callback = null, $options = [])
 */
class ContactsTable extends Table
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

        $this->setTable('contacts');
        $this->setDisplayField('name');
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
//            ->requirePresence('facebook', 'create')
//            ->notEmpty('facebook');
//
//        $validator
//            ->requirePresence('twitter', 'create')
//            ->notEmpty('twitter');
//
//        $validator
//            ->requirePresence('google_plus', 'create')
//            ->notEmpty('google_plus');
//
//        $validator
//            ->requirePresence('instagram', 'create')
//            ->notEmpty('instagram');
//
//        $validator
//            ->requirePresence('linkedin', 'create')
//            ->notEmpty('linkedin');
//
//        $validator
//            ->requirePresence('address', 'create')
//            ->notEmpty('address');
//
//        $validator
//            ->requirePresence('tel1', 'create')
//            ->notEmpty('tel1');
//
//        $validator
//            ->requirePresence('tel2', 'create')
//            ->notEmpty('tel2');
//
//        $validator
//            ->requirePresence('mob', 'create')
//            ->notEmpty('mob');
//
//        $validator
//            ->email('email')
//            ->requirePresence('email', 'create')
//            ->notEmpty('email');
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
//            ->requirePresence('hotline', 'create')
//            ->notEmpty('hotline');
//
//        $validator
//            ->requirePresence('locale', 'create')
//            ->notEmpty('locale');
//
//        $validator
//            ->requirePresence('text', 'create')
//            ->notEmpty('text');
//
//        $validator
//            ->requirePresence('name', 'create')
//            ->notEmpty('name');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['blog_id'], 'Blogs'));

        return $rules;
    }
}
