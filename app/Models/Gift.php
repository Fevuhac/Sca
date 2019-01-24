<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Gift extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gift';

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
                            'name', 
                            'slug',                            
                            'star',
                            'image_url',
                            'popup_image_url',
                            'display_order',
                            'status',   
                            'top',  
                            'amount',              
                            'created_user', 
                            'updated_user'
                        ];
    public function giftCode(){
        return $this->hasMany('App\Models\GiftCode', 'gift_id');
    }    
}