<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlassesBrand extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'glasses_brands';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function models()
    {
        return $this->hasMany('App\Glass');
    }
}
