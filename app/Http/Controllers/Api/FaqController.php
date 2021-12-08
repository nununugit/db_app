<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $faqs= Faq::all()->where('delete_flag', 0);
        return response()->json([
            'message'=>'ok',
            'data' =>$faqs,
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
        $faqs = new Faq();
        $faqs->full_name = $request->full_name;
        $faqs->mail_address = $request->mail_address;
        $faqs->phone_number = $request->phone_number;
        $faqs->message = $request->message;
        $faqs->save();

        return redirect('/faq');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faqs = Faq::where('id', $id)->where('delete_flag', 0)->get();
        return response()->json([
            'message'=>'ok',
            'data' => $faqs,
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
        
        $faqs = Faq::find($id);
        $faqs->full_name = $request->full_name;
        $faqs->mail_address = $request->mail_address;
        $faqs->phone_number = $request->phone_number;
        $faqs->message = $request->message;
        $faqs->save();
        
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
        Faq::where('id',$id)
            ->update(['delete_flag' => '1' ]);

        return response()->json([
            'message'=>'data is deleted',
            'data' =>'ok',
        ],200,[],JSON_UNESCAPED_UNICODE);
    }
}
