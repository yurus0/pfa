@extends('layouts.app')

@section('content')
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Task') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('task.create') }}">
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
                                <input class="form-check-input" type="checkbox" name="completed" id="completed">
                                <label class="form-check-label" for="completed"> {{ __('Is this task completed?') }}</label>
                        </div>
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
</body>
@endsection
