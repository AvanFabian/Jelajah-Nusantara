<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardsIsland;
use App\Models\User;
// DB facade
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Get Users data
    public function dashboard()
    {
        // Get All Card Content Data
        $Contents = CardsIsland::all();
        return view('admin.dashboard', compact('Contents'));
    }
    // Get Users data
    public function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }
    // Authorize users role to be admin
    public function manageUsers(Request $request)
    {
        // Get User Id from hidden input value 
        $userId = $request->input('userId');
        $user = User::where('id', $userId)->first();
        if ($user && $user->role == 'user') {
            $user->role = 'admin';
            $user->save();
            return back()->with('authorized', 'User has been authorized as admin successfully.');
        } elseif ($user && $user->role == 'admin') {
            $user->role = 'user';
            $user->save();
            return back()->with('unauthorized', 'Admin has been unauthorized as user successfully.');
        }
    }

    // Store New Card Content Data
    public function store(Request $request)
    {
        $request->validate([
            'pulau' => 'required',
            'thumbnailLink' => 'required',
            'ytLink' => 'required',
        ]);

        $card = new CardsIsland();
        $card->pulau = $request->input('pulau');
        $card->contents = $request->input('jenisKonten');
        $card->thumbnailLink = $request->input('thumbnailLink');
        $card->ytLink = $request->input('ytLink');
        $card->save();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Pulau Content Data has been added successfully.');
    }

    // Update Card Content Data
    public function update(Request $request)
    {
        $request->validate([
            'idKonten' => 'required',
        ]);

        $id = $request->input('idKonten');
        // dd($id);
        $card = CardsIsland::where('id', $id)->first();
        if ($card) {
            $card->pulau = $request->input('pulau');
            $card->contents = $request->input('jenisKonten');
            $card->thumbnailLink = $request->input('thumbnailLink');
            $card->ytLink = $request->input('ytLink');
            $card->save();
            return redirect()->route('admin.dashboard')
                ->with('success', 'Pulau Content Data has been updated successfully.');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'ID Kontent tidak ditemukan');
        }
    }

    // Delete Card Content Data
    public function destroy(Request $request)
    {
        $request->validate([
            'idKonten' => 'required',
        ]);

        $id = $request->input('idKonten');
        $card = CardsIsland::where('id', $id)->first();
        if ($card) {
            $card->delete();
            return redirect()->route('admin.dashboard')->with('deleted', 'Pulau Content Data has been deleted successfully.');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'ID Kontent tidak ditemukan');
        }
    }

    // Get Content Data and Return as json response
    // public function getContentData(Request $request)
    // {
    //     $request->validate([
    //         'idKonten' => 'required',
    //     ]);

    //     $id = $request->input('idKonten');
    //     $card = CardsIsland::where('id', $id)->first();
    //     if ($card) {
    //         return response()->json($card);
    //     } else {
    //         return response()->json(['message' => 'Data not found'], 404);
    //     }
    // }

    // Show Content
    public function showContent($island, $content)
    {
        // Fetch the content data from the database based on the $island and $content values
        // $data = CardsIsland::where('pulau', $island)
        //     ->where('contents', $content)
        //     ->first();
        // Fetch the content data from the database based on the $island and $content values and make it as array
        $data = CardsIsland::where('pulau', $island)
            ->where('contents', $content)
            ->get()->toArray();
        return response()->json($data);
    }
    // Debugging Content
    public function debug()
    {
        // Fetch the content data from the database based on the $island and $content values
        $data = CardsIsland::where('pulau', 'jawa')
            ->where('contents', 'legenda')
            ->first();
        dd($data);
    }

    // Upload Profile Picture
    public function uploadProfilePicture(Request $request)
    {
        $file = $request->file('profilePicture');

        if ($request->hasFile('profilePicture')) {
            $request->validate([
                'profilePicture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            // Generate a unique filename for the uploaded image
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();

            // Store the file in the desired storage disk
            $path = $file->storeAs('public/img/profile', $filename);

            // Update the user's profile picture column in the database
            $user = auth()->user();
            $user->profile_photo_path = $path;
            $user->save();

            // Return a response indicating success
            return response()->json(['message' => 'Profile picture uploaded successfully']);
        }

        // Return a response indicating failure
        return response()->json(['message' => 'No file uploaded'], 400);
    }
}