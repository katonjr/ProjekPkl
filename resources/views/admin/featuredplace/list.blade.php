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
    <div>
        <h1>Featured Place Content</h1>
    </div>
</div>
<div class="table-container">
    <td colspan="5">
        <a href="{{url('admin/featured/addfeaturedplace')}}" class="btn btn-primary mb-3"> Tambah + </a>
    </td>
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tempat</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $data as $key => $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img src="{{ asset('/uploads/'.$row->image) }}" width="100px" height="100px"></td>
                <td>{{ $row->tempat }}</td>
                <td>{{ $row->deskripsi }}</td>
                <td>
                    <a href="{{ route('tampildatafeatured', $row->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.destroy', $row->id) }}" method="POST" class="d-inline">
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
