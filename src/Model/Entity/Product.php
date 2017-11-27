<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $status
 * @property string $name
 * @property float $price
 * @property string $unit
 * @property string $content
 * @property int $discount
 * @property int $new
 * @property int $special
 * @property int $review_number
 * @property float $review
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ImageList $image_list
 * @property \App\Model\Entity\ProductsCategory $products_category
 * @property \App\Model\Entity\OrdersDetail[] $orders_details
 */
class Product extends Entity
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
        'category_id' => true,
        'status' => true,
        'name' => true,
        'price' => true,
        'unit' => true,
        'content' => true,
        'discount' => true,
        'new' => true,
        'special' => true,
        'review_number' => true,
        'review' => true,
        'image_list' => true,
        'created' => true,
        'modified' => true,
        'products_category' => true,
        'orders_details' => true
    ];
}
