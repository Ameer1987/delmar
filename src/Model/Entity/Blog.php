<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property string $title
 * @property string $photo
 * @property string $dir
 * @property string $text
 * @property string $locale
 *
 * @property \App\Model\Entity\HomeBox[] $home_boxes
 * @property \App\Model\Entity\HomeSlider[] $home_sliders
 * @property \App\Model\Entity\LargeImageBox[] $large_image_boxes
 * @property \App\Model\Entity\ResponsiveImageBox[] $responsive_image_boxes
 * @property \App\Model\Entity\SmallImageBox[] $small_image_boxes
 * @property \App\Model\Entity\SocialLink[] $social_links
 */
class Blog extends Entity
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
