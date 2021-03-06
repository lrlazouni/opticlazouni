<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lenses';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function brand()
    {
        return $this->belongsTo('App\LensesBrand');
    }

    public function client()
    {
        return $this->belongsToMany('App\Client');
    }
}
