@extends('admin.app')

@section('content')
    <style>

    .judul {
        text-align: center;
        margin-bottom: 20px;
        /* Menambahkan jarak bawah */
    }
    </style>

    <div class="judul flex">
        <div class="">
            <h1>Category Content</h1>
        </div>
    </div>
    <div class="table-container">
        <td colspan="5">
            {{-- contoh routing pertama --}}
            <a href="{{ url('category/create') }}" class="btn btn-primary mb-3" > Tambah + </a>

            {{-- contoh routing kedua --}}
            {{-- <a href="{{ route('category.create') }}" class="btn btn-primary mb-3" > Tambah + </a> --}}
        </td>
        <table class="table table-bordered" border="1">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ( $data as $row)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->nama_category }}</td>
                    <td>
                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('category.destroy', $row->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endsection
