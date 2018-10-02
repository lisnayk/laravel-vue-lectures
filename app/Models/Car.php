<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Car",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="title",
 *          description="title",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="short_text",
 *          description="short_text",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="full_text",
 *          description="full_text",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="model_id",
 *          description="model_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="year",
 *          description="year",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="photo_id",
 *          description="photo_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Car extends Model
{

    public $table = 'cars';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'title',
        'short_text',
        'full_text',
        'status',
        'model_id',
        'year',
        'photo_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'short_text' => 'string',
        'full_text' => 'string',
        'status' => 'string',
        'model_id' => 'integer',
        'year' => 'string',
        'photo_id' => 'integer'
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
    public function model()
    {
        return $this->belongsTo(\App\Models\Model::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function photo()
    {
        return $this->belongsTo(\App\Models\Photo::class);
    }
}
