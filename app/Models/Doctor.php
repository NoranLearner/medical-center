<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Specialty;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Doctor extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name', 'job'];

    protected $fillable = ['email', 'phone', 'image'];

    // Doctor Has Many Specialty
    public function specialties()
    {
        return $this->belongsToMany(Specialty::class, 'doctor_specialty_pivot');
    }

    // Doctor Has Many Service
    public function services()
    {
        return $this->belongsToMany(Service::class, 'doctor_service_pivot');
    }

    public function getProfileImageUrlAttribute()
    {
        if ($this->image && file_exists(storage_path('app/public/' . $this->image))) {
            return asset('storage/' . $this->image);
        }

        return asset('assets/img/faces/1.jpg');
    }
}
