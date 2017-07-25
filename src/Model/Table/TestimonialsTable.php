<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Testimonials Model
 *
 * @method \App\Model\Entity\Testimonial get($primaryKey, $options = [])
 * @method \App\Model\Entity\Testimonial newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Testimonial[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Testimonial patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Testimonial findOrCreate($search, callable $callback = null, $options = [])
 */
class TestimonialsTable extends Table
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

        $this->setTable('testimonials');
        $this->setDisplayField('id');
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
//            ->requirePresence('author_name', 'create')
//            ->notEmpty('author_name');
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
