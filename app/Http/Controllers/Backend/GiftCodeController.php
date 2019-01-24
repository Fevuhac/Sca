<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\GiftCode;
use App\Models\Gift;

use Helper, File, Session, Auth;

class GiftCodeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(Request $request)
    {
        $giftList = Gift::all();

        $type = isset($request->type) ? $request->type : null;
        $gift_id = isset($request->gift_id) ? $request->gift_id : null;        
        $status = isset($request->status) ? $request->status : 1; // chua gan

        $code = isset($request->code) && $request->code != '' ? $request->code : '';
        
        $query = GiftCode::whereRaw('1');
        if( $type > 0){
            $query->where('type', $type);
        }
        if( $gift_id > 0){
            $query->where('gift_id', $gift_id);
        }
        if( $status > 0){
            $query->where('status', $status);
        }
        if( $code != ''){
            $query->where('code', 'LIKE', '%'.$code.'%');
        }

        $items = $query->orderBy('id', 'asc')->paginate(100);      
        
      
        return view('backend.gift-code.index', compact( 'items', 'giftList', 'gift_id', 'status', 'code', 'type'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create(Request $request)
    { 
        $giftList = Gift::all();
        $gift_id = $request->gift_id ? $request->gift_id : null;
        return view('backend.gift-code.create', compact('giftList', 'gift_id'));
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
            'type' => 'required',
            'gift_id' => 'required',          
            'code_str' => 'required',            
        ],
        [   
            'type.required' => 'Bạn chưa chọn loại',                                 
            'gift_id.required' => 'Bạn chưa chọn quà',                                 
            'code_str.required' => 'Bạn chưa nhập số may mắn',
            
        ]);   
        if($dataArr['code_str']){
            $tmpArr = explode(',', $dataArr['code_str']);
            foreach($tmpArr as $code){				
				$code = trim($code);
				
                if($code != ''){
					$rs1 = GiftCode::where('code', $code)->count();
					if($rs1 == 0){
						GiftCode::create([
							'type' => $dataArr['type'],
							'gift_id' => $dataArr['gift_id'],
							'code' => $code
						]);
					}
                }
            }
        }
      
        Session::flash('message', 'Tạo mới thành công');

        return redirect()->route('gift-code.index', ['gift_id' => $dataArr['gift_id']]);
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
        $giftList = Gift::all();
        $detail = GiftCode::find($id);       
        return view('backend.gift-code.edit', compact('detail', 'giftList'));
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
            'type' => 'required',
            'gift_id' => 'required',          
            'code' => 'required',            
        ],
        [   
            'type.required' => 'Bạn chưa chọn loại',                                 
            'gift_id.required' => 'Bạn chưa chọn quà',                                 
            'code.required' => 'Bạn chưa nhập số may mắn',
            
        ]);       
            
        
        $model = GiftCode::find($dataArr['id']);

        $model->update($dataArr);
        Session::flash('message', 'Cập nhật thành công');        

        return redirect()->route('gift-code.index');
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
        $model = GiftCode::find($id);
        $model->delete();

        // redirect
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('gift-code.index');
    }
}