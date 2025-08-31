<?php

namespace App\Models;

use App\Models\ServicePrice;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Service extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $fillable = [];

    // العلاقة مع الأسعار
    public function prices()
    {
        return $this->hasMany(ServicePrice::class);
    }

    // السعر الحالي
    public function currentPrice()
    {
        return $this->hasOne(ServicePrice::class)
            ->whereNull('valid_to')
            ->orWhere('valid_to', '>=', now())
            ->latest('valid_from');
    }
}
