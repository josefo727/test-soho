<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    use Searchable;
    use WithFaker;

    protected $fillable = ['title', 'description', 'logo', 'image', 'background', 'user_id'];

    protected $searchableFields = ['*'];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($table) {
            if(!app()->runningInConsole()) {
                $table->background = '#' . Str::upper(str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT));
            }
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
