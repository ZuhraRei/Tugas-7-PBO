@extends('layout/main')

@section('title', 'Data Mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Data Mahasiswa UNESA</h1>

            <a href="/Mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $tbl_mhs as $tbl_mhs )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $tbl_mhs->NIM }}</td>
                        <td>{{ $tbl_mhs->Nama }}</td>
                        <td>{{ $tbl_mhs->Jeniskelamin }}</td>
                        <td>{{ $tbl_mhs->Alamat }}</td>
                        <td>{{ $tbl_mhs->Kota }}</td>
                        <td>{{ $tbl_mhs->Email }}</td>
                        <td>
                        <input type="file" name="Foto" required="" multiple >
                        </td>
                        <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
  @endsection
