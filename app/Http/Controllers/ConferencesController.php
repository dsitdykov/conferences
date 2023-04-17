<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConferencesController extends Controller
{
    protected array $conferences = [
        [
            'title'=>'Title 1',
            'content'=>'Content 1'
        ],
        [
            'title'=>'Title 2',
            'content'=>'Content 2'
        ]

    ];
    /**
     * Display a listing of the resource.
     * @return View
     */

    public function index(): View
    {
        $conference= new Conference();
        return view('conferences.index', ['conferences'=>$conference->all()]);
    }

//    public function index(): View
//    {
//        return \view('conferences.index');
//    }

//    public function index()
//    {
//        return view('conferences.index', ['conferences'=>$this->conference]);
//    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return \view('conferences.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreConferenceRequest $request, Conference $conference): RedirectResponse
    {

        $validated = $request->validated();
        $conferenceItem = $conference->create($validated);

        $request->session()->flash('status', 'Conference created!');

        return redirect()->route('conferences.show', ['conference' => $conferenceItem->id]);
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return View
     */
    public function show(string $id): View
    {
        return view('conferences.show', ['conferences' => Conference::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return \view('conferences.edit', ['conference' => Conference::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     * @param StoreConferenceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreConferenceRequest $request, string $id): RedirectResponse
    {
        $conference = (new Conference())->findOrFail($id);
        $validated = $request->validated();
        $conference->fill($validated);
        $conference->save();


        $request->session()->flash('status', 'Conference was updated!');

        return redirect()->route('conferences.show', ['conference' => $conference->id]);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(string $id)
    {
        $conference = (new Conference())->findOrFail($id);
        $conference->delete();

        session()->flash('status', 'Conference was deleted!');

        return redirect()->route('conferences.index');
    }
}
