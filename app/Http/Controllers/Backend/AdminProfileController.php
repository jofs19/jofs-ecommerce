<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class AdminProfileController extends Controller
{
    
    public function AdminProfile()
    {
		$id = Auth::user()->id;
		$adminData = Admin::find($id);        
        return view('admin.admin_profile_view', compact('adminData'));
    }
    
    public function AdminProfileEdit()
    {
		$id = Auth::user()->id;
		$editData = Admin::find($id);        
        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function AdminProfileStore(Request $request)
    {
		$id = Auth::user()->id;
		$data = Admin::find($id);
        $data->name = $request->name;
        $data->email = $request->email;


        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/' . $data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);

    }//end method

    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }

 

    public function AdminUpdateChangePassword(Request $request){
        // $validateData = $request->validate([
        //     'old_password' => 'required',
        //     'password' => 'required|confirmed',
        //     'new_password_confirmation' => 'required'

        // ]);

       
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword,$hashedPassword)) {
            $admin = Admin::find(Auth::id());
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            // $notification = array(
            //     'message' => 'Password Updated Successfully',
            //     'alert-type' => 'success'
            // );
            return redirect()->route('admin.logout');
        } else {
            $notification = array(
                'message' => 'Old Password is incorrect',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    } //end method

    public function AllUsers(){
		$users = User::latest()->get();
		return view('backend.user.all_user',compact('users'));
	}

}

// public function AdminUpdateChangePassword(Request $request){
 
//     $validateData = $request->validate([
//         'oldpassword' => 'required',
//         'password' => 'required|confirmed',
//     ]);

//     $hashedPassword = Auth::user()->password;
//     if (Hash::check($request->oldpassword,$hashedPassword)) {
//         $admin = Admin::find(Auth::id());
//         $admin->password = Hash::make($request->password);
//         $admin->save();
//         Auth::logout();
//         return redirect()->route('admin.logout');
//     }else{
//         return redirect()->back();
//     }


// }// end method
