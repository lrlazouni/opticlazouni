<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function eyewears()
    {
        return $this->hasMany('App\Eyewear');
    }

    public function lenses()
    {
        return $this->hasMany('App\Lens');
    }

    public function montages()
    {
        return $this->hasMany('App\Montage');
    }

    public function glasses()
    {
        return $this->hasMany('App\Glass');
    }

    public function eyewear_purchasings()
    {
        return $this->belongsToMany('App\Eyewear');
    }

    public function glasses_purchasings()
    {
        return $this->belongsToMany('App\Glass');
    }

    public function lenses_purchasings()
    {
        return $this->belongsToMany('App\Lens');
    }
}
