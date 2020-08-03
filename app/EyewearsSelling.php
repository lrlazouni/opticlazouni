<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EyewearsSelling extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'eyewears_selling';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['client_id', 'eyewear_id'];
}
