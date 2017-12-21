<?php

namespace App\Http\Controllers;

use App\BroadcastType;
use App\Committee;
use App\DocumentCategory;
use App\Masterfile;
use App\NotificationType;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class DocumentManagerController extends Controller
{
    const mca = 'MCA';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $broadcast_types = BroadcastType::all();
        $notification_types = NotificationType::all();
        $committees = Committee::all();
        $doc_cats = DocumentCategory::all();

        return view('document_manager.index', [
            'broadcast_types' => $broadcast_types,
            'notification_types' => $notification_types,
            'committees' => $committees,
            'doc_cats' => $doc_cats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document_manager.compose');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
