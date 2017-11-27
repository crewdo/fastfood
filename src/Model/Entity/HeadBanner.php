<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HeadBanner Entity
 *
 * @property int $id
 * @property string $title_st
 * @property string $title_nd
 * @property \Cake\I18n\FrozenTime $start_special_date
 * @property \Cake\I18n\FrozenTime $end__special_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ImageList $image_list
 */
class HeadBanner extends Entity
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
        'title_st' => true,
        'title_nd' => true,
        'start_special_date' => true,
        'end__special_date' => true,
        'image_list' => true,
        'created' => true,
        'modified' => true
    ];
}
