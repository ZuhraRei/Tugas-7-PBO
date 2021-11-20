@extends('layout/main')

@section('title', 'Form Tambah Data')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-2">Form Tambah Data Mahasiswa UNESA</h1>

            <form style="background-color:PowderBlue">
                <fieldset>
                    <div class="form-group">
                        <b><label>NIM</label></b>
                        <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" required="">
                    </div>

                    <div class="form-group">
                        <b><label>Nama Mahasiswa</label></b>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required="">
                    </div>

                    <div><b><label>Jenis Kelamin</label></b></div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                        </label>
                        </div>

                    <div class="form-group">
                        <b><label>Alamat</label></b>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" required=""></textarea> 
                    </div>

                    <div class="form-group">
                        <b><label>Kota</label></b>
                        <input type="text" name="kota" class="form-control" placeholder="Masukan Kota" required="">
                    </div>

                    <div class="mb-3">
                        <b><label for="exampleFormControlInput1" class="form-label">Email</label></b>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="form-group">
                        <b><label>Foto</label></b>
                        <input type="file" name="tfoto" required="" multiple >
                        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> 
                    </div>

                    <div class="d-grid gap-2 d-md-block"><center>
                        <button type="submit" class="btn btn-success" name="bsim" >Simpan</button>
                        <button type="reset" class="btn btn-danger" name="bres">Hapus</button></center>
                    </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
  </div>
@endsection
