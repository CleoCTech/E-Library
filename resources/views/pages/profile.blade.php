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

                  <!-- Form -->
                  <form>
                    <div class="row">
                      <div class="col-12 col-md-6">

                        <!-- Email -->
                        <div class="form-group">
                          <label for="accountFirstName">
                            First Name *
                          </label>
                          <input class="form-control form-control-sm" id="accountFirstName" type="text" placeholder="First Name *" value="Daniel" required="">
                        </div>

                      </div>
                      <div class="col-12 col-md-6">

                        <!-- Email -->
                        <div class="form-group">
                          <label for="accountLastName">
                            Last Name *
                          </label>
                          <input class="form-control form-control-sm" id="accountLastName" type="text" placeholder="Last Name *" value="Robinson" required="">
                        </div>

                      </div>
                      <div class="col-12">

                        <!-- Email -->
                        <div class="form-group">
                          <label for="accountEmail">
                            Email Address *
                          </label>
                          <input class="form-control form-control-sm" id="accountEmail" type="email" placeholder="Email Address *" value="user@email.com" required="">
                        </div>

                      </div>
                      <div class="col-12 col-md-6">

                        <!-- Password -->
                        <div class="form-group">
                          <label for="accountPassword">
                            Current Password *
                          </label>
                          <input class="form-control form-control-sm" id="accountPassword" type="password" placeholder="Current Password *" required="">
                        </div>

                      </div>
                      <div class="col-12 col-md-6">

                        <!-- Password -->
                        <div class="form-group">
                          <label for="AccountNewPassword">
                            New Password *
                          </label>
                          <input class="form-control form-control-sm" id="AccountNewPassword" type="password" placeholder="New Password *" required="">
                        </div>

                      </div>
                      <div class="col-12 col-lg-6">

                        <!-- Birthday -->
                        <div class="form-group">

                          <!-- Label -->
                          <label>Date of Birth</label>

                          <!-- Inputs -->
                          <div class="form-row">
                            <div class="col-auto">

                              <!-- Date -->
                              <label class="sr-only" for="accountDate">
                                Date
                              </label>
                              <select class="custom-select custom-select-sm" id="accountDate">
                                <option>10</option>
                                <option>11</option>
                                <option selected="">12</option>
                              </select>

                            </div>
                            <div class="col">

                              <!-- Date -->
                              <label class="sr-only" for="accountMonth">
                                Month
                              </label>
                              <select class="custom-select custom-select-sm" id="accountMonth">
                                <option>January</option>
                                <option selected="">February</option>
                                <option>March</option>
                              </select>

                            </div>
                            <div class="col-auto">

                              <!-- Date -->
                              <label class="sr-only" for="accountYear">
                                Year
                              </label>
                              <select class="custom-select custom-select-sm" id="accountYear">
                                <option>1990</option>
                                <option selected="">1991</option>
                                <option>1992</option>
                              </select>

                            </div>
                          </div>

                        </div>

                      </div>
                      <div class="col-12 col-lg-6">

                        <!-- Gender -->
                        <div class="form-group mb-8">
                          <label>Gender</label>
                          <div class="btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-sm btn-outline-border active">
                              <input type="radio" name="gender" checked=""> Male
                            </label>
                            <label class="btn btn-sm btn-outline-border">
                              <input type="radio" name="gender"> Female
                            </label>
                          </div>
                        </div>

                      </div>
                      <div class="col-12">

                        <!-- Button -->
                        <button class="btn btn-dark" type="submit">Save Changes</button>

                      </div>
                    </div>
                  </form>

                </div>
              </div>
        </div>
    </section>
</main>

@endsection
