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
        <h1>Blog Content</h1>
    </div>
</div>
<div class="table-container">
    <td colspan="5">
        <a href="{{route('recentblog.create')}}" class="btn btn-primary mb-3"> Tambah + </a>
    </td>
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Gambar</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kategori</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi Tempat</th>
                <th scope="col">Nama</th>
                <th scope="col">Tags BLog</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $data as $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td><img src="{{ asset('/uploads/'.$row->image) }}" width="100px" height="100px"></td>
                <td>{{ $row->tanggal }}</td>
                <td>{{ $row->namacategory->nama_category ?? "" }}</td>
                <td>{{ $row->judul }}</td>
                <td>{!! Str::limit ($row->deskripsi,20 )!!}</td>
                <td>{{ $row->nama->name }}</td>
                <td>
                    {{-- memecah data --}}
                    @php
                        $namatags     = explode(',',$row->tags_id);
                        $tag          = array();
                        for($x=0;$x < count($namatags);$x++){
                            $tag[]    = "<span class='badge badge-danger'>".\App\Models\RecentBlog::ambilnamatags($namatags[$x])."</span>";
                        }
                        $namatags     = $tag;
                    @endphp
                    {{-- @foreach ($namatags as $key => $tg)
                        {!! $tg !!}
                    @endforeach --}}

                    @foreach ($row->tags as $tag)
                        <p>{!! Str::limit( $tag->tags,10 )!!}</p>
                    @endforeach
                </td>

                <td>
                    <a href="{{ route('recentblog.edit', $row->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('recentblog.destroy', $row->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
