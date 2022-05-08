<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderDetail;
use App\Models\User;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property integer $subtotal
 * @property integer $ship_fee
 * @property integer $total
 * @property integer $qty_all
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $addr
 * @property integer $payment
 * @property integer $ship_method
 * @property string $ship_store
 * @property integer $status
 * @property string $ps
 */
class Order extends Model
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
    protected $fillable = ['created_at', 'updated_at', 'subtotal', 'ship_fee', 'total', 'qty_all', 'name', 'phone', 'email', 'addr', 'payment', 'ship_method', 'ship_store', 'status', 'ps', 'user_id'];

    public function detail(){
        return $this->hasMany(OrederDetail::class, 'order_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
