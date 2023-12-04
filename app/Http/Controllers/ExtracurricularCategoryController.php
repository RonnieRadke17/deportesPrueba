<?php

namespace App\Http\Controllers;

use App\Models\ExtracurricularCategory;
use Illuminate\Http\Request;

/**
 * Class ExtracurricularCategoryController
 * @package App\Http\Controllers
 */
class ExtracurricularCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extracurricularCategories = ExtracurricularCategory::paginate();

        return view('extracurricular-category.index', compact('extracurricularCategories'))
            ->with('i', (request()->input('page', 1) - 1) * $extracurricularCategories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extracurricularCategory = new ExtracurricularCategory();
        return view('extracurricular-category.create', compact('extracurricularCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ExtracurricularCategory::$rules);

        $extracurricularCategory = ExtracurricularCategory::create($request->all());

        return redirect()->route('extracurricularcategories.index')
            ->with('success', 'ExtracurricularCategory created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $extracurricularCategory = ExtracurricularCategory::find($id);

        return view('extracurricular-category.show', compact('extracurricularCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $extracurricularCategory = ExtracurricularCategory::find($id);

        return view('extracurricular-category.edit', compact('extracurricularCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ExtracurricularCategory $extracurricularCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtracurricularCategory $extracurricularCategory)
    {
        request()->validate(ExtracurricularCategory::$rules);

        $extracurricularCategory->update($request->all());

        return redirect()->route('extracurricularcategories.index')
            ->with('success', 'ExtracurricularCategory updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $extracurricularCategory = ExtracurricularCategory::find($id)->delete();

        return redirect()->route('extracurricularcategories.index')
            ->with('success', 'ExtracurricularCategory deleted successfully');
    }
}
