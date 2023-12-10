<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use App\Models\Analysis;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\AnalyzeRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class AnalysisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $this->authorize('viewAny', Analysis::class);
        $analyses = Analysis::with('user')->data()->get();
        return view('analyze.index', compact('analyses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $this->authorize('create', Analysis::class);
        return view('analyze.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnalyzeRequest $request): RedirectResponse
    {
        $this->authorize('create', Analysis::class);
        $inputs = $request->all();

        if ($request->hasFile('image')) {
            // Upload the image and store it in the default 'storage' disk
            $imagePath = $request->file('image')->store('photo', 'public');

            $inputs['image'] = $imagePath;
        }

        Analysis::create($inputs);
        return redirect()->route('analyses.index')->with('success', 'data stored successfull');


    }

    /**
     * Display the specified resource.
     */
    public function show(Analysis $analysis): View
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Analysis $analysis): View
    {
        $this->authorize('update', $analysis);
        // $analysis = Analysis::findOrFail($id);
        return view('analyze.edit', compact('analysis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Analysis $analysis): RedirectResponse
    {
        // dd(auth()->user()->roles('admin'));
        $this->authorize('update', $analysis);

        // $analysis = Analysis::findOrFail($id);
        $inputs = $request->all();
        if ($request->hasFile('image')) {
    
            $fileToDelete = $analysis->image;
            Storage::disk('public')->delete($fileToDelete);
            // Upload the image and store it in the default 'storage' disk
            $imagePath = $request->file('image')->store('photo', 'public');

            $inputs['image'] = $imagePath;
        }

        if (auth()->user()->roles('admin')) {
            $analysis->title = $request->title;
            $analysis->short_detail = $request->short_detail;
            $analysis->description = $request->description;
            $analysis->status = $request->status;
            $analysis->review = $request->review;
            $analysis->review_by = auth()->id();
            $analysis->update();
        } else {
            $analysis->update($inputs);
            return redirect()->route('analyses.index')->with('success', 'data updated successfull');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Analysis $analysis): RedirectResponse
    {
        //
    }
}
