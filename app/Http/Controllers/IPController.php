<?php

namespace App\Http\Controllers;

use App\IP;
use Illuminate\Http\Request;

class IPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // When accessing /ipmsdocs with GET
    public function index()
    {
      return view('ipms.index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\IP  $iP
     * @return \Illuminate\Http\Response
     */

     // When accessing /api/ipms/v1 with GET
    public function show(IP $iP, Request $request)
    {
      // Save client's IP address to the database
      $clientIP = new IP;
      $clientIP->IPAddress = $request->ip();
      $clientIP->save();
      // Return the client's IP address
      echo json_encode(["IPAddress"=> $request->ip()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\IP  $iP
     * @return \Illuminate\Http\Response
     */
    public function edit(IP $iP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\IP  $iP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IP $iP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\IP  $iP
     * @return \Illuminate\Http\Response
     */
    public function destroy(IP $iP)
    {
        //
    }
}
