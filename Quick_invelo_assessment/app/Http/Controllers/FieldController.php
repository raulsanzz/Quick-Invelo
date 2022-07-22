<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Field;

class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Store all entries in cache for 1 hour (3600 seconds)
        $fields = Cache::remember('field', 30, function() {
            return Field::orderBy('name', 'ASC')->get();
        });

        return view('index')
            ->with('fields', $fields);
    }
}
