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
 * @property int $hot
 * @property int $special
 * @property int $review_number
 * @property float $review
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProductCategory $product_category
 * @property \App\Model\Entity\OrderDetail[] $order_details
 * @property \App\Model\Entity\ProductImage[] $product_images
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
        'hot' => true,
        'special' => true,
        'review_number' => true,
        'review' => true,
        'created' => true,
        'modified' => true,
        'product_category' => true,
        'order_details' => true,
        'product_images' => true
    ];
}
