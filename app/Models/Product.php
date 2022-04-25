<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property mixed $created_at
 * @property mixed $updated_at
 * @property string $name
 * @property float $price
 * @property integer $number
 * @property string $introduction
 */
class Product extends Model
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
    protected $fillable = ['name', 'price', 'number', 'introduction', 'img'];
}
