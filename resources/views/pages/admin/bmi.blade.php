@extends('layouts.admin')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Buku /</span> Tambah Buku</h4>

        <!-- Form controls -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">

                    <h5 class="card-header">Perhitungan Bmi</h5>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" id="name" type="text">
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="height">Height <em>in cm</em> </label>
                                    <input class="form-control" id="height" type="number">
                                </div>
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="weight">Weight <em>in kg</em> </label>
                                    <input class="form-control" id="weight" type="number">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-flex justify-content-between" for="hobby">
                                    <div>Hobbies</div>
                                    <div><em class="justify-content-end">jika lebih dari satu pisahkan dengan koma (,)</em>
                                    </div>
                                </label>
                                <input class="form-control" id="hobbies" type="text">
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label class="form-label" for="yob">Year of Birth</label>
                                    {{-- <input class="form-control" id="yob" type="number" min="1950"> --}}
                                    <select class="form-control" id="yob" name="yob"></select>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <button class="btn btn-success" id="checkBmi" type="button">Submit</button>
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
                                    <label class="col-form-label" for="nameResult">Name :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="nameResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="heightResult">Height :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="heightResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="weightResult">Weight :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="weightResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="statusResult">Status :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="statusResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="hobbyResult">Hobby :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="hobbyResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="ageResult">Age :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="ageResult" type="text" readonly required>
                                </div>
                            </div>
                            <div class="row align-items-center justify-content-end my-2">
                                <div class="col-auto">
                                    <label class="col-form-label" for="freeConsultationResult">Free Consultation :</label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-control" id="freeConsultationResult" type="text" readonly
                                        required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
