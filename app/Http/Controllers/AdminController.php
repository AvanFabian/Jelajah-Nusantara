<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardsIsland;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get All Card Content Data
        $Contents = CardsIsland::all();
        // Get All Users Data
        $Users = User::all();
        return view('admin.dashboard', compact('Contents', 'Users'));
    }

    // Authorize users role to be admin
    public function authorizeAdmin(Request $request)
    {
        // Get User Id from hidden input value 
        $userId = $request->input('userId');
        $user = User::where('id', $userId)->first();
        if ($user) {
            $user->role = 'admin';
            $user->save();
        }
        return redirect()->route('admin.dashboard')
            ->with('success', 'User has been authorized as admin successfully.');
    }
    // Unauthorize admin role to be user
    public function unauthorizeAdmin(Request $request)
    {
        $userId = $request->input('userId');
        $user = User::where('id', $userId)->first();
        if ($user) {
            $user->role = 'user';
            $user->save();
        }
        return redirect()->route('admin.dashboard')
            ->with('success', 'Admin has been unauthorize as user successfully.');
    }

    // Store New Card Content Data
    public function store(Request $request)
    {
        $request->validate([
            'ytLink' => 'required',
            'titleKonten' => 'required',
            'descriptionKonten' => 'required',
        ]);

        $card = new CardsIsland();
        $card->ytLink = $request->input('ytLink');
        $card->title = $request->input('titleKonten');
        $card->description = $request->input('descriptionKonten');
        $card->save();

        return redirect()->route('admin.dashboard')
            ->with('success', 'New Card Content Data has been added successfully.');
    }

    // Update Card Content Data
    public function update(Request $request)
    {

        $contentId = $request->input('contentId');
        $newTitle = $request->input('newTitleKonten');
        // Update
        $content = CardsIsland::where('id', $contentId)->first();
        // dd($content);
        if ($content) {
            $content->title = $newTitle;
            $content->ytLink = $request->input('ytLink');
            $content->description = $request->input('descriptionKonten');
            $content->save();
        }


        return redirect()->route('admin.dashboard')
            ->with('updated', 'Card Content Data has been updated successfully.');
    }

    // Delete Card Content Data
    public function destroy(Request $request)
    {
        $title = $request->input('oldTitleKonten');
        $content = CardsIsland::where('title', $title)->first();
        if ($content) {
            $content->delete();
        }

        return redirect()->route('admin.dashboard')
            ->with('deleted', 'Card Content Data has been deleted successfully.');
    }
}
