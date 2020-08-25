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
                        <div class="list-group list-group-sm list-group-strong list-group-flush-x" style="margin-left: -100px;">
                          <a class="list-group-item list-group-item-action dropright-toggle " href="{{ url('/user-notification') }}">
                            Notification
                          </a>
                          <a class="list-group-item list-group-item-action dropright-toggle " href="{{ url('/recent-activities') }}">
                            Recent Activities
                          </a>
                        <a class="list-group-item list-group-item-action dropright-toggle active" href="{{ url('/profile') }}">
                            Personal Info
                          </a>
                        </div>
                      </nav>


                </div>
                <div class="col-12 col-md-9 col-lg-8 offset-lg-1">
                    <a href="#" class="list-group-item list-group-item-action items">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="2 hrs ago" data-original-title="" title="">
                            <div>
                                <span class="avatar bg-primary text-white rounded-circle">AM</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Alex Musa <small class="float-right text-muted">2 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    hapa ni notification, hapo juu ni jina ya mtu ametuma notification, lec ama
                                    librarian?
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action items">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="2 hrs ago" data-original-title="" title="">
                            <div>
                                <span class="avatar bg-warning text-white rounded-circle">CO</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Cleophas Oms <small class="float-right text-muted">2 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Hii ni Notification tu, inaeza we.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action items">
                        <div class="d-flex align-items-center" data-toggle="tooltip" data-placement="right"
                            data-title="2 hrs ago" data-original-title="" title="">
                            <div>
                                <span class="avatar bg-dark text-white rounded-circle">MM</span>
                            </div>
                            <div class="flex-fill ml-3">
                                <div class="h6 text-sm mb-0">Mad Max <small class="float-right text-muted">2 hrs
                                        ago</small></div>
                                <p class="text-sm lh-140 mb-0">
                                    Some quick example text to build on the card title.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
