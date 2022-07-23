@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.car.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.cars.update", [$car->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="manufacturer">{{ trans('cruds.car.fields.manufacturer') }}</label>
                <input class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" type="text" name="manufacturer" id="manufacturer" value="{{ old('manufacturer', $car->manufacturer) }}" required>
                @if($errors->has('manufacturer'))
                    <span class="text-danger">{{ $errors->first('manufacturer') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.manufacturer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="carModel">{{ trans('cruds.car.fields.carModel') }}</label>
                <input class="form-control {{ $errors->has('carModel') ? 'is-invalid' : '' }}" type="text" name="carModel" id="carModel" value="{{ old('carModel', $car->carModel) }}" required>
                @if($errors->has('carModel'))
                    <span class="text-danger">{{ $errors->first('carModel') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.carModel_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="year">{{ trans('cruds.car.fields.year') }}</label>
                <input class="form-control {{ $errors->has('year') ? 'is-invalid' : '' }}" type="text" name="year" id="year" value="{{ old('year', $car->year) }}" required>
                @if($errors->has('year'))
                    <span class="text-danger">{{ $errors->first('year') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.year_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="locations">{{ trans('cruds.car.fields.location') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('locations') ? 'is-invalid' : '' }}" name="locations[]" id="locations" multiple>
                    @foreach($locations as $id => $location)
                        <option value="{{ $id }}" {{ (in_array($id, old('locations', [])) || $car->locations->contains($id)) ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('locations'))
                    <span class="text-danger">{{ $errors->first('locations') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="color_id">{{ trans('cruds.car.fields.color') }}</label>
                <select class="form-control select2 {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color_id" id="color_id" required>
                    @foreach($colors as $id => $entry)
                        <option value="{{ $id }}" {{ (old('color_id') ? old('color_id') : $car->color->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('color'))
                    <span class="text-danger">{{ $errors->first('color') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.car.fields.color_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection