<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
	use HasFactory;  
	
    public $timestamps = true;

    protected $table = 'tallers';

    protected $fillable = ['nomtaller','sede','cupo'];
	
}

