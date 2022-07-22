<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $table = 'field';
    // Get the entries for a specific mood.
    
    public function records(){
        return $this->belongsToMany(Record::class,'record_field','record_id','field_id')->withPivot('value');
    }
    
    use HasFactory;
}
