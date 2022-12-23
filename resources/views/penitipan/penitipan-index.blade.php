@extends('parents')
@section('content')
    <div class="container p-5 bg-white">
        <div class="row">
            <h3>Data Penitipan</h3>
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Pemilik</th>
                            <th scope="col">Alamat Pemilik</th>
                            <th scope="col">No Hp</th>
                            <th scope="col">Nama Hewan</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tanggal Penitipan</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penitipan as $item)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                                <td> {{ $item->nama_pemilik }}</td>
                                <td> {{ $item->alamat_pemilik }}</td>
                                <td> {{ $item->no_hp }}</td>
                                <td> {{ $item->nama_hewan }}</td>
                                <td> {{ $item->jenis_kelamin }}</td>
                                <td> {{ $item->tanggal_penitipan }}</td>
                                <td> {{ $item->tanggal_kembali }}</td>
                                <td>
                                    <a href="" class="btn btn-info">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
