@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Hobi</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Hobi</h5>
                <div class="table-responsive text-nowrap">
                    <a href="{{ url('admin/hobi/create') }}" class="ms-4 mb-4 btn btn-sm  btn-outline-primary">Tambah Data
                        Hobi</a>
                    <table class="table table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Hobi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach ($hobi as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->bmi->namaOrang }}</td>
                                    <td>{{ $item['hobi'] }}
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="{{ URL::to('admin/hobi/' . $item->id . '/edit') }}"><i
                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="{{ route('deletehobi', $item->id) }}"><i
                                                        class="bx bx-trash me-1"></i>
                                                    Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{-- {{ $data2->links() }} --}}

                </div>
            </div>
            <!--/ Basic Bootstrap Table -->
            <hr class="my-5" />
            <!--/ Responsive Table -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
