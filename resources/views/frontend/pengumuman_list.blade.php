@extends('layouts.front')
@section('content')
    <!-- =======================
                                                                                                                                                            Page Banner START -->
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bg-light p-4 text-center rounded-3">
                        <h1 class="m-0">List Pengumuman</h1>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
                                                                                                                                                            Page Banner END -->

    <!-- =======================
                                                                                                                                                            Page content START -->
    <section class="pt-0">
        <div class="container">

            <div class="row mt-3">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Course Grid START -->
                    <div class="row g-4">
                        @foreach ($pengumumans as $data)
                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="{{ asset('storage/' . $data->gambar) }}" class="card-img-top"
                                        alt="course image">
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->

                                        <!-- Title -->
                                        <h5 class="card-title"><a
                                                href="{{ url('pengumuman/detail', $data->id) }}">{{ $data->judul }}</a>
                                        </h5>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i
                                                    class="far fa-clock text-danger me-2"></i>{{ $data->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        @endforeach
                    </div>
                    <!-- Course Grid END -->

                    <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                {{ $pengumumans->links() }}
                                {{-- <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i
                                            class="fas fa-angle-double-left"></i></a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                <li class="page-item mb-0"><a class="page-link" href="#"><i
                                            class="fas fa-angle-double-right"></i></a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
                                                                                                                                                            Page content END -->
@endsection
