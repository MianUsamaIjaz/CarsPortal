@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.carModel.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.carModels.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="carModel">{{ trans('cruds.carModel.fields.carModel') }}</label>
                <input class="form-control {{ $errors->has('carModel') ? 'is-invalid' : '' }}" type="text" name="carModel" id="carModel" value="{{ old('carModel', '') }}" required>
                @if($errors->has('carModel'))
                    <span class="text-danger">{{ $errors->first('carModel') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.carModel.fields.carModel_helper') }}</span>
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