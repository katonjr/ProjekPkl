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
            <button type="button" class="btn btn-primary mb-3"> Tambah + </button>
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

                @foreach ( $data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->image }}</td>
                    <td>{{ $row->tempat }}</td>
                    <td>{{ $row->deskripsi }}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
