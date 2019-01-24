<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\ArticlesCate;
use App\Models\Articles;
use App\Models\Settings;
use Request;
//use App\Models\Entity\SuperStar\Account\Traits\Behavior\SS_Shortcut_Icon;

/**
 * This is provider for using view share
 * @author AnPCD
 */
class ViewComposerServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Call function composerSidebar
		$this->composerMenu();	
		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Composer the sidebar
	 */
	private function composerMenu()
	{
		$cateArrByLoai = [];		
		view()->composer( '*' , function( $view ){
			
			$articlesCateList = ArticlesCate::where('is_menu', 1)->orderBy('display_order')->get();
	        $settingArr = Settings::whereRaw('1')->lists('value', 'name');
	        $routeName = \Request::route()->getName();
	        
	        $articlesListFooter = Articles::where(['cate_id' => 1])->orderBy('id', 'desc')->limit(4)->get();
			$view->with( [					
					'settingArr' => $settingArr,					
					'routeName' => $routeName,
					'articlesCateList' => $articlesCateList,
					'articlesListFooter' => $articlesListFooter
					] );
		});
	}
	
}
