<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'owner_name', 'owner_phone', 'pet_name', 'color_breed', 'weight', 'return_to',
		 'shipping_address', 'cremation_type', 'paw_print', 'urn_type', 'nameplate_type', 'service_options', 'extra_notes', 'status_id'];

	public static function create(array $array) {
	}

	/**
     * Get the customer that placed the order.
     */
    public function clinic()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Get the status of the order.
     */
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
