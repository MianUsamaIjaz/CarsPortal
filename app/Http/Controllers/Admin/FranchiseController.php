<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFranchiseRequest;
use App\Http\Requests\StoreFranchiseRequest;
use App\Http\Requests\UpdateFranchiseRequest;
use App\Models\Franchise;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FranchiseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('franchise_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $franchises = Franchise::all();

        return view('admin.franchises.index', compact('franchises'));
    }

    public function create()
    {
        abort_if(Gate::denies('franchise_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.franchises.create');
    }

    public function store(StoreFranchiseRequest $request)
    {
        $franchise = Franchise::create($request->all());

        return redirect()->route('admin.franchises.index');
    }

    public function edit(Franchise $franchise)
    {
        abort_if(Gate::denies('franchise_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.franchises.edit', compact('franchise'));
    }

    public function update(UpdateFranchiseRequest $request, Franchise $franchise)
    {
        $franchise->update($request->all());

        return redirect()->route('admin.franchises.index');
    }

    public function show(Franchise $franchise)
    {
        abort_if(Gate::denies('franchise_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.franchises.show', compact('franchise'));
    }

    public function destroy(Franchise $franchise)
    {
        abort_if(Gate::denies('franchise_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $franchise->delete();

        return back();
    }

    public function massDestroy(MassDestroyFranchiseRequest $request)
    {
        Franchise::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
