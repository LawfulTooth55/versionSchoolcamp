<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registroalumno extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'registroalumnos';

    protected $fillable = ['user_id','taller_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function taller()
    {
        return $this->hasOne('App\Models\Taller', 'id', 'taller_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
