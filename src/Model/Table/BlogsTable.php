<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Blogs Model
 *
 * @property \App\Model\Table\BlockTabsTable|\Cake\ORM\Association\HasMany $BlockTabs
 * @property |\Cake\ORM\Association\HasMany $Contacts
 * @property \App\Model\Table\HomeBoxesTable|\Cake\ORM\Association\HasMany $HomeBoxes
 * @property \App\Model\Table\HomeSlidersTable|\Cake\ORM\Association\HasMany $HomeSliders
 * @property \App\Model\Table\LargeImageBoxesTable|\Cake\ORM\Association\HasMany $LargeImageBoxes
 * @property \App\Model\Table\ResponsiveImageBoxesTable|\Cake\ORM\Association\HasMany $ResponsiveImageBoxes
 * @property \App\Model\Table\SmallImageBoxesTable|\Cake\ORM\Association\HasMany $SmallImageBoxes
 * @property |\Cake\ORM\Association\HasMany $TextBlocks
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
    public function initialize(array $config) {
        parent::initialize($config);

        $this->setTable('blogs');
        
        $this->setDisplayField('title_1');
        $this->setPrimaryKey('id');

        $this->hasMany('BlockTabs', [
            'foreignKey' => 'blog_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'blog_id'
        ]);
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
        $this->hasMany('TextBlocks', [
            'foreignKey' => 'blog_id'
        ]);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'main_img' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'main_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
            'img_1' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'dir_1', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
            'img_2' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'dir_2', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
            'img_3' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'dir_3', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
            'img_4' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'dir_4', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],
        ]);
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
//            ->integer('order')
//            ->requirePresence('order', 'create')
//            ->notEmpty('order');
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
//            ->requirePresence('desc_1', 'create')
//            ->notEmpty('desc_1');
//
//        $validator
//            ->requirePresence('desc_2', 'create')
//            ->notEmpty('desc_2');
//
//        $validator
//            ->requirePresence('desc_3', 'create')
//            ->notEmpty('desc_3');
//
//        $validator
//            ->requirePresence('main_img', 'create')
//            ->notEmpty('main_img');
//
//        $validator
//            ->requirePresence('main_dir', 'create')
//            ->notEmpty('main_dir');
//
//        $validator
//            ->requirePresence('img_1', 'create')
//            ->notEmpty('img_1');
//
//        $validator
//            ->requirePresence('dir_1', 'create')
//            ->notEmpty('dir_1');
//
//        $validator
//            ->requirePresence('img_2', 'create')
//            ->notEmpty('img_2');
//
//        $validator
//            ->requirePresence('dir_2', 'create')
//            ->notEmpty('dir_2');
//
//        $validator
//            ->requirePresence('img_3', 'create')
//            ->notEmpty('img_3');
//
//        $validator
//            ->requirePresence('dir_3', 'create')
//            ->notEmpty('dir_3');
//
//        $validator
//            ->requirePresence('img_4', 'create')
//            ->notEmpty('img_4');
//
//        $validator
//            ->requirePresence('dir_4', 'create')
//            ->notEmpty('dir_4');
//
//        $validator
//            ->requirePresence('locale', 'create')
//            ->notEmpty('locale');
//
//        $validator
//            ->dateTime('created_at')
//            ->requirePresence('created_at', 'create')
//            ->notEmpty('created_at');

        return $validator;
    }

}
