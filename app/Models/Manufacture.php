<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;

    CONST MANUFACTURE_ID = 1;

    protected $table = 'manufactures';
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filials()
    {
        return $this->hasMany(Filial::class);
    }
}
