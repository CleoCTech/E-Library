@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">


    <section class="py-6">
        <h2>Profile</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">

                    <!-- Heading -->
                    <h3 class="mb-10">My Account</h3>

                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">

                    <!-- Nav -->
                    <nav class="mb-10 mb-md-0">
                        <div class="list-group list-group-sm list-group-strong list-group-flush-x"
                            style="margin-left: -100px;">
                            <a class="list-group-item list-group-item-action dropright-toggle "
                                href="{{ url('/user-notification') }}">
                                Notification
                            </a>
                            <a class="list-group-item list-group-item-action dropright-toggle "
                                href="{{ url('/recent-activities') }}">
                                Recent Activities
                            </a>
                            <a class="list-group-item list-group-item-action dropright-toggle active"
                                href="{{ url('/profile') }}">
                                Personal Info
                            </a>
                        </div>
                    </nav>


                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">

                    <!-- Products -->
                    <div class="row">

                        <!-- Item -->
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                        data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> Quick Read
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="product-6.jpg" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-body" href="product.html">Cotton floral print Dress</a> <br>
                                    <span class="text-muted">Evan Emman</span>
                                </div>

                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>

                                    <!-- Badge -->
                                    <span class="badge badge-dark card-badge card-badge-left text-uppercase">
                                        New
                                    </span>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                        data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> Quick Read
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="product-10.jpg" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-body" href="product.html">Suede cross body Bag</a> <br>
                                    <span class="text-muted">Huab Jiuat</span>
                                </div>

                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                        data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> Quick Read
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="product-32.jpg" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-reset" href="product.html">Cotton leaf print Shirt</a><br>
                                    <span class="text-muted">Jiua Ouyag</span>
                                </div>

                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                        data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> Quick Read
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="product-7.jpg" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-body" href="product.html">Leather Sneakers</a> <br>
                                    <span class="text-muted">Edhskk iausy</span>
                                </div>

                            </div>
                        </div>

                        <!-- Item -->
                        <div class="col-6 col-md-4">
                            <div class="card mb-7">

                                <!-- Image -->
                                <div class="card-img">

                                    <!-- Action -->
                                    <button
                                        class="btn btn-xs btn-circle btn-white-primary card-action card-action-right">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>

                                    <!-- Button -->
                                    <button class="btn btn-xs btn-block btn-dark card-btn" data-toggle="modal"
                                        data-target="#modalProduct">
                                        <i class="fe fe-eye mr-2 mb-1"></i> Quick Read
                                    </button>

                                    <!-- Image -->
                                    <img class="card-img-top" src="product-11.jpg" alt="...">

                                </div>

                                <!-- Body -->
                                <div class="card-body font-weight-bold text-center">
                                    <a class="text-body" href="product.html">Another fine dress</a> <br>
                                    <span class="text-muted">Ytau Tjahn</span>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->


                </div>
            </div>
        </div>
    </section>
</main>

@endsection
