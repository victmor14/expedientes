<?php

namespace App\Http\Controllers;

use App\Models\Expedient;
use Illuminate\Http\Request;

/**
 * Class ExpedientController
 * @package App\Http\Controllers
 */
class ExpedientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedients = Expedient::paginate();

        return view('expedient.index', compact('expedients'))
            ->with('i', (request()->input('page', 1) - 1) * $expedients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expedient = new Expedient();
        return view('expedient.create', compact('expedient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Expedient::$rules);

        $expedient = Expedient::create($request->all());

        return redirect()->route('expedients.index')
            ->with('success', 'Expedient created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expedient = Expedient::find($id);

        return view('expedient.show', compact('expedient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expedient = Expedient::find($id);

        return view('expedient.edit', compact('expedient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expedient $expedient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expedient $expedient)
    {
        request()->validate(Expedient::$rules);

        $expedient->update($request->all());

        return redirect()->route('expedients.index')
            ->with('success', 'Expedient updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expedient = Expedient::find($id)->delete();

        return redirect()->route('expedients.index')
            ->with('success', 'Expedient deleted successfully');
    }
}
