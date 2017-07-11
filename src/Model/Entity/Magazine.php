<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Magazine Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $cover_img
 * @property string $cover_dir
 * @property string $pdf
 * @property string $pdf_dir
 * @property string $folder
 * @property string $folder_dir
 * @property string $order
 * @property \Cake\I18n\FrozenTime $created_at
 */
class Magazine extends Entity
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
