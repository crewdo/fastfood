<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Infomation Entity
 *
 * @property int $id
 * @property string $phone
 * @property string $phone_nd
 * @property string $address
 * @property string $email
 * @property string $facebook
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Infomation extends Entity
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
        'phone' => true,
        'phone_nd' => true,
        'address' => true,
        'email' => true,
        'facebook' => true,
        'created' => true,
        'modified' => true
    ];
}
