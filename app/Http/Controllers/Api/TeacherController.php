<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teachers= Teacher::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$teachers,
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
        $teachers = new Teacher();
        $teachers->t_name = $request->t_name;
        $teachers->t_content = $request->t_content;
        $teachers->save();

        return redirect('/api/teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teachers = Teacher::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $teachers,
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
        
        $teachers = Teacher::find($id);
        $teachers->t_name = $request->t_name;
        $teachers->t_content = $request->t_content;
        $teachers->save();
        
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
        Teacher::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
