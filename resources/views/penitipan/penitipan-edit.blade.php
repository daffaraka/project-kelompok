@extends('parents')
@section('content')
    <div class="container p-5 bg-white">
        <h3 class="text-center">Edit Data Penitipan</h3>
        <form action="{{ route('penitipan.update',$penitipan->id) }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">
                    <h6>Nama Pemilik </h6>
                </label>
                <input type="text" name="nama_pemilik" class="form-control" value="{{$penitipan->nama_pemilik}}">
            </div>
            <div class="mb-3">
                <label for="">
                    <h6>Alamat Pemilik </h6>
                </label>
                <input type="text" name="alamat_pemilik" class="form-control" value="{{$penitipan->alamat_pemilik}}">
            </div>
            <div class="mb-3">
                <label for="">
                    <h6>No Hp </h6>
                </label>
                <input type="number" name="no_hp" class="form-control" value="{{$penitipan->no_hp}}">
            </div>
            <div class="mb-3">
                <label for="">
                    <h6>Nama Hewan </h6>
                </label>
                <input type="text" name="nama_hewan" class="form-control" value="{{$penitipan->nama_hewan}}">
            </div>
            <div class="mb-3">
                <label for="">
                    <h6>Jenis Kelamin </h6>
                </label>
                <select name="jenis_kelamin" id="" class="form-control">
                    <option value="jantan">Jantan</option>
                    <option value="betina">Betina</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">
                    <h6>Tanggal Penitipan </h6>
                </label>
                <input type="date" name="tanggal_penitipan" class="form-control" value="{{$penitipan->tanggal_penitipan}}">
            </div>

            <div class="mb-3">
                <label for=""> <h6>Tanggal Kembali  </h6>  </label>
                <input type="date" name="tanggal_kembali" class="form-control" value="{{$penitipan->tanggal_kembali}}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
