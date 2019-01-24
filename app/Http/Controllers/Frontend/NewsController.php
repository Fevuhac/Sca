<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\ArticlesCate;
use App\Models\Articles;
use App\Models\Banner;
use Helper, File, Session, Auth;
use Mail;

class NewsController extends Controller
{
    public function newsList(Request $request)
    {
       
        $page = $request['page'] ? $request['page'] : 1;       
        $cateArr = [];
       
        $cateDetail = ArticlesCate::find(1);

        $title = trim($cateDetail->meta_title) ? $cateDetail->meta_title : $cateDetail->name;

        $articlesList = Articles::where('cate_id', $cateDetail->id)->orderBy('id', 'desc')->paginate(20);

        $hotArr = Articles::where( ['cate_id' => $cateDetail->id, 'is_hot' => 1] )->orderBy('id', 'desc')->limit(5)->get();
        $seo['title'] = $cateDetail->meta_title ? $cateDetail->meta_title : $cateDetail->title;
        $seo['description'] = $cateDetail->meta_description ? $cateDetail->meta_description : $cateDetail->title;
        $seo['keywords'] = $cateDetail->meta_keywords ? $cateDetail->meta_keywords : $cateDetail->title;
        $socialImage = $cateDetail->image_url;
        $tiecList = Articles::where(['cate_id' => 5])->orderBy('display_order')->limit(6)->get();
        $lastestArr = Articles::orderBy('id', 'desc')->limit(5)->get();
        $bannerList = Banner::where('object_type', 3)->get();
        $bannerArr = [];
        foreach($bannerList as $banner){
            $bannerArr[$banner->object_id][] = $banner;
        }  
        return view('frontend.news.index', compact('title', 'hotArr', 'articlesList', 'cateDetail', 'seo', 'socialImage', 'page', 'tiecList', 'lastestArr', 'bannerArr'));
    }      

     public function newsDetail(Request $request)
    { 
        $id = $request->id;

        $detail = Articles::where( 'id', $id )
                ->select('id', 'title', 'slug', 'description', 'image_url', 'content', 'meta_id', 'created_at', 'cate_id')
                ->first();
        
        if( $detail ){           

            $title = trim($detail->meta_title) ? $detail->meta_title : $detail->title;

            $hotArr = Articles::where( ['cate_id' => $detail->cate_id, 'is_hot' => 1] )->where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            $otherArr = Articles::where( ['cate_id' => $detail->cate_id] )->where('id', '<>', $id)->orderBy('id', 'desc')->limit(6)->get();
            $lastestArr = Articles::where('id', '<>', $id)->orderBy('id', 'desc')->limit(5)->get();
            $seo['title'] = $detail->meta_title ? $detail->meta_title : $detail->title;
            $seo['description'] = $detail->meta_description ? $detail->meta_description : $detail->title;
            $seo['keywords'] = $detail->meta_keywords ? $detail->meta_keywords : $detail->title;
            $socialImage = $detail->image_url; 
            $cateDetail = ArticlesCate::find($detail->cate_id);
             $tiecList = Articles::where(['cate_id' => 5])->orderBy('display_order')->limit(6)->get();            
            return view('frontend.news.news-detail', compact('title',  'hotArr', 'detail', 'otherArr', 'seo', 'socialImage','cateDetail', 'tiecList', 'lastestArr'));
        }else{
            return view('erros.404');
        }
    }
}

