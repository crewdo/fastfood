<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductsCategory Entity
 *
 * @property int $id
 * @property string $name
 * @property int $parent_id
 * @property int $sort_order
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ParentProductsCategory $parent_products_category
 * @property \App\Model\Entity\ChildProductsCategory[] $child_products_categories
 */
class ProductsCategory extends Entity
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
        'name' => true,
        'parent_id' => true,
        'sort_order' => true,
        'created' => true,
        'modified' => true,
        'parent_products_category' => true,
        'child_products_categories' => true
    ];
}
