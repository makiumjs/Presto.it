<?php

namespace App\Http\Controllers;

use File;
use App\Models\Ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\EditBasicsProfileRequest;

class ProfileController extends Controller
{

    public function __construct() {
        $this->middleware("auth");
    }

    public function toPrivateProfile() {
        $user = Auth::user();
        return view("profile/privateProfile", compact("user"));
    }

    public function toAuthorProfile($id) {
        if(Auth::user()->id != $id) {
            $author = User::find($id);
            return view("profile/authorProfile", compact("author"));
        } else {
            $user = Auth::user();
            return view("profile/privateProfile", compact("user"));
        }
    }

    public function editBasics(User $user, EditBasicsProfileRequest $request) {
        if(Auth::user()->id == $user->id) {
            $user->name = $request->name;
            $user->save();
        }
        return redirect(route("privateProfile", compact("user")));
    }

    public function addExtra(User $user, EditProfileRequest $request) {
        if(Auth::user()->id == $user->id) {
            $filteredRequest = array_slice($request->input(), 2);
            $flag = false;
            if($request->file("avatar_profile") != null) {
                $flag = true;
            } else {
                foreach($filteredRequest as $input) {
                    if($input) {
                        $flag = true;
                    }
                }
            }
            if($flag) {
                $newFileName = "avatars/{$user->id}";
                if($request->avatar_profile) {
                    $user->profile()->create([
                        "avatar_profile" => $request->file("avatar_profile")->store($newFileName, "public"),
                        "city" => $request->input("city"),
                        "street" => $request->input("street"),
                        "cap" => $request->input("cap"),
                        "country" => $request->input("country"),
                        "phone_number" => $request->input("phone_number"),
                        "bio" => $request->input("bio"),
                    ]);
                } else {
                    $user->profile()->create([
                        "city" => $request->input("city"),
                        "street" => $request->input("street"),
                        "cap" => $request->input("cap"),
                        "country" => $request->input("country"),
                        "phone_number" => $request->input("phone_number"),
                        "bio" => $request->input("bio"),
                    ]);
                }
            }
        }
        return redirect(route("privateProfile", compact("user")));
    }

    public function editExtra(User $user, EditProfileRequest $request) {
        if(Auth::user()->id == $user->id) {
            $newFileName = "avatars/{$user->id}";
            if($request->avatar_profile) {
                File::delete(public_path('storage/'.$user->profile->avatar_profile));
                $user->profile->avatar_profile = $request->file("avatar_profile")->store($newFileName, "public");
            }
            $user->profile->city = $request->city;
            $user->profile->street = $request->street;
            $user->profile->cap = $request->cap;
            $user->profile->country = $request->country;
            $user->profile->phone_number = $request->phone_number;
            $user->profile->bio = $request->bio;
            $user->profile->save();
        }
        return redirect(route("privateProfile", compact("user")));
    }

}