<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\ArticlesCate;
use App\Models\Settings;
use App\Models\Gift;
use App\Models\GiftCode;
use App\Models\Customer;
use App\Models\Contact;

use Response;
use Helper, File, Session, Auth, Hash, Mail;

class HomeController extends Controller
{
    
  

    public function __construct(){        
       
    }    
    /**
    * Display a listing of the resource.
    *
    * @return Response
    */    
    public function index(Request $request)
    {             
        $productArr = [];
       
        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
        $seo = $settingArr;
        $seo['title'] = $settingArr['site_title'];
        $seo['description'] = $settingArr['site_description'];        
               
        return view('frontend.home.index', compact(
                                'seo'
                                ));
    }

    public function coCauGiai(){
        
        $giftList = Gift::where('id', '<>', 999)->orderBy('id', 'asc')->get();
        $countCode = [];
        foreach($giftList as $gift){
            $countCode[$gift->id] = GiftCode::where('status', 1)->where('gift_id', $gift->id)->count();
        }
        $seo['title'] = $seo['description'] = 'Cơ cấu giải';
        return view('frontend.co-cau-giai', compact(
                                'seo',
                                'giftList',
                                'countCode'
                                ));
    }
    public function diemNhan(){
        
        $content1 = Articles::find(7)->toArray();
        $content2 = Articles::find(8)->toArray();
        $seo['title'] = $seo['description'] = 'Điểm nhấn';
        return view('frontend.v2.diem-nhan', compact(
                                'seo',
                                'content1',
                                'content2'
                                ));
    }
    public function tranhTai(){
        
        $content1 = Articles::find(7)->toArray();
        $content2 = Articles::find(8)->toArray();
        $seo['title'] = $seo['description'] = 'Tranh tài 150 triệu';
        return view('frontend.v2.tranh-tai', compact(
                                'seo',
                                'content1',
                                'content2'
                                ));
    }
    public function iphone(){       
       
        $seo['title'] = $seo['description'] = 'Sự kiện Iphone XS Max';
        return view('frontend.v2.iphone', compact(
                                'seo'                               
                                ));
    }
    public function thuongGameKhung(){       
       
        $seo['title'] = $seo['description'] = 'Thưởng game khủng';
        return view('frontend.v2.thuong-game-khung', compact(
                                'seo'                               
                                ));
    }
    public function suKienHot(){       
       
        $seo['title'] = $seo['description'] = 'Sự kiện HOT';
        return view('frontend.v2.su-kien-hot', compact(
                                'seo'                               
                                ));
    }
    public function banCa(){       
       
        $seo['title'] = $seo['description'] = 'Bắn cá cực vui';
        return view('frontend.v2.ban-ca', compact(
                                'seo'                               
                                ));
    }
    public function theLe(){
        
        $seo['title'] = $seo['description'] = 'Thể lệ';
        $contentList = Articles::where('cate_id', 1)->orderBy('display_order', 'asc')->get();
        return view('frontend.the-le', compact(
                                'seo',
                                'contentList'
                                ));
    }
    public function huongDan(){
        
        $seo['title'] = $seo['description'] = 'Hướng dẫn';
        $contentList = Articles::where('cate_id', 2)->orderBy('display_order', 'asc')->get();
        return view('frontend.huong-dan', compact(
                                'seo',
                                'contentList'
                                ));
    }    
    public function contact(Request $request){        

        $seo['title'] = 'Liên hệ';
        $seo['description'] = 'Liên hệ';        
        return view('frontend.lien-he', compact('seo', 'socialImage'));
    }
	public function dangKy(Request $request){        

        $seo['title'] = 'Đăng ký nhận số';
        $seo['description'] = 'Đăng ký nhận số';        
        return view('frontend.dang-ky', compact('seo', 'socialImage'));
    }
    public function getContent(Request $request){        
        $id = $request->id ? $request->id : null;
        if($id){
            $content = Articles::find($id)->toArray();
            $content['title'] = strip_tags($content['title']);
            return json_encode($content);
        }
        
    }

    public function checkNo(Request $request){
        $code = $request->code ? $request->code : null;
        
        $rs = GiftCode::where('code', $code)->whereIn('gift_code.status', [1, 2])
                ->join('gift', 'gift.id', '=', 'gift_code.gift_id')
                ->select('popup_image_url', 'name', 'code', 'gift_id')
                ->first();
         
        if(!$rs){
            return json_encode(['success' => 0]);
        }else{
            $arr = $rs->toArray();
            if($arr['gift_id'] == 999){ //lose
                $arr['success'] = 2;    
            }else{
                $arr['success'] = 1;    
            }            
            return json_encode($arr);
        }
        
    }
    public function sendContact(Request $request){
        $dataArr = $request->all();   
        
        $dataArr['date_from'] = $dataArr['date_to'] = null;
        $dataArr['type'] = 1;
        Customer::create($dataArr);   
        return json_encode(['success' => 1]);     
    }
    public function sendContact3(Request $request){
        $dataArr = $request->all();
        $rs = Contact::where('phone', $dataArr['phone'])->where('route', $dataArr['route'])->get()->count();
        if($rs == 0){   
            Contact::create($dataArr);   
            return json_encode(['success' => 1]);     
        }else{
            return json_encode(['success' => 0, 'mess' => 'Số điện thoại đã đăng ký']);     
        }
        
    }
	 public function sendContact2(Request $request){
        $dataArr = $request->all();  
		/*	
        if($dataArr['date_from'] && $dataArr['date_to']){    
            $dataArr['date_from'] = date('Y-m-d H:i:s', strtotime($dataArr['date_from']));
            $dataArr['date_to'] = date('Y-m-d H:i:s', strtotime($dataArr['date_to']));        
        }else{
            $dataArr['date_from'] = $dataArr['date_to'] = null;
        }*/
		$dataArr['date_from'] = $dataArr['date_to'] = null;
		$dataArr['type'] = 2;
        Customer::create($dataArr);   
        return json_encode(['success' => 1]);     
    }

}
