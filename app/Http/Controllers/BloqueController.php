<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use Illuminate\Http\Request;

/**
 * Class BloqueController
 * @package App\Http\Controllers
 */
class BloqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloques = Bloque::paginate(10);

        return view('bloque.index', compact('bloques'))
            ->with('i', (request()->input('page', 1) - 1) * $bloques->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloque = new Bloque();
        return view('bloque.create', compact('bloque'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Bloque::$rules);

        $bloque = Bloque::create($request->all());

        return redirect()->route('bloques.index')
            ->with('success', 'Bloque created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bloque = Bloque::find($id);

        return view('bloque.show', compact('bloque'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloque = Bloque::find($id);

        return view('bloque.edit', compact('bloque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Bloque $bloque
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bloque $bloque)
    {
        request()->validate(Bloque::$rules);

        $bloque->update($request->all());

        return redirect()->route('bloques.index')
            ->with('success', 'Bloque updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $bloque = Bloque::find($id)->delete();

        return redirect()->route('bloques.index')
            ->with('success', 'Bloque deleted successfully');
    }
}
