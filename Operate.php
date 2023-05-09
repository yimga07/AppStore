<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operate extends Model
{
    use HasFactory;
    public function applications()
    {
        return $this->belongsToMany(Application::class);
    }
    public function versions()
    {
        return $this->belongsToMany(Application::class);
    }
    public function features()
    {
        return $this->belongsToMany(Application::class);
    }
    public function entities()
    {
        return $this->belongsToMany(Application::class);
    }


}
