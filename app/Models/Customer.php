<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'customer';

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
    protected $fillable = ['username', 'email', 'phone', 'status', 'type', 'date_from', 'date_to', 'updated_user', 'cmnd', 'fullname'];
    public function giftCode()
    {
        return $this->hasMany('App\Models\CustomerCode', 'customer_id');
    }
}