<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $table = 'record';

    public function fields(){
        return $this->belongsToMany(Field::class,'record_field','record_id','field_id')->withPivot('value');
    }
    
    
    
    use HasFactory;
}
