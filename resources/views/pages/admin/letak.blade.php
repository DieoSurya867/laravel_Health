@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Buku /</span> Tambah Buku</h4>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Pendataaan Ruangan Buku</h5>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label class="form-label" for="judul">Nama Judul</label>
                                <input class="form-control" id="judul" type="text" />
                                <div class="mb-3">
                                    <label class="form-label" for="jumlah">Halaman</label>
                                    <input class="form-control" id="jumlah" type="text" />
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="terbit">Terbit</label>
                                    <input class="form-control" id="terbit" type="text" />
                                </div>
                                <div class="mt-3 text-center">
                                    <button class="btn btn-success" id="checkBuku" type="button" onclick="hitung()">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Hasil Perhitungan</h5>
                    <div class="card-body">
                        <form action="">
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="judulResult">Nama Judul :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="judulResult" type="text" readonly required />
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="jumlahResult">Halaman :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="jumlahResult" type="text" readonly required />
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="terbitResult">Terbit Tahun :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="terbitResult" type="text" readonly required />
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="ruanganResult">Ruangan :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="ruanganResult" type="text" readonly required />
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="rakResult">Lemari :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="rakResult" type="text" readonly required />
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="rakResult">Keterangan :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="rareResult" type="text" readonly required />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
