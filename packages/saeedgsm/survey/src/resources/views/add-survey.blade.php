@extends('survey::layout.master')
@section('content')
    <div class="card text-center">
        <div class="card-header">
            add survey
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            @include('survey::layout.alerts')
            <form action="{{route('store.survey')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="text1" class="form-label">name</label>
                    <input type="text" class="form-control" id="text1" name="name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" value="1" name="is_published" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
@endsection
