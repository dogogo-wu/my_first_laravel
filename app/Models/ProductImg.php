<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $img_path
 * @property integer $product_id
 */
class ProductImg extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */

    protected $table = 'product_imgs';
    protected $primaryKey = 'id';

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['img_path', 'product_id'];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
