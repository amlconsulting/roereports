<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model {

    /**
     * Set the table name
     *
     * @var String
     */
    protected $table = 'size';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

}