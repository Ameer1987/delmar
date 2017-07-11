<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Magazines Model
 *
 * @method \App\Model\Entity\Magazine get($primaryKey, $options = [])
 * @method \App\Model\Entity\Magazine newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Magazine[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Magazine|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Magazine patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Magazine findOrCreate($search, callable $callback = null, $options = [])
 */
class MagazinesTable extends Table
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

        $this->setTable('magazines');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'cover_img' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'cover_dir', // defaults to `dir`
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
            ->integer('id')
            ->allowEmpty('id', 'create');

//        $validator
//            ->requirePresence('title', 'create')
//            ->notEmpty('title');
//
//        $validator
//            ->requirePresence('description', 'create')
//            ->notEmpty('description');
//
//        $validator
//            ->requirePresence('cover_img', 'create')
//            ->notEmpty('cover_img');
//
//        $validator
//            ->requirePresence('cover_dir', 'create')
//            ->notEmpty('cover_dir');
//
//        $validator
//            ->requirePresence('pdf', 'create')
//            ->notEmpty('pdf');
//
//        $validator
//            ->requirePresence('pdf_dir', 'create')
//            ->notEmpty('pdf_dir');
//
//        $validator
//            ->requirePresence('folder', 'create')
//            ->notEmpty('folder');
//
//        $validator
//            ->requirePresence('folder_dir', 'create')
//            ->notEmpty('folder_dir');
//
//        $validator
//            ->requirePresence('order', 'create')
//            ->notEmpty('order');

//        $validator
//            ->dateTime('created_at')
//            ->requirePresence('created_at', 'create')
//            ->notEmpty('created_at');

        return $validator;
    }
}
