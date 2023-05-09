<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','type','slug','editor','licence','tag_activity','state','date_added'];

    public function versions()
       {
           return $this->hasMany(Version::class);
       }
       public function features()
       {
           return $this->belongsToMany(Feature::class);
       }
       public function entities()
       {
           return $this->hasMany(Entity::class);
       }
       public function editors()
       {
        return $this->belongsToMany(Editor::class);
       }
}
