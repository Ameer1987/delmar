<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SliderBranch Entity
 *
 * @property int $id
 * @property int $order
 * @property string $title
 * @property string $subtitle
 * @property string $longitude
 * @property string $latitude
 * @property string $text
 * @property string $locale
 * @property string $photo
 * @property string $dir
 */
class SliderBranch extends Entity
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
