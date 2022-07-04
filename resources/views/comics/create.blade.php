@extends('layout.main')

@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-8 offset-2">
                <h1 class="mb-3">Insert new Comic</h1>
                <form action="{{route('Comics.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Comic Name</label>
                      <input type="text" id="title" name="title" class="form-control
                      @error('title') is-invalid @enderror"
                      value="{{old('title')}}"
                      placeholder="Comic Name">
                      @error('title')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Comic URL Image</label>
                      <input type="text" id="image" name="image" class="form-control
                        @error('image') is-invalid @enderror"
                        value="{{old('image')}}"
                        placeholder="Comic URL">
                        @error('image')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Comic Type</label>
                      <input type="text" id="type" name="type" class="form-control
                        @error('type') is-invalid @enderror"
                        value="{{old('type')}}"
                        placeholder="Comic Type">
                        @error('type')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <a class="btn btn-success" href="{{route('Comics.index')}}">Torna indietro</a>
    </div>

@endsection
