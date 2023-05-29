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
                            <label for="deadline_date" class="col-md-4 col-form-label text-md-end">{{ __('Deadline date') }}</label>
                        <div class="col-md-6">
                            <input id="deadline_date" type="date" class="form-control @error('deadline_date') is-invalid @enderror" name="deadline_date" required autocomplete="deadline_date">
                        </div>
                        </div>
                        <div class="row mb-3">
                            <label for="deadline_time" class="col-md-4 col-form-label text-md-end">{{ __('Deadline time') }}</label>
                        <div class="col-md-6">
                            <input id="deadline_time" type="time" class="form-control @error('deadline_time') is-invalid @enderror" name="deadline_time" required autocomplete="deadline_time">
                        </div>
                        </div>
                        <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="completed" id="completed" {{ old('completed') ? 'checked' : '' }}>
                                <label class="form-check-label" for="completed"> {{ __('Is this task completed?') }}</label>
                        </div>
                        </div>
                        </div> 
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                            <a href="route {{('task.create')}}" class="btn btn-primary">Add</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
