<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    public function getFormattedDate($column, $format = "d-m-Y H:i:s") {
        return Carbon::create($this->$column)->format($format);
    }
    
    public function category()
    {
        return $this->belongsTo("App\Models\Category");
    }
    
    protected $fillable = [
        "title",
        "content",
        "image",
        "slug",
        "category_id",
    ];
}