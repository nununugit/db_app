<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $newses= News::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$newses,
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
        $newses = new News();
        $newses->n_title = $request->n_title;
        $newses->n_content = $request->n_content;
        $newses->thumbnail_pass = $request->thumbnail_pass;
        $newses->save();

        return redirect('/api/newses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newses = News::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $newses,
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
        $newses = News::find($id);
        $newses->n_title = $request->n_title;
        $newses->n_content = $request->n_content;
        $newses->thumbnail_pass = $request->thumbnail_pass;
        $newses->save();
        
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
        News::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
