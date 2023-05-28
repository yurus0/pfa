@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Task') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('event.create') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
                            <div class="col-md-6">
                            <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" required autocomplete="title">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>
                            <div class="col-md-6">
                            <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" required autocomplete="description">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_time" class="col-md-4 col-form-label text-md-end">{{ __('Date and Time') }}</label>
                        <div class="col-md-6">
                            <input id="date_time" type="date_time" class="form-control @error('date_time') is-invalid @enderror" name="date_time" required autocomplete="date_time">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>
                        <div class="col-md-6">
                            <input id="location" type="location" class="form-control @error('location') is-invalid @enderror" name="location" required autocomplete="location">
                        </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a href="route {{('event.create')}}" class="btn btn-primary">Add</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
