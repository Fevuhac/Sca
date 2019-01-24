<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Gift;

use Helper, File, Session, Auth;

class GiftController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {

        $query = Gift::where('id', '<>', 999);

        $items = $query->orderBy('display_order')->paginate(100);
        
      
        return view('backend.gift.index', compact( 'items' ));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    { 
        return view('backend.gift.create');
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
            'name' => 'required'            
        ],
        [                                    
            'name.required' => 'Bạn chưa nhập tên quà'
        ]);       
        
        $dataArr['top'] = isset($dataArr['top']) ? 1 : 0;  
        $rs = Gift::create($dataArr);        
      
        Session::flash('message', 'Tạo mới quà thành công');

        return redirect()->route('gift.index');
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

        $detail = Gift::find($id);       
        return view('backend.gift.edit', compact('detail'));
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
            'name' => 'required'            
        ],
        [                                    
            'name.required' => 'Bạn chưa nhập tên quà'
        ]);    
        
        $model = Gift::find($dataArr['id']);
        $dataArr['top'] = isset($dataArr['top']) ? 1 : 0; 
        $model->update($dataArr);
        Session::flash('message', 'Cập nhật quà thành công');        

        return redirect()->route('gift.index');
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
        $model = Gift::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa màu thành công');
        return redirect()->route('gift.index');
    }
}