<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ResponsiveImageBox Entity
 *
 * @property int $id
 * @property string $title
 * @property string $photo
 * @property string $dir
 * @property string $subtitle
 * @property string $locale
 * @property string $link
 * @property int $blog_id
 *
 * @property \App\Model\Entity\Blog $blog
 */
class ResponsiveImageBox extends Entity
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
