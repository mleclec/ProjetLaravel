<?php

class Avatar extends Eloquent {
            
        /**
	 * The database table used by the model.
	 *
	 * @var string
	 */    
	protected $table = 'avatars';
        
        public function users()
        {
            return $this->belongsTo('Users');
        }
}