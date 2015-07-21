<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $fillable = [
    	'title',
    	'image'
    ];

    public function services()
    {
    	return $this->hasMany("App\Service");
    }
}
