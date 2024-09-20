<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class Music extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';
    public $incrementing = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'artist',
        'album',
        'time',
        'deleted_at'
    ];

    //
    public function addMusicData(Request $request)
    {
        Music::create($request->all());
    }

    //
    public function updateMusicData(Request $request, $id)
    {
        $music = Music::findOrFail($id);

        $music->title = $request['title'];
        $music->artist = $request['artist'];
        $music->album = $request['album'];

        $music->save();
    }
    

    //
    public function deleteMusicData($id)
    {   
        $music = Music::findOrFail($id);
        $music->deleted_at = now();
        $music->save();
    }
    
}
