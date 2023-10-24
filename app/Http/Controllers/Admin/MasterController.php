<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{

    public function loginPage()
    {
        return view('admin_panel.pages.login');
    }

    public function index()
    {
        return view('admin_panel.pages.dashboard');
    }
    public function profile()
    {

        $user_info = User::where('id', Auth::id())->first();
        return view('admin_panel.pages.profile', compact(['user_info']));
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login-page')->with('message', 'Admin Logout Succcessful.');
    }



    public function profile_update(Request $request)
    {
        //Validation
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',

        ]);
        $user = User::find(Auth::id());
        if ($user) {
            $user->name = $request->name;
            $user->phone = $request->phone;
            $user->address = $request->address;
            // upload
            if ($request->hasFile('profile_image')) {
                //remove old image form folder if new image comes
                if ($user->profile_image != null || $user->profile_image != "") {
                    $image_file = public_path($user->profile_image);
                    if (file_exists($image_file)) {
                        unlink($image_file);
                    }
                }
                $profile_image = $request->file('profile_image');
                $new_name = rand() . '.' . $request->profile_image->getClientOriginalExtension();
                $path = '/common/images/user/profile_img/';
                $profile_image->move(public_path($path), $new_name);
                $user->profile_image = $path . $new_name;
            }
            $user->save();

            return back()->with('message', 'Profile has been updated.');
            // return redirect()->route('user-login-page')->with('message', 'Registration successfull.');
        } else {
            return back()->with('message', 'Not Found.');
        }
    }
}
