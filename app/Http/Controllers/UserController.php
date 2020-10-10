<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){

            User::uploadAvatar($request->image);
            return redirect()->back()->with('message' ,'Image uploaded'); //Success message
            
        }
        
      
        return redirect()->back()->with('error', 'Image not uploaded');//error message
    }

    protected function deleteOldImage()
    {
        if(auth()->user()->avatar){
            Storage::delete('/public/images/'. auth()->user()->avatar);
        }
    }
}
