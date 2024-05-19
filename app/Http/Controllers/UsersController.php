<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException as QE;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class UsersController extends Controller
{
    public function index()
    {
        $user = User::join('roles','roles.roles_id','=','users.roles')
        ->select('roles.roles_name','users.*')
        ->get();
        return view('user.index')->with(compact('user'));
    }

    public function create()
    {
        $roles = Roles::get();
        return view('user.new')->with(compact('roles'));
    }

    public function store(Request $request)
    {
        if ($request->foto == '') {
            $fileurl = '';
            $foto = "assets/media/svg/avatars/blank.svg";
           } else {
           $file = $request->foto;
           $fileArray = ['foto' => $file];
           $rules = ['foto' => 'mimes:jpeg,jpg,png,gif|required|max:100000'];
           $validator = Validator::make($fileArray, $rules);
           if ($validator->fails()) {
               // Redirect or return json to frontend with a helpful message to inform the user
               // that the provided file was not an adFile bukan gambar
           alert()->error('File Bukan Gambar');
               return redirect()->back();
           } else {
               $img_id = mt_rand(1, 10000);
               $fileName = $img_id.time().'.'.$file->getClientOriginalName();
               Image::make($file)->encode('jpg', 90)->save('fotouser/'.$fileName);
               $fileurl = 'fotouser/'.$fileName;
              $foto = $fileurl;

           }
        }
        $validator = Validator::make($request->all(), [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            // Redirect or return json to frontend with a helpful message to inform the user
            // that the provided file was not an adequate type

            alert()->warning('Terdapat kesalahan input, silahkan periksa ulang data yang anda masukan');

            return redirect()->back();
        } else {
            User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'roles'     => $request->roles,
                'nohp'     => $request->nohp,
                'nomorinduk'     => $request->nomorinduk,
                'foto'     => $foto,
                'divisi'     => $request->divisi,
            ]);
        }
        alert()->success('Berhasil','Akun Berhasil Dibuat');


        return redirect('user');
    }

    public function show($id)
    {
        $show = User::join('roles','roles.roles_id','=','users.roles')
        ->select('roles.roles_name','users.*')
        ->where('id', $id)->first();

        return view('user.show')->with(compact('show'));
    }

    public function edit($id)
    {
        $edit = User::join('roles','roles.roles_id','=','users.roles')
        ->select('roles.roles_name','users.*')->where('id', $id)->first();

        $roles = Roles::get();

        return view('user.edit')->with(compact('edit','roles'));
    }

    public function update(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $update = collect($request->all());
        $passlama = $user->password;
        $passbaru = $request->password;

        if (!is_null($request->password) && !is_null($request->password_confirmation)) {
            if (Hash::check($passbaru, $passlama)) {
                $update->put('password', $user->password);

                try {
                    $user->update($update->all());
                } catch (QE $e) {
                   alert()->warning('Database Error');

                    return redirect()->back();
                }

               alert()->success('Akun berhasil diubah');

                return redirect('user');
            } else {
                if ($request->password == $request->password_confirmation) {
                    $newpass = $request->password;
                    $update->put('password', Hash::make($passbaru));

                    try {
                        $user->update($update->all());
                    } catch (QE $e) {

                        alert()->error('Gagal','Akun Gagal Diubah');

                        return redirect()->back();
                    }

                    alert()->success('Berhasil','Akun Berhasil Dibuat');

                    return redirect('user');
                } else {

                    alert()->error('Gagal','Konfirmasi Password Tidak Cocok');
                    return redirect()->back();
                }
            }
        } else {
            try {
                $update->put('password', $user->password);
                $user->update($update->all());
            } catch (QE $e) {

                alert()->error('Gagal','Akun Gagal Diubah');

                return redirect()->back();
            }
            alert()->success('Berhasil','Akun Berhasil Diubah');


            return redirect('user');
        }
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();

        try {
            $user->delete();
        } catch (QE $e) {
            return $e;
        } //show db error message


        alert()->success('Berhasil','Akun Berhasil Dihapus');


        return redirect('user');
    }

    public function setting()
    {
        return view('user.setting');
    }

    public function userupdate(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $passbaru = $request->password;

        $passlama = $request->passwordlama;
        if (Hash::check($passlama, $user->password)) {
            if ($request->password == $request->password_confirmation) {
                $newpass = $request->password;
                $user->password = Hash::make($newpass);

                try {
                    $user->update();
                } catch (QE $e) {
                    toast('Perubahan Gagal Disimpan, Coba Lagi','error');

                    return redirect()->back();
                }
            } else {
                toast('Password Baru Tidak Cocok','error');

                return redirect()->back();
            }
        } else {
            toast('Password Lama Tidak Cocok','error');

            return redirect()->back();
        }

        toast('Perubahan User Berhasil Disimpan!','error');

        return redirect('user');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function profile_setting(){
        $userid = Auth::user()->id;
        $user = User::where('id',$userid)->first();
        return view('profile-setting')->with(compact('user'));
    }

    public function profile_update(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $update = collect($request->all());
       if ($request->foto == '') {
        $fileurl = '';
        $update->put('foto',$user->foto);
       } else {
       $file = $request->foto;
       $fileArray = ['foto' => $file];
       $rules = ['foto' => 'mimes:jpeg,jpg,png,gif|required|max:100000'];
       $validator = Validator::make($fileArray, $rules);
       if ($validator->fails()) {
           // Redirect or return json to frontend with a helpful message to inform the user
           // that the provided file was not an adFile bukan gambar
       alert()->error('File Bukan Gambar');
           return redirect()->back();
       } else {
           $img_id = mt_rand(1, 10000);
           $fileName = $img_id.time().'.'.$file->getClientOriginalName();
           Image::make($file)->encode('jpg', 90)->save('fotouser/'.$fileName);
           $fileurl = 'fotouser/'.$fileName;
           $update->put('foto',$fileurl);

       }
       }
        try {
            $user->update($update->all());
            alert()->success('Berhasil','Profile Berhasil Diubah');
            return redirect('profile-setting');
        } catch (QE $e) {
        alert()->warning('Database Error');

            return redirect()->back();
        }
    }
}
