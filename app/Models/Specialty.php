<?php

namespace App\Models;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Specialty extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $fillable = [];

    // Specialty Has Many Doctor
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_specialty_pivot');
    }
}
