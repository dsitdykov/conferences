<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConferencesController extends Controller
{
    protected array $conferences = [
        1 => [
            'title'=>'Title 1',
            'content'=>'Content 1'
        ],
        2 => [
            'title'=>'Title 2',
            'content'=>'Content 2'
        ]

    ];
    /**
     * Display a listing of the resource.
     */

//    public function index(): View
//    {
//        $conference= new Conference();
//        return view('conferences.index', ['conferences'=>$conference->all()]);
//    }

    public function index()
    {
        return view('conferences.index', ['conferences'=>$this->conference]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        return view('conferences.show', ['conferences' => $this->conferences[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
