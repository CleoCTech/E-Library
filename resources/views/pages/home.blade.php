@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        {{-- <div class="input-group mb-3">
        <div class="input-group-prepend">
            <button type="button" class="btn btn-outline-secondary">Search</button>
            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Department</a>
            <a class="dropdown-item" href="#">Category</a>
            <a class="dropdown-item" href="#">Author</a>
            <div role="separator" class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Book Id</a>
            </div>
        </div>
        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" placeholder="Search any book...">
    </div> --}}

        <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form >
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center form-group">
                        <input type="text" name="search" placeholder="What are you searching for?"
                            class="form-control border-0 shadow-0">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center form-group">
                        <div class="input-label-absolute input-label-absolute-right w-100">
                            <label for="department" class="label-absolute"><i class="fa fa-crosshairs"></i><span
                                    class="sr-only">City</span></label>
                            <input type="text" name="department" placeholder="Department" id="department"
                                class="form-control border-0 shadow-0">
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                        <div class="dropdown bootstrap-select"><select title="Categories" data-style="btn-form-control"
                                class="selectpicker" tabindex="-98">
                                <option class="bs-title-option" value=""></option>
                                <option value="small">Journals</option>
                                <option value="medium">Religion</option>
                                <option value="large">Research</option>
                                <option value="x-large">Law</option>
                            </select><button type="button" class="btn dropdown-toggle btn-form-control bs-placeholder"
                                data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox"
                                aria-expanded="false" title="Categories">
                                <div class="filter-option">
                                    <div class="filter-option-inner">
                                        <div class="filter-option-inner-inner">Categories</div>
                                    </div>
                                </div>
                            </button>
                            <div class="dropdown-menu"
                                style="max-height: 281.891px; overflow: hidden; min-height: 156px;">
                                <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"
                                    style="max-height: 265.891px; overflow-y: auto; min-height: 140px;">
                                    <ul class="dropdown-menu inner show" role="presentation"
                                        style="margin-top: 0px; margin-bottom: 0px;">
                                        <li><a role="option" class="dropdown-item" id="bs-select-1-0" tabindex="0"
                                                aria-setsize="4" aria-posinset="1"><span
                                                    class="text">Journals</span></a></li>
                                        <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"
                                                aria-setsize="4" aria-posinset="2"><span
                                                    class="text">Religion</span></a></li>
                                        <li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"
                                                aria-setsize="4" aria-posinset="3"><span
                                                    class="text">Research</span></a></li>
                                        <li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span
                                                    class="text">Law</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        {{-- <a href="{{ url('/arts') }}">
                        <button type="submit" class="btn btn-primary btn-block rounded-xl h-100">Search</button>
                        </a> --}}
                        <button type="submit" class="btn btn-primary btn-block rounded-xl h-100">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section class="py-6">
        <div class="container">
            <div class="row mb-5">
                <div class="col md-8">
                    <p class="subtitle text-secondary">Browse By Department</p>
                    <div class="col-md-4 d-md-flex"></div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-offset-1 mb-4 hover-animate bshadow">
                    <a href="{{ url('/agriculture') }}">
                        <div class="card shadow border-0 text-muted text-center p-3 h-100">
                            <blockquote class="blockquote mb-0">
                                <p>Agriculture and Environmental Studies</p>
                                <footer class="blockquote-footer">
                                    <small>
                                        <cite title="Source Title" class="btn-link">Read More</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                </div>
                <div class="col mb-4 hover-animate bshadow">
                    <a href="{{ url('/education') }}">
                        <div class="card shadow border-0 text-muted text-center p-3 h-100">
                            <blockquote class="blockquote mb-0">
                                <p>Education and Resources Development</p>
                                <footer class="blockquote-footer">
                                    <small>
                                        <cite title="Source Title" class="btn-link">Read More</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                </div>
                <div class="col mb-4 hover-animate bshadow">
                    <a href="{{ url('/business') }}">
                        <div class="card shadow border-0 text-muted text-center p-3 h-100">
                            <blockquote class="blockquote mb-0">
                                <p>Business Studies</p>
                                <footer class="blockquote-footer">
                                    <small>
                                        <cite title="Source Title" class="btn-link">Read More</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                </div>
                <div class="col mb-4 hover-animate bshadow">
                    <a href="{{ url('/arts') }}">
                        <div class="card shadow border-0 text-muted text-center p-3 h-100">
                            <blockquote class="blockquote mb-0">
                                <p>Arts and Humanities</p>
                                <footer class="blockquote-footer">
                                    <small>
                                        <cite title="Source Title" class="btn-link">Read More</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                </div>
                <div class="col mb-4 hover-animate bshadow">
                    <a href="{{ url('/science') }}">
                        <div class="card shadow border-0 text-muted text-center p-3 h-100">
                            <blockquote class="blockquote mb-0">
                                <p>Engineering, Science, and Technology</p>
                                <footer class="blockquote-footer">
                                    <small>
                                        <cite title="Source Title" class="btn-link">Read More</cite>
                                    </small>
                                </footer>
                            </blockquote>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row" style="margin: 2rem 0rem">
                <div class="col-md-6">
                    <div class="promo-box mb-sm--20">
                        <a href="#"><img
                                src="https://demo.hasthemes.com/lazio-preview/lazio/assets/img/banner/home7-banner2-1.jpg"
                                alt="promo"></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box mb-sm--20">
                        <a href="#"><img
                                src="https://demo.hasthemes.com/lazio-preview/lazio/assets/img/banner/home7-banner2-2.jpg"
                                alt="promo"></a>
                    </div>
                </div>
            </div>
        </div>

        </br>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8">
                    <p class="subtitle text-secondary">Popular </p>
                    <div class="col-md-4 d-md-flex"></div>
                </div>
            </div>




            @if (count($recent_posts)>0)
            <div class="row">
                <div class="col-md-12">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach ($recent_posts as $recent_post)
                            <div class="swiper-slide">
                                <div class="row shadow hover-animate hover-shadow">
                                    <div class="col-md-6">
                                        {{-- <img src="https://images-na.ssl-images-amazon.com/images/I/51d2e%2B67u1L.jpg" class="img-fluid"> --}}
                                        <img style="" src="/storage/cover_images/{{$recent_post->cover_image}}"
                                            class="img-fluid">
                                    </div>
                                    <div class="col-md-6 book-title">
                                        <h5>
                                            {{$recent_post->tittle}}
                                        </h5>
                                        <p class="small text-muted" style="margin-bottom: 2rem">
                                            {{ $recent_post->author }}</p>
                                        {{-- <div class="ico"> --}}
                                        <a type="button" class="btn-floating btn-small"
                                            onclick="window.location.href = '/storage/books/{{$recent_post->book_file}}';">
                                            <i class="fa fa-download fa-2x"></i>
                                        </a>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>


            </div>
            @else
            <p>No resources for now</p>
            @endif

        </div>
    </section>
</main>

@endsection