<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CountryApi extends Model
{
    use HasFactory,HasTranslations;
    protected $guarded = [];

    public $translatable = ['name'];

    public function Statistics()
    {
        return $this->hasOne(Statistic::class);
    }
}
