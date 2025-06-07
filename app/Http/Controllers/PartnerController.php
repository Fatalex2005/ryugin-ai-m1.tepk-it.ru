<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePartnerRequest;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partners.index', compact('partners'));
    }

    public function create()
    {
        return view('partners.create');
    }

    public function store(CreatePartnerRequest $request)
    {
        Partner::create($request->validated());
        return redirect()->route('partners.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {
        Partner::create($request->validated());
        return redirect()->route('contr.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
