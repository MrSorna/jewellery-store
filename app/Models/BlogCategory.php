<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blog_categories';
    protected $fillable = ['id', 'title'];

    public function posts($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->belongsToMany(BlogPost::class)->translation($language)->withTimestamps();
    }

    public function toArray()
    {
        $data = parent::toArray();
        $data['id'] = '' . $this->id;
        return $data; // TODO: Change the autogenerated stub
    }
}
