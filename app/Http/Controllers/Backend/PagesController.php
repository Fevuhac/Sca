<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pages;
use App\Models\Account;

use Helper, File, Session, Auth;

class PagesController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {
        

        $title = isset($request->title) && $request->title != '' ? $request->title : '';
        $created_user = isset($request->created_user) ? $request->created_user : null;
        $userList = (object) [];
        $query = Pages::whereRaw('1');        
        if(Auth::user()->role == 1 ){
            $query->where('created_user', Auth::user()->id);
        }else{
            $userList = Account::where('role', 1)->get();            
            if( $created_user){
                $query->where('created_user', $created_user);
            }
        }        
        
        if( $title != ''){
            $query->where('alias', 'LIKE', '%'.$title.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
      
        return view('backend.pages.index', compact( 'items' , 'title', 'userList', 'created_user'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    {          

        return view('backend.pages.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  Request  $request
    * @return Response
    */
    public function store(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[            
                        
            'title' => 'required',            
            'slug' => 'required|unique:pages,slug',
        ],
        [            
                        
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['title']);
        
        if($dataArr['image_url'] && $dataArr['image_name']){
            
            $tmp = explode('/', $dataArr['image_url']);

            if(!is_dir('uploads/'.date('Y/m/d'))){
                mkdir('uploads/'.date('Y/m/d'), 0777, true);
            }

            $destionation = date('Y/m/d'). '/'. end($tmp);
            
            File::move(config('icho.upload_path').$dataArr['image_url'], config('icho.upload_path').$destionation);
            
            $dataArr['image_url'] = $destionation;
        }        
        
        $dataArr['created_user'] = Auth::user()->id;

        $dataArr['updated_user'] = Auth::user()->id;

        $rs = Pages::create($dataArr);

        $object_id = $rs->id;

        Session::flash('message', 'Tạo mới trang thành công');

        return redirect()->route('pages.index');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {        

        $detail = Pages::find($id);
        if(Auth::user()->role == 1){
            if($detail->created_user != Auth::user()->id){        
                return redirect()->route('dashboard.index');        
            }
        }
        return view('backend.pages.edit', compact('detail'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  Request  $request
    * @param  int  $id
    * @return Response
    */
    public function update(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[            
                        
            'title' => 'required',            
            'slug' => 'required|unique:pages,slug,'.$dataArr['id'],
        ],
        [            
                        
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã được sử dụng.'
        ]);       
        
        $dataArr['alias'] = Helper::stripUnicode($dataArr['title']);
        
        if($dataArr['image_url'] && $dataArr['image_name']){
            
            $tmp = explode('/', $dataArr['image_url']);

            if(!is_dir('uploads/'.date('Y/m/d'))){
                mkdir('uploads/'.date('Y/m/d'), 0777, true);
            }

            $destionation = date('Y/m/d'). '/'. end($tmp);
            
            File::move(config('icho.upload_path').$dataArr['image_url'], config('icho.upload_path').$destionation);
            
            $dataArr['image_url'] = $destionation;
        }

        $dataArr['updated_user'] = Auth::user()->id;

        $model = Pages::find($dataArr['id']);

        $model->update($dataArr);
       
        Session::flash('message', 'Cập nhật thông tin trang thành công');        

        return redirect()->route('pages.edit', $dataArr['id']);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        // delete
        $model = Pages::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa trang thành công');
        return redirect()->route('pages.index');
    }
}