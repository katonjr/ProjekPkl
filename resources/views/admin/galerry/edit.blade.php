@extends('admin.app')

@section('content')

<body>
    <div class="judul flex">
        <div class="row justify-content-center">
            <div>
                <h1 class="row justify-content-center mb-4">Edit Galerry Content</h1>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action= "{{  route('galerry.update',$data->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image Upload</label>
                                <input type="file" name="image" class="form-control" id="image" aria-describedby="Isi Image">
                                <br>
                                <img src="{{ asset('uploads/'.$data->image) }}" width="200px" width="200px">
                                {{-- <label class="form-control">{{$data->image}}</label> --}}
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <br>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
