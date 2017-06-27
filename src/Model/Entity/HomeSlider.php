<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HomeSlider Entity
 *
 * @property int $id
 * @property string $layer1
 * @property string $layer2
 * @property string $layer3
 * @property string $layer4
 * @property string $locale
 * @property string $image
 * @property string $align
 * @property string $border
 */
class HomeSlider extends Entity
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
