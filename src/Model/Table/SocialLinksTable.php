<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SocialLinks Model
 *
 * @method \App\Model\Entity\SocialLink get($primaryKey, $options = [])
 * @method \App\Model\Entity\SocialLink newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SocialLink[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SocialLink patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SocialLink findOrCreate($search, callable $callback = null, $options = [])
 */
class SocialLinksTable extends Table
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

        $this->setTable('social_links');
        $this->setDisplayField('title');
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
            ->requirePresence('facebook', 'create')
            ->notEmpty('facebook');

        $validator
            ->requirePresence('twitter', 'create')
            ->notEmpty('twitter');

        $validator
            ->requirePresence('google_plus', 'create')
            ->notEmpty('google_plus');

        $validator
            ->requirePresence('instagram', 'create')
            ->notEmpty('instagram');

        $validator
            ->requirePresence('linkedin', 'create')
            ->notEmpty('linkedin');

        return $validator;
    }
}
