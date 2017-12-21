<?php

namespace App\Http\Controllers;

use App\Committee;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committees = Committee::all();
        return view('configurations.committees')->with('committees', $committees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:committees']);
        Committee::create(['name' => $request->name, 'created_by' => auth()->user()->masterfile_id]);
        $request->session()->flash('success', 'Committee has been created');
        return redirect('config/committees');
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
    public function edit(Committee $com)
    {
        return Response::json([
            'id' => $com->id,
            'name' => $com->name
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(Request $request)
    {
        $this->validate($request, ['name' => 'required|unique:committees,name,'.$request->id]);
        Committee::where('id', $request->id)->update(['name' => $request->name]);
        $request->session()->flash('success', 'Committee name has been updated');
        return redirect('config/committees');
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy()
    {
        try {
            Committee::destroy(request('del_id'));
            request()->session()->flash('success', 'Committee has been removed');
            return redirect('config/committees');
        } catch(QueryException $qe) {
            request()->session()->flash('error', $qe->getMessage());
        }
    }
}
