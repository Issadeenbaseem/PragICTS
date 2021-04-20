<?php

namespace App\Http\Controllers;

use App\Models\SpecializationVertical;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\Specificity;

class SpecializationVerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SpecializationVertical::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return SpecializationVertical::create($request ->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return SpecializationVertical::find($id);
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
        $specialization_vertical = SpecializationVertical::find($id);
        $specialization_vertical ->update($request ->all());
        return $specialization_vertical;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return SpecializationVertical::destroy($id);
    }
}
