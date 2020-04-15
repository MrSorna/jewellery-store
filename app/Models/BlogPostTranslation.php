<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPostTranslation extends Model
{
    protected $table = 'blog_post_translations';
    protected $fillable = [
        'id',
        'language',//
        'title',//
        'url',//
        'summary',//
        'content',//
        'faqs',//
        'author',//
        'meta_tags',//
        'post_id',//
    ];
    protected $hidden = [
        'post_id',
        'meta_tags',
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($translations) {
            $translations->categories()->detach();
            $translations->tags()->detach();
        });
    }

    public function metaTags()
    {
        return json_decode($this->meta_tags);
    }

    public function faqJson()
    {
        return json_decode($this->faqs);
    }

    public function tags()
    {
        return $this->belongsToMany(BlogTag::class)->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class)->withTimestamps();
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

}
