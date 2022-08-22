<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['eventname','date','time','description','logo'];

    public function registrations() {
        $this->hasMany(EventRegistration::class);
    }

}

