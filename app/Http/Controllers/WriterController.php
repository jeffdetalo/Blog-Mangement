<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WriterController extends Controller
{
    public function index()
    {
        $writer = Writer::All();
        return $writer;
    }
    
    public function show($id)
    {
        $writer = Writer::find($id);
        return $writer;
    }

    
    public function create(Request $request)
    {
        Writer::create([
            'first_name' => $request->first_name,
            'middle_name' =>  $request->middle_name,
            'last_name' => $request->last_name,
            'gender' =>  $request->gender,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'writer_restriction' => $request->writer_restriction
        ]);
        
        return response()->json('Data has been saved!');
    }
        
    public function update($id, Request $request)
    {
        $writer = Writer::find($id);
        $writer->update([
            'first_name' => $request->first_name,
            'middle_name' =>  $request->middle_name,
            'last_name' => $request->last_name,
            'gender' =>  $request->gender,
            'email' =>  $request->email,
            'password' =>  $request->password,
            'writer_restriction' => $request->writer_restriction
        ]);

        $writer->save();
        return response()->json('Data has been updated!');
    }
        
    public function delete($id) 
    {
        $writer = Writer::find($id);
        $writer->posts()->delete();
        $writer->comments()->delete();
        Writer::find($id)->delete();
        return response()->json('successfully deleted!');
    }
}
