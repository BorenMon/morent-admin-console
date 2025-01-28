@extends('layouts.horizontal', ['title' => 'Contact List', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    @include('layouts.shared/page-title', ['sub_title' => 'Base UI', 'page_title' => 'Contact List'])

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control"
                            placeholder="Search">
                        <span class="input-group-append">
                            <button type="button" class="btn btn-primary rounded-start-0"><i
                                    class="ri-search-line fs-16"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End row -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-2.jpg" alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Jonathan Smith</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit"> <i class="ri-pencil-fill"></i> </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete"> <i class="ri-close-fill"></i> </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-3.jpg" alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Jerry Johnson</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>

                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->
    </div> <!-- End row -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-6.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">James Haley</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-5.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Mark Smith</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->
    </div> <!-- End row -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-7.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Fred Otero</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-8.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">John McBryde</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->
    </div> <!-- End row -->

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-9.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Danny Berry</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="d-flex">
                            <a class="me-3" href="#">
                                <img class="avatar-md rounded-circle bx-s" src="/images/users/avatar-10.jpg"
                                    alt="">
                            </a>
                            <div class="info">
                                <h5 class="fs-18 my-1">Charles Burns</h5>
                                <p class="text-muted fs-15">Graphics Designer</p>
                            </div>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-success btn-sm me-1 tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Edit">
                                <i class="ri-pencil-fill"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-sm tooltips" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-title="Delete">
                                <i class="ri-close-fill"></i>
                            </a>
                        </div>
                    </div>

                    <hr>
                    <ul class="social-list list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title=""
                                data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href=""
                                data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div> <!-- end col -->
    </div> <!-- End row -->

    <div class="row">
        <div class="col-sm-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a href="#" aria-label="Previous" class="page-link"> <i
                                class="ri-arrow-left-s-line lh-sm"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="active page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="disabled page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" aria-label="Next" class="page-link"> <i
                                class="ri-arrow-right-s-line lh-sm"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div> <!-- container -->
@endsection
