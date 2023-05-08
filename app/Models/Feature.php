<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'module', 'date_added', 'state'];

    public function applications()
    {
        return $this->belongsToMany(Application::class);
    }

}
