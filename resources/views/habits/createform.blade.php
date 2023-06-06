@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Habit') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('habit.create') }}">
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
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Choose one...
                        </button>
                        <div class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <a class="dropdown-item" href="#" onclick="selectCategory(1)">work</a>
                            <a class="dropdown-item" href="#" onclick="selectCategory(2)">hobby</a>
                            <a class="dropdown-item" href="#" onclick="selectCategory(3)">personal</a>
                        </div>
                            <input type="hidden" id="categoryInput" name="category_id">
                        </div>

                        <script>
                            function selectCategory(category) {
                                document.getElementById('categoryDropdown').textContent = category;
                                document.getElementById('categoryInput').value = category;
                            }
                        </script>
                        
                        </div>
                        </div>
                        <div class="row mb-3">
                        <label for="frequency" class="col-md-4 col-form-label text-md-end">{{ __('Frequency') }}</label>
                        <div class="col-md-6 d-flex align-items-center">
                            <div class="form-check mr-3">
                                <input id="frequencyDaily" type="radio" value="daily" class="form-check-input @error('frequency') is-invalid @enderror" name="frequency" required autocomplete="frequency">
                                <label for="frequencyDaily" class="form-check-label">Daily</label>
                            </div>
                            <div class="mr-3" style="margin-right: 1rem;"></div>
                            <div class="form-check mr-3">
                                <input id="frequencyWeekly" type="radio" value="weekly" class="form-check-input @error('frequency') is-invalid @enderror" name="frequency" required autocomplete="frequency">
                                <label for="frequencyWeekly" class="form-check-label">Weekly</label>
                            </div>
                            <div class="mr-3" style="margin-right: 1rem;"> </div>
                            <div class="form-check mr-3">
                                <input id="frequencyMonthly" type="radio" value="monthly" class="form-check-input @error('frequency') is-invalid @enderror" name="frequency" required autocomplete="frequency">
                                <label for="frequencyMonthly" class="form-check-label">Monthly</label>
                            </div>
                            @error('frequency')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
