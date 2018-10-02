<?php

namespace App\Models;

use Eloquent as BaseModel;

/**
 * @SWG\Definition(
 *      definition="Model",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="brand_id",
 *          description="brand_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="model_name",
 *          description="model_name",
 *          type="string"
 *      )
 * )
 */
class Model extends BaseModel
{

    public $table = 'models';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'brand_id',
        'model_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'brand_id' => 'integer',
        'model_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function brand()
    {
        return $this->belongsTo(\App\Models\Brand::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cars()
    {
        return $this->hasMany(\App\Models\Car::class);
    }
}
