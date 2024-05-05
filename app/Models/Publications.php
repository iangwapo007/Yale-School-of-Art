<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'publications';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'publication_id';

    protected $fillable = [
        'headline',
        'title',
        'year',
        'description',
        'image',
    ];

}
