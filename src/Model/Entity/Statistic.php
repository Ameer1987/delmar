<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Statistic Entity
 *
 * @property int $id
 * @property string $number_1
 * @property string $number_2
 * @property string $number_3
 * @property string $number_4
 * @property string $title_1
 * @property string $title_2
 * @property string $title_3
 * @property string $title_4
 * @property string $locale
 * @property string $photo
 * @property string $dir
 */
class Statistic extends Entity
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
