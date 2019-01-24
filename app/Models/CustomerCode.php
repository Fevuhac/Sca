<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CustomerCode extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customer_code';	

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
                            'customer_id', 
                            'code_id', 
                            'status'
                        ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }
    public function giftCode()
    {
        return $this->belongsTo('App\Models\GiftCode', 'code_id');
    }
}
