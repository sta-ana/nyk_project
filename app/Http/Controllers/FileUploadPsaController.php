<?php

namespace App\Http\Controllers;

use App\Models\fileUploadPsa;
use App\Http\Requests\StorefileUploadPsaRequest;
use App\Http\Requests\UpdatefileUploadPsaRequest;

class FileUploadPsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorefileUploadPsaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorefileUploadPsaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fileUploadPsa  $fileUploadPsa
     * @return \Illuminate\Http\Response
     */
    public function show(fileUploadPsa $fileUploadPsa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fileUploadPsa  $fileUploadPsa
     * @return \Illuminate\Http\Response
     */
    public function edit(fileUploadPsa $fileUploadPsa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefileUploadPsaRequest  $request
     * @param  \App\Models\fileUploadPsa  $fileUploadPsa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatefileUploadPsaRequest $request, fileUploadPsa $fileUploadPsa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fileUploadPsa  $fileUploadPsa
     * @return \Illuminate\Http\Response
     */
    public function destroy(fileUploadPsa $fileUploadPsa)
    {
        //
    }
}
