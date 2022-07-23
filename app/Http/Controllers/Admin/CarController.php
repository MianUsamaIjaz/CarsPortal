<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCarRequest;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Models\Car;
use App\Models\Franchise;
use App\Models\Color;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('car_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $cars = Car::with(['color', 'locations','manufacturer','year'])->get();

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        abort_if(Gate::denies('car_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $colors = Color::pluck('color', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Franchise::pluck('name', 'id');

        return view('admin.cars.create', compact('locations', 'colors'));
    }

    public function store(StoreCarRequest $request)
    {
        $car = Car::create($request->all());
        $car->locations()->sync($request->input('locations', []));
        return redirect()->route('admin.cars.index');
    }

    public function edit(Car $car)
    {
        abort_if(Gate::denies('car_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $colors = Color::pluck('color', 'id')->prepend(trans('global.pleaseSelect'), '');

        $locations = Franchise::pluck('name', 'id');

        $car->load('color', 'locations');

        return view('admin.cars.edit', compact('locations', 'car', 'colors'));
    }

    public function update(UpdateCarRequest $request, Car $car)
    {
        $car->update($request->all());
        $car->locations()->sync($request->input('locations', []));

        return redirect()->route('admin.cars.index');
    }

    public function show(Car $car)
    {
        abort_if(Gate::denies('car_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $car->load('color', 'locations');

        return view('admin.cars.show', compact('car'));
    }

    public function destroy(Car $car)
    {
        abort_if(Gate::denies('car_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $car->delete();

        return back();
    }

    public function massDestroy(MassDestroyCarRequest $request)
    {
        Car::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

