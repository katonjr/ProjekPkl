@extends('admin.app')

@section('content')

<body>
    <div class="judul flex">
        <div class="row justify-content-center">
            <div>
                <h1 class="row justify-content-center mb-4">Add Category Content</h1>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="Nama Category" class="form-label">Nama Category</label>
                                <input type="text" name="nama_category" class="form-control @error('nama_category')
                                is-invalid @enderror" id="Nama Kategori" aria-describedby="Tulis Nama Kategori Blog">
                                <br>
                                @error('nama_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
