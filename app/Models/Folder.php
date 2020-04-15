<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table = 'folders';

    protected $fillable = [
        'id',
        'parent_id',
        'name',
        'creator_id',
    ];
    protected $hidden = [
        'creator_id',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($folder) {
            $folder->files()->delete();
        });
    }

    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }


    public function folders()
    {
        return $this->hasMany(Folder::class, 'parent_id')->orderBy('created_at', 'desc');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'folder_id')->orderBy('created_at', 'desc');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function toArray()
    {
        $data = parent::toArray();
        $data['creator'] = $this->creator;
        return $data;
    }
}
