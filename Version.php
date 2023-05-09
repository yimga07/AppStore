<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','date_added'];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
