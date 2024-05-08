@extends('admin.app')

@section('content')
<style>
    .table-container {
        overflow-x: auto;
    }

    .table {
        width: 100%;
        margin: 0 auto;
        border-collapse: collapse;
    }

    th,
    td {
        text-align: center;
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    @media screen and (max-width: 600px) {
        table {
            border: 0;
        }

        table thead {
            display: none;
        }

        table tr {
            display: block;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        table td {
            display: block;
            text-align: left;
        }

        table td:last-child {
            text-align: center;
        }
    }

    .judul {
        text-align: center;
        margin-bottom: 20px;
        /* Menambahkan jarak bawah */
    }

    .flex {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
</head>

<body>
    <div class="judul flex">
        <div>
            <h1>Featured Place Content</h1>
        </div>
    </div>
    <div class="table-container">
        <td colspan="5">
            <a href="addfeaturedplace" class="btn btn-primary mb-3" > Tambah + </a>
        </td>
        <table class="table">
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
                    <th scope="row">{{ $key + 1 }}</th>
                    <td><img src="{{ asset('/uploads/'.$row->image) }}" alt=""></td>
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
