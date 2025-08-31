<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicePrice extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'price', 'valid_from', 'valid_to'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
