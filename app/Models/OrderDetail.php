<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property integer $product_id
 * @property integer $price
 * @property integer $qty
 * @property integer $order_id
 */
class OrderDetail extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['created_at', 'updated_at', 'product_id', 'price', 'qty', 'order_id'];
}
