<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'body',
        'body_fr',
        'date',
        'user_id',
    ];

    protected $casts = [
        'date' => 'datetime',
    ];

    // public function posts()
    // {
    //     return $this->hasOne('App\Models\User', 'id', 'user_id');
    // }

    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User', 'user_id');
    // }

    // static public function getOrderedForums()
    // {
    //     return self::requeteForums()->orderBy('created_at', 'desc');
    // }

    // static public function forumSelectOne($forumPost)
    // {
    //     return self::requeteForums()->where('id', $forumPost->id)->first();
    // }

    // static private function requeteForums()
    // {
    //     $lang = session()->get('localeDB');
    //     return self::select('id', DB::raw("CASE WHEN title$lang IS NULL THEN title ELSE title$lang END as title"), DB::raw("CASE WHEN body$lang IS NULL THEN body ELSE body$lang END as body"), 'user_id', 'created_at', 'updated_at');
    // }
}
