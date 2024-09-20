<?php

namespace App\Http\Controllers;
use App\Models\Music;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    //
    public function index()
        {
            // Fetch all products from the database
            $music = Music::all();

            // Return a view with the products data
            return view('playlist.index', compact('music'));
        }

    //
    public function goToAddView()
        {
            // Return a view with the products data
            return view('playlist.add');
        }

    //
    public function goToEditView($id)
        {   
            $music = Music::findOrFail($id);

            // Return a view with the products data
            return view('playlist.edit', compact('music', 'id'));
        }

    //
    public function addMusic(Request $request)
        {   
            echo 'ADDED!';

            // Validate the incoming request data
            $validatedData = $request->validate([
                'title' => 'required|string|min:16',
                'artist' => 'required|min:16',
                'album' => 'string|min:16',
            ]);

            $musicModel = new Music();
            $musicModel->addMusicData($request);

            // $music->title = $validatedData['title'];
            // $music->artist = $validatedData['artist'];
            // $music->album = $validatedData['album']; // Hash the password

            // $music->save();

            // Return a view with the products data
            return redirect('/');
        }

    //
    public function updateMusic(Request $request, $id)
        {
            echo 'UPDATED!';
            $musicModel = new Music();
            $musicModel->updateMusicData($request, $id);

            return redirect("/");
        }

    //
    public function deleteMusic($id)
        {   
            echo 'DELETED!';
            $musicModel = new Music();
            $musicModel->deleteMusicData($id);
        }
}
