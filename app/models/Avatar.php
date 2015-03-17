<?php

class Avatar extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'avartars';
        
         public function users()
        {
            return $this->belongsTo('users');
        }
}