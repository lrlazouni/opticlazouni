<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'glasses';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function brand()
    {
        return $this->belongsTo('App\GlassesBrand');
    }

    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }
}
