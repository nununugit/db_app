<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Laboratory;
use App\Http\Controllers\Controller;

class LaboratoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $laboratories= Laboratory::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$laboratories,
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
        $laboratories = new Laboratory();
        $laboratories->l_content = $request->l_content;
        $laboratories->t_id = $request->t_id;
        $laboratories->f_id = $request->f_id;
        $laboratories->save();

        return redirect('/api/laboratories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $laboratories = Laboratory::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $laboratories,
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
        
        $laboratories = Laboratory::find($id);
        $laboratories->l_content = $request->l_content;
        $laboratories->t_id = $request->t_id;
        $laboratories->f_id = $request->f_id;
        $laboratories->delete_flag = 0;
        $laboratories->save();

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
        Laboratory::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
