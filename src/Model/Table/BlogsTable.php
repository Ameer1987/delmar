<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blogs Model
 *
 * @property \App\Model\Table\HomeBoxesTable|\Cake\ORM\Association\HasMany $HomeBoxes
 * @property \App\Model\Table\HomeSlidersTable|\Cake\ORM\Association\HasMany $HomeSliders
 * @property \App\Model\Table\LargeImageBoxesTable|\Cake\ORM\Association\HasMany $LargeImageBoxes
 * @property \App\Model\Table\ResponsiveImageBoxesTable|\Cake\ORM\Association\HasMany $ResponsiveImageBoxes
 * @property \App\Model\Table\SmallImageBoxesTable|\Cake\ORM\Association\HasMany $SmallImageBoxes
 * @property \App\Model\Table\SocialLinksTable|\Cake\ORM\Association\HasMany $SocialLinks
 *
 * @method \App\Model\Entity\Blog get($primaryKey, $options = [])
 * @method \App\Model\Entity\Blog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Blog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Blog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Blog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Blog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Blog findOrCreate($search, callable $callback = null, $options = [])
 */
class BlogsTable extends Table
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

        $this->setTable('blogs');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->hasMany('HomeBoxes', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('HomeSliders', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('LargeImageBoxes', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('ResponsiveImageBoxes', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('SmallImageBoxes', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('SocialLinks', [
            'foreignKey' => 'blog_id'
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
            ->requirePresence('text', 'create')
            ->notEmpty('text');

        $validator
            ->requirePresence('locale', 'create')
            ->notEmpty('locale');

        return $validator;
    }
}
