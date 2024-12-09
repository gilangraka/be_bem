<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DivisionProker extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'division_id',
        'name',
        'description',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
