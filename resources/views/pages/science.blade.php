@extends('layouts.app')

@section('content')
<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
            <form>
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-center form-group">
                        <input type="text" name="search" placeholder="What are you searching for?"
                            class="form-control border-0 shadow-0">
                    </div>
                    <div class="col-lg-3 d-flex align-items-center form-group">
                        <div class="input-label-absolute input-label-absolute-right w-100">
                            <label for="department" class="label-absolute"><i class="fa fa-crosshairs"></i><span
                                    class="sr-only">City</span></label>
                            <input type="text" name="department" placeholder="Engineering, Science, and Technology"
                                id="department" class="form-control border-0 shadow-0">
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
                            </select>
                            <button type="button" class="btn dropdown-toggle btn-form-control bs-placeholder"
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
                                    @if (count($departments)>0)
                                    <ul class="dropdown-menu inner show" role="presentation"
                                        style="margin-top: 0px; margin-bottom: 0px;">
                                        @foreach ($departments as $department)
                                        <li id="{{$department->id}}" class="dept">
                                            <a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0">
                                                <span class="text">{{$department->dept_name}}</span>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>

                                    @else
                                    <li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span
                                                class="text">None</span></a></li>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button id="search_data" type="button" class="btn btn-primary btn-block rounded-xl h-100"
                            value="{{ request()->input('query') }}">Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section class="py-6">
        <div class="container">
            <div class="row mb-5">
                <div class="col md-12">
                    <p class="subtitle text-secondary">Engineering, Science, and Technology</p>
                    </br>
                    <span class="badge badge-pill">Computer Science</span>
                    <span class="badge badge-pill">ICT</span>
                    <span class="badge badge-pill">Physical Science</span>
                    <span class="badge badge-pill">Biologicals Science</span>
                </div>
            </div>

            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8">
                        <p class="subtitle text-secondary">Browse </p>
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
                                                {{$recent_post->title}}
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
<style scoped>
    form {
        display: block;
        margin-top: 0em;
        margin-block-end: 0em !important;
    }

    .filter-option-inner-inner {
        /* margin-top: -1rem !important; */
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var dept_name;
        var  dept_id ;
         $('.dept').on('click', function () {
             dept_name =$(this).text();
            dept_id =$(this).attr("id");
             console.log(dept_id);
             $(".filter-option-inner-inner").html(" ");
             $(".filter-option-inner-inner").text(dept_name);
            
         });
         $('#search_data').on('click', function () {
            //var dept_name =$(this).text();
           // console.log(dept_name);
           
            window.location = "/search-results/"+dept_id+"/"+dept_name.replace(" ","-");
         });

        

    });
</script>