<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException as QE;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class RolesController extends Controller
{
    //
    public function index()
    {
        $roles = Roles::get();
        $access = [
            1 => "Basic Access",
            2 => "Marketing Module",
            3 => "Finance Module",
            4 => "Warehouse Module",
            5 => "Purchasing Module",
            6 => "Product Module",
            7 => "Sample Module",
            8 => "Regulator Module",
            9 => "Design Module",
            10 => "QC Module",
            11 => "Report Module",
            12 => "System Module",
            ];
        return view('roles.index')->with(compact('roles','access'));
    }

    public function store(Request $request)
    {
       $store = collect($request->all());
       try {
        $access = new Roles;
        $access->roles_name = $request->roles_name;
        $access->roles_permission =  implode(",",$request->roles_permission);
        $access->save();
           alert()->success('Berhasil','Roles Berhasil Dibuat');
           return redirect('roles');
       } catch (QE $e) {
       alert()->warning('Database Error');

           return redirect()->back();
       }

    }
    public function edit($id)
    {

        $edit = Roles::where('roles_id', $id)->first();
        $access = [
            1 => "Basic Access",
            2 => "Marketing Module",
            3 => "Finance Module",
            4 => "Warehouse Module",
            5 => "Purchasing Module",
            6 => "Product Module",
            7 => "Sample Module",
            8 => "Regulator Module",
            9 => "Design Module",
            10 => "QC Module",
            11 => "Report Module",
            12 => "System Module",
            ];

        return view('roles.edit')->with(compact('edit','access'));
    }

    public function update(Request $request)
    {

        $edit = Roles::where('roles_id',$request->roles_id)->first();

            $edit->roles_permission = implode(",",$request->roles_permission);
            try {
                $edit->update();

            } catch (QE $e) {
                return $e;
        }
    toast('Berhasil Mengubah Hak Akses','success');
    return redirect('roles');
    }

    public function delete($id)
    {
        $roles = Roles::where('roles_id', $id)->first();

        try {
            $roles->delete();
        } catch (QE $e) {
            return $e;
        } //show db error message


        alert()->success('Berhasil','Roles Berhasil Dihapus');


        return redirect('roles');
    }


}
