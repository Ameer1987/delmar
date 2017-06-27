<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SmallImageBox Entity
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $locale
 * @property string $image
 * @property string $link
 * @property int $blog_id
 *
 * @property \App\Model\Entity\Blog $blog
 */
class SmallImageBox extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
