@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Event') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('event.update', $event->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                            <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $event->title) }}"required autocomplete="title">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                            <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $event->description) }}"required autocomplete="description">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>
                        <div class="col-md-6">
                            <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{old('date', $event->date)}}" required autocomplete="date">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>
                        <div class="col-md-6">
                            <input id="time" type="time" class="form-control @error('time') is-invalid @enderror" name="time" value="{{old('time', $event->time)}}" required autocomplete="time">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                        <div class="col-md-6">
                            <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" value="{{old('location', $event->location)}}"required autocomplete="location">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input id="status" type="checkbox" class="form-check-input @error('status') is-invalid @enderror" name="status" value="0" {{ old('status', $event->status) === 'done' ? 'checked' : '' }}>
                                <label for="status" class="form-check-label">Done</label>
                            </div>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
