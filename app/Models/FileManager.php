<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FileManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_fr',
        'date',
        'user_id',
    ];

    public function fileHasUser()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    static public function fileSelect()
    {
        $lang = session()->get('localeDB');
        return FileManager::select('id', DB::raw("CASE WHEN title$lang IS NULL THEN title ELSE title$lang END as title"), 'user_id', 'created_at', 'updated_at')->orderBy('created_at', 'desc')->get();
    }

    protected $casts = [
        'date' => 'datetime',
    ];
    
}
