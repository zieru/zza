<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
	
	
	public function nilai(){
		return $this->hasOne(nilai::class,'users_id','id');
	}
}
