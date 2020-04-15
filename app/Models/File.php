<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';

    protected $fillable = [
        'id',
        'folder_id',
        'name',
        'org_name',
        'extension',
        'creator_id',
    ];
    protected $hidden = [
        'creator_id',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($folder) {
            //delete file
        });
    }

    public function folder()
    {
        return $this->belongsTo(Folder::class, 'folder_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function url()
    {
        return asset('storage/files/' . $this->name);
    }

    public function toArray()
    {
        $data = parent::toArray();
        $data['creator'] = $this->creator;
        $data['url'] = $this->url();
        return $data;
    }
}
