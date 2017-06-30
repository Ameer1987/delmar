<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $instagram
 * @property string $linkedin
 * @property string $address
 * @property string $tel1
 * @property string $tel2
 * @property string $mob
 * @property string $email
 * @property string $longitude
 * @property string $latitude
 * @property string $hotline
 * @property string $locale
 * @property string $text
 * @property string $name
 * @property int $blog_id
 *
 * @property \App\Model\Entity\Blog $blog
 */
class Contact extends Entity
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
