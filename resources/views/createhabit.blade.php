@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Habit') }}</div>

                <div class="card-body">
                    <form method="GET" action="{{ route('habit.create') }}">
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
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>
                        <div class="col-md-6">
                            <input id="category" type="category" class="form-control @error('category') is-invalid @enderror" name="category" required autocomplete="category">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="frequency" class="col-md-4 col-form-label text-md-end">{{ __('Frequency') }}</label>
                        <div class="col-md-6">
                            <input id="frequency" type="frequency" class="form-control @error('frequency') is-invalid @enderror" name="frequency" required autocomplete="frequency">
                        </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
