@extends('admin.app')

@section('content')

<body>
    <div class="judul flex">
        <div class="row justify-content-center">
            <div>
                <h1 class="row justify-content-center mb-4">Add Blog Content</h1>
            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('recentblog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">

                                <div class="mb-3">
                                    <label for="ImageUpload" class="form-label">Image Upload</label>
                                    <input type="file" name="image" class="form-control @error('image')
                                    is-invalid @enderror" id="image" aria-describedby="Isi Image">
                                </div>
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="Tanggal" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control @error('tanggal')
                                    is-invalid @enderror"
                                    id="tanggal" aria-describedby="Isi Tanggal">
                                </div>
                                @error('tanggal')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="Kategori" class="form-label">Kategori</label>
                                    <select  name="category_id" class="form-control @error('category_id')
                                    is-invalid @enderror" id="kategori" aria-describedby="Pilih Kategori">
                                        <option value="">Pilih Kategori</option>

                                        @foreach ( $datakategori as $kategori )
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_category}} </option>

                                        @endforeach
                                    </select>
                                </div>
                                @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="Judul Blog" class="form-label">Judul Blog</label>
                                    <input type="text" name="judul" class="form-control  @error('judul')
                                    is-invalid @enderror" id="judulblog" aria-describedby="Tulis Judul Blog Anda">
                                </div>
                                @error('judul')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="Deskripsi" class="form-label">Deskripsi Tempat</label>
                                    <textarea name="deskripsi" class="form-control  @error('deskripsi')
                                    is-invalid @enderror" id="deskripsi" aria-describedby="Tulis Deskripsi Isi Konten Blog Anda"></textarea>
                                </div>
                                @error('deskripsi')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror


                                <div class="mb-3">
                                    <label for="Deskripsi" class="form-label">Nama Penulis</label>
                                    <input type="text" class="form-control @error('user_id') is-invalid @enderror"  value="{{ Auth::user()->name }}" readonly>

                                    <input type="hidden" name="user_id" class="form-control" id="user_id"
                                        aria-describedby="Tulis Nama Anda" value="{{ Auth::user()->id }}" readonly>
                                </div>

                                @error('user_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror



                                {{-- <label for="Nama Category" class="form-label">Nama Blog</label>
                                <input type="text" name="" class="form-control @error('nama_category')
                                is-invalid @enderror" id="Nama Kategori" aria-describedby="Tulis Nama Kategori Blog">
                                <br>

                                @error('nama_category')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror --}}

                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection
