<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $curricula= Curriculum::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$curricula,
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
        $curricula = new Curriculum();
        $curricula->c_name = $request->c_name;
        $curricula->c_content = $request->c_content;
        $curricula->t_id = $request->t_id;
        $curricula->f_id = $request->f_id;
        $curricula->save();

        return redirect('/api/curricula');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curricula = Curriculum::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $curricula,
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
        
        $curricula = curriculum::find($id);
        $curricula->c_name = $request->c_name;
        $curricula->c_content = $request->c_content;
        $curricula->t_id = $request->t_id;
        $curricula->f_id = $request->f_id;
        $curricula->save();
        
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
        curriculum::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
