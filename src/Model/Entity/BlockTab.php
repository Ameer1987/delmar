<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * BlockTab Entity
 *
 * @property int $id
 * @property int $order
 * @property string $title
 * @property string $subtitle
 * @property string $text
 * @property string $locale
 * @property string $photo
 * @property string $dir
 * @property string $header_icon
 * @property string $header_title
 * @property int $blog_id
 *
 * @property \App\Model\Entity\Blog $blog
 */
class BlockTab extends Entity
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
