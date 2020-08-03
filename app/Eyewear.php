<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eyewear extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eyewear';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function brand()
    {
        return $this->belongsTo('App\EyewearsBrand');
    }

    public function clients()
    {
        return $this->belongsToMany('App\Client');
    }
}
