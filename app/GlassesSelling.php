<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlassesSelling extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'glasses_sellings';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = ['client_id', 'glass_id'];
}
