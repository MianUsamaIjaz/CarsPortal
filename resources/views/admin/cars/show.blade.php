@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.car.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.manufacturer') }}
                        </th>
                        <td>
                            {{ $car->manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.carModel') }}
                        </th>
                        <td>
                            {{ $car->carModel }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.year') }}
                        </th>
                        <td>
                            {{ $car->year }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.color') }}
                        </th>
                        <td>
                            {{ $car->color->color ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.car.fields.location') }}
                        </th>
                        <td>
                            @foreach($car->locations as $key => $location)
                                <span class="label label-info">{{ $location->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.cars.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection