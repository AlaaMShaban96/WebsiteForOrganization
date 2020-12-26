<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AboutUsRequest;
use Illuminate\Support\Facades\Session;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs=AboutUs::find(1);
        return view('dashboard.aboutUs.index',compact('aboutUs'));
    }
    public function store(AboutUsRequest $request)
    {   $request['image']=$this->uploadeImage($request);
        AboutUs::create($request->all());
        Session::flash('message', 'تم اضافة معلومات المؤسسة بنجاح'); 
        return redirect('dashboard/aboutUs');
    }
    public function update(AboutUsRequest $request ,AboutUs $aboutUs)
    {
        $request['image']=isset($request['file'])?$this->uploadeImage($request):$aboutUs->image;
        $aboutUs->update($request->all());
        Session::flash('message', 'تم تعديل معلومات المؤسسة بنجاح'); 
        return redirect('dashboard/aboutUs');


    }
    public function restpassword(Request $request)
    {
        $user=User::find(auth()->user()->id);
        $user->password=Hash::make($request->password);
        $user->save();
        Session::flash('message', 'تم تعديل كلمة السر  بنجاح'); 
        return redirect('dashboard/aboutUs');


    }
    private function uploadeImage(Request $request)
    {
        
        $imageName = time().".png";

        $path ="storage/". $request->file('file')->storeAs('aboutUs/', $imageName, 'public');
    
        return $path;
    }
}
