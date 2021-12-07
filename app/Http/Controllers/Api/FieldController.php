<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Http\Controllers\Controller;

class FieldController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $fields= Field::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$fields,
        ],200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = new Field();
        $fields->f_name = $request->f_name;
        $fields->save();

        return redirect('/api/fields');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fields = Field::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $fields,
        ],200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $fields = Field::find($id);
        $fields->f_name = $request->f_name;
        $fields->save();
        
        return response()->json([
            'message'=>'data is updated',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Field::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
