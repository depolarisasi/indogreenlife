<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException as QE;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Auth;
Use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index()
    {
        $user = User::get();
        $customer = Customer::join('users','users.id','=','customer.customer_sales')
        ->select('users.name','users.id','users.foto','customer.*')
        ->get();
        return view('customer.index')->with(compact('customer','user'));
    }

    public function create()
    {
        $n=7;
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        $customer_uniqueid = $randomString;

        return view('customer.new')->with(compact('customer_uniqueid'));
    }

    public function store(Request $request)
    {
        $store = collect($request->all());
        if ($request->companylogo == '') {
            $fileurl = '';
            $companylogo = "";
           } else {
           $file = $request->companylogo;
           $fileArray = ['companylogo' => $file];
           $rules = ['companylogo' => 'mimes:jpeg,jpg,png|required|max:100000'];
           $validator = Validator::make($fileArray, $rules);
           if ($validator->fails()) {
               // Redirect or return json to frontend with a helpful message to inform the user
               // that the provided file was not an adFile bukan gambar
           alert()->error('File Bukan Gambar');
               return redirect()->back();
           } else {
               $img_id = mt_rand(1, 10000);
               $fileName = $img_id.time().'.'.$file->getClientOriginalName();
               Image::make($file)->encode('jpg', 90)->save('customercompanylogo/'.$fileName);
               $fileurl = 'customercompanylogo/'.$fileName;
              $companylogo = $fileurl;

           }
        }
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $store->put('customer_companylogo',$companylogo);
        $store->put('customer_sales',Auth::user()->id);
        $store->put('customer_dateadded',Carbon::now()->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'));
        if($request->customer_status == 1){
            $store->put('customer_status','Draft');
        }else {
            $store->put('customer_status','Publish');
        }
        $store->put('customer_password',Hash::make($request->password));

        if ($validator->fails()) {
            // Redirect or return json to frontend with a helpful message to inform the user
            // that the provided file was not an adequate type

            alert()->warning('Terdapat kesalahan input, silahkan periksa ulang data yang anda masukan');

            return redirect()->back();
        } else {
            try {
                Customer::create($store->all());
            } catch (QE $e) {

                // alert()->error('Gagal','Customer Gagal Diubah');
                return $e;

                // return redirect()->back();
            }
        }
        alert()->success('Berhasil','Customer Berhasil Dibuat');


        return redirect('customer');
    }

    public function show($customer_uniqueid)
    {
        $show = Customer::join('users','users.id','=','customer.customer_sales')
        ->select('users.name','users.id','customer.*')
        ->where('customer_uniqueid', $customer_uniqueid)->first();

        return view('customer.show')->with(compact('show'));
    }

    public function edit($id)
    {
        $edit = Customer::join('users','users.id','=','customer.customer_sales')
        ->select('users.name','users.id','customer.*')->where('customer_uniqueid', $id)->first();

        $user = User::get();

        return view('customer.edit')->with(compact('edit','user'));
    }

    public function update(Request $request)
    {
        $customer = Customer::where('customer_uniqueid', $request->customer_uniqueid)->first();
        $update = collect($request->all());
        $passlama = $customer->customer_password;
        $passbaru = $request->password;
        if ($request->customer_companylogo == '') {
            $fileurl = '';
            $companylogo = $customer->company_logo;
           } else {
           $file = $request->customer_companylogo;
           $fileArray = ['customer_companylogo' => $file];
           $rules = ['customer_companylogo' => 'mimes:jpeg,jpg,png|required|max:100000'];
           $validator = Validator::make($fileArray, $rules);
           if ($validator->fails()) {
               // Redirect or return json to frontend with a helpful message to inform the user
               // that the provided file was not an adFile bukan gambar
           alert()->error('File Bukan Gambar');
               return redirect()->back();
           } else {
               $img_id = mt_rand(1, 10000);
               $fileName = $img_id.time().'.'.$file->getClientOriginalName();
               Image::make($file)->encode('jpg', 90)->save('customercompanylogo/'.$fileName);
               $fileurl = 'customercompanylogo/'.$fileName;
              $companylogo = $fileurl;

           }
        }
        if (!is_null($request->password) && !is_null($request->password_confirmation)) {
            if (Hash::check($passbaru, $passlama)) {
                $update->put('password', $customer->password);

                $update->put('customer_companylogo',$companylogo);
                 if($request->customer_status == 1){
                    $update->put('customer_status','Draft');
                }else {
                    $update->put('customer_status','Publish');
                }
                try {
                    $customer->update($update->all());
                } catch (QE $e) {
                   alert()->warning('Database Error');

                    return redirect()->back();
                }

               alert()->success('Customer berhasil diubah');

                return redirect('user');
            } else {
                if ($request->password == $request->password_confirmation) {
                    $newpass = $request->password;
                    $update->put('password', Hash::make($passbaru));
                    $update->put('customer_companylogo',$companylogo);
                    if($request->customer_status == 1){
                       $update->put('customer_status','Draft');
                   }else {
                       $update->put('customer_status','Publish');
                   }
                    try {
                        $customer->update($update->all());
                    } catch (QE $e) {

                        alert()->error('Gagal','Customer Gagal Diubah');

                        return redirect()->back();
                    }

                    alert()->success('Berhasil','Customer Berhasil Dibuat');

                    return redirect('user');
                } else {

                    alert()->error('Gagal','Konfirmasi Password Tidak Cocok');
                    return redirect()->back();
                }
            }
        } else {
            try {
                $update->put('password', $customer->password);$update->put('customer_companylogo',$companylogo);
                if($request->customer_status == 1){
                   $update->put('customer_status','Draft');
               }else {
                   $update->put('customer_status','Publish');
               }
                $customer->update($update->all());
            } catch (QE $e) {

                alert()->error('Gagal','Customer Gagal Diubah');

                return redirect()->back();
            }
            alert()->success('Berhasil','Customer Berhasil Diubah');


            return redirect('customer');
        }
    }

    public function delete($id)
    {
        $customer = Customer::where('customer_uniqueid', $customer_uniqueid)->first();

        try {
            $customer->delete();
        } catch (QE $e) {
            return $e;
        } //show db error message


        alert()->success('Berhasil','Customer Berhasil Dihapus');


        return redirect('user');
    }

    public function setting()
    {
        return view('customer.setting');
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

}
