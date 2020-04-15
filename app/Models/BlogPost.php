<?php

namespace App\Models;

use App\Support\Translateable;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use Translateable;

    protected $table = 'blog_posts';
    protected $fillable = [
        'id',
        'active',//
        'shown',//
        'home',//
        'creator_id',
        'updater_id',
        'preview_id',//
        'banner_id',//
        'created_at',//
    ];
    protected $hidden = [
        'active',
        'home',
        'creator_id',
        'preview_id',
        'banner_id',
        'updater_id',
    ];

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        return $this->hasMany(BlogPostTranslation::class)->where('language', '=', $language);
    }

    public function isActive()
    {
        return $this->active == '1';
    }

    public function isShowHome()
    {
        return $this->home == '1';
    }

    public function preview()
    {
        return $this->belongsTo(File::class, 'preview_id');
    }

    public function banner()
    {
        return $this->belongsTo(File::class, 'banner_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function updater()
    {
        return $this->belongsTo(User::class, 'updater_id');
    }

//    public function toArray()
//    {
//        $data = parent::toArray();
//        $data['banner'] = $this->banner;
//        $data['preview'] = $this->preview;
//        $data['meta_tags'] = $this->metaTags();
//        $data['category'] = $this->category;
//        $data['tags'] = $this->tags;
//        $data['categories'] = $this->categories;
//        $data['creator'] = $this->creator;
//        $data['updater'] = $this->updater;
//        $data['is_active'] = $this->isActive();
//        $data['is_show_home'] = $this->isShowHome();
//        $data['faqs'] = $this->faqJson();
//        return $data;
//    }
}
