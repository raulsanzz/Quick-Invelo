<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Record;
use App\Models\Field;

class RecordController extends Controller
{
    public function index()
    {
        // Store all entries in cache for 1 hour (30 seconds)
        // Store all entries in cache for 1 hour (3600 seconds)
        $records = Cache::remember('record', 30, function() {
            return Record::orderBy('name', 'ASC')->get();
        });

        return view('index')
            ->with('records', $records);
    }
    
    //get "$record->fields()" to get all the 
    //fields that are associated with the record through the pivot table using "belongsToMany" and using "withPivot('value')"
    public function getRecordFields(){
        
       // $records = $this->belongsToMany(Field::class, 'record_field',
       //'record_id', 'field_id','value');

        $record = Record::find(1);
        // //passing field id inside attach()
        $record->fields()->attach(3);
        
        $records = Record::with('fields')->get();
        //dd($records->toArray());
        return view('index')
            ->with('pivotRecords', $records);
    }

    public function getAllFields_and_allRelatedPivotRecords(){

        $fields = Field::select(
            "field.id as id", 
            "field.name",
            "record_field.record_id",
            "record_field.value"
        )
        ->leftJoin("record_field", "record_field.field_id", "=", "field.id")
        ->get();

        //dd($fields->toArray());
        return view('index')
            ->with('allFields', $fields);
    }
}
