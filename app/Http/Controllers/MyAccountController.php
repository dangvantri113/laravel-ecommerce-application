<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\CategoryLv1;
use App\Models\District;
use App\Models\Profile;
use App\Models\Province;
use App\Models\Shop;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use JD\Cloudder\Facades\Cloudder;

class MyAccountController extends Controller
{
    public function index()
    {
        $catagoriesLv1 = CategoryLv1::all();
        return view('my-account.my-account', ['categoriesLv1' => $catagoriesLv1]);
    }

    public function profile()
    {
        $user = Auth::user();
        $catagoriesLv1 = CategoryLv1::all();
        $provinces = Province::all();
        //dd(Auth::user()->profile);
        return view('my-account.profile', ['categoriesLv1' => $catagoriesLv1,
            'user' => $user,'provinces' => $provinces]);
    }
    public function order()
    {

        return 'order';
    }

    public function changeProfile(Request $request)
    {

        $validatedData = $request->validate([
            'imageName'=>'mimes:jpeg,bmp,jpg,png|between:1, 6000',
            'name' => 'max:255',
            'detail' => 'min:10',
            'phone'=>'digits:10',
            'gender'=>'in:0,1',
            'birthDate'=> 'before:18 years ago',
            'newPassword'=>'min:6',
        ]);
        $id = Auth::user()->id;
        $user = User::find($id);
        $profile = Profile::where('user_id',$id)->first();
        if(isset($request->imageName)){
            $image_name = $request->file('imageName')->getRealPath();;
            Cloudder::upload($image_name, null);
            list($width, $height) = getimagesize($image_name);
            $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
            $profile->avatar = $image_url;
        }
        if(isset($profile->address)){
            $address = $profile->address;
        }
        else{
            $address = Address::create();
        }

        $profile->phone = $request->phone;
        $profile->birth_day = $request->birthDate;
        $profile->gender = $request->gender;
        $profile->address_id = $address->id;

        $address->detail = $request->specificAddress;
        $address->ward_id = $this->fomatWardId($request->ward_id);

        if (Hash::check($request->currentPass, $user->password)) {
            //dd('0');
            $profile->save();
            //dd('a');
            $user->save();
            //dd('b');
            $address->save();
            //dd('c');
            return response()->json(
                [
                    'status' => 'success',
                ], 200);
            return json_encode($profile);
        }
        else{
            return response()->json(
                [
                    'status' => 'fail',
                ], 500);
        }

    }

    public function myAccount()
    {
        $catagoriesLv1 = CategoryLv1::all();
        return view('my-account.my-account', ['categoriesLv1' => $catagoriesLv1]);
    }

    public function listDistrictsOfProvince(Request $request){
        $id = $request->id >=10 ? $request->id : '0'.$request->id;
        $data =  District::where('province_id',$id)->get();
        return view('component.list-district',['datas'=>$data]);
    }
    public function listWardsOfProvince(Request $request){
        $id = $request->id;
        if($id < 10) $id = '00'.$id;
        elseif ($id <100) $id = '0'.$id;
        $data =  Ward::where('district_id',$id)->get();
        return view('component.list-district',['datas'=>$data]);
    }
    public function fomatWardId($ward_id){
        if($ward_id<=9) $ward_id = '0000'.$ward_id;
        elseif ($ward_id<=99) $ward_id = '000'.$ward_id;
        elseif ($ward_id<=999) $ward_id = '00'.$ward_id;
        elseif ($ward_id<=9999) $ward_id = '0'.$ward_id;
        else  $ward_id = $ward_id;
        return $ward_id;
    }
}
