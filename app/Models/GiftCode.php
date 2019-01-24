<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class GiftCode extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'gift_code';

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
                            'code', 
                            'type',                            
                            'gift_id',
                            'status',
                            'created_user', 
                            'updated_user'
                        ];
    public function gift(){
        return $this->belongsTo('App\Models\Gift', 'gift_id');
    }
}