<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
    	'title',
    	'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo("App\Category");
		}
}
