<?php

namespace App\Http\Controllers;

use App\Models\Anym;
use Illuminate\Http\Request;

class AnymController extends Controller
{
    public function __construct(Anym $anym)
    {
        $this->anym = $anym;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Anym::all();

        return view('question', compact('result'));
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
        $this->validate($request, [
            'name' => 'required',
            'level' => 'required',
            'amount' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'level' => $request->input('level'),
            'amount' => $request->input('amount'),
        ];

        $this->anym->create($data);
        return redirect()->route('question');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anym  $anym
     * @return \Illuminate\Http\Response
     */
    public function show(Anym $anym)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anym  $anym
     * @return \Illuminate\Http\Response
     */
    public function edit(Anym $anym)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anym  $anym
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anym $anym)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anym  $anym
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anym $anym)
    {
        //
    }
}
