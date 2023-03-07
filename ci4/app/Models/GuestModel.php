<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
	protected $table = 'gsyogawin_myguests'
		
		public function getGuest()
		{
			return $this->findAll();
		}
}