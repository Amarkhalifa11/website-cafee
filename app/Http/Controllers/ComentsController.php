<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\coments;
use Illuminate\Http\Request;

class ComentsController extends Controller
{

    public function add_coment(Request $request)
    {
        $id      = $request->input('id');
        $name    = $request->input('name');
        $email   = $request->input('email');
        $coment  = $request->input('comment');
        $date    = date('Y-m-d h:i:s');

        DB::table('coments')->insert([

            'coment_post_id'  => $id,
            'name'            => $name,
            'email'           => $email,
            'coment'          => $coment,
            'date'            => $date,
        ]);

        return redirect()->back();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\coments  $coments
     * @return \Illuminate\Http\Response
     */
    public function show(coments $coments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\coments  $coments
     * @return \Illuminate\Http\Response
     */
    public function edit(coments $coments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\coments  $coments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coments $coments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\coments  $coments
     * @return \Illuminate\Http\Response
     */
    public function destroy(coments $coments)
    {
        //
    }
}
