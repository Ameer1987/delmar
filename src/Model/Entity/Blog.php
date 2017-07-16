<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity
 *
 * @property int $id
 * @property int $order
 * @property string $title_1
 * @property string $title_2
 * @property string $title_3
 * @property string $desc_1
 * @property string $desc_2
 * @property string $desc_3
 * @property $main_img
 * @property string $main_dir
 * @property $img_1
 * @property string $dir_1
 * @property $img_2
 * @property string $dir_2
 * @property $img_3
 * @property string $dir_3
 * @property $img_4
 * @property string $dir_4
 * @property string $locale
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \App\Model\Entity\BlockTab[] $block_tabs
 * @property \App\Model\Entity\HomeBox[] $home_boxes
 * @property \App\Model\Entity\HomeSlider[] $home_sliders
 * @property \App\Model\Entity\LargeImageBox[] $large_image_boxes
 * @property \App\Model\Entity\ResponsiveImageBox[] $responsive_image_boxes
 * @property \App\Model\Entity\Service[] $services
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
