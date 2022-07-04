@extends('layout.main')

@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <h1 class="mb-3">Modify {{$Comic->title}}</h1>
                <form action="{{route('Comics.update',$Comic)}}" method="POST">
                    @csrf

                    @method('PUT')
                    <div class="mb-3">
                      <label for="title" class="form-label">Comic Name</label>
                      <input type="text" id="title" name="title" class="form-control"
                      value="{{$Comic->title}}"
                      placeholder="Comic Name">
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Comic URL Image</label>
                      <input type="text" id="image" name="image" class="form-control"
                      value="{{$Comic->image}}"
                      placeholder="Comic image">
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Comic Type</label>
                      <input type="text" id="type" name="type" class="form-control"
                      value="{{$Comic->type}}"
                      placeholder="Comic Type">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <a class="btn btn-success" href="{{route('Comics.index')}}">Torna indietro</a>
    </div>

@endsection
