@extends('layouts.app')

@section('content')
    <!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container">
    <div class="search-bar mt-5 p-3 p-lg-1 pl-lg-4">
              <form action="#">
                <div class="row">
                  <div class="col-lg-4 d-flex align-items-center form-group">
                    <input type="text" name="search" placeholder="What are you searching for?" class="form-control border-0 shadow-0">
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group">
                    <div class="input-label-absolute input-label-absolute-right w-100">
                      <label for="department" class="label-absolute"><i class="fa fa-crosshairs"></i><span class="sr-only">City</span></label>
                      <input type="text" name="department" placeholder="Business Studies" id="department" class="form-control border-0 shadow-0">
                    </div>
                  </div>
                  <div class="col-lg-3 d-flex align-items-center form-group no-divider">
                    <div class="dropdown bootstrap-select"><select title="Categories" data-style="btn-form-control" class="selectpicker" tabindex="-98"><option class="bs-title-option" value=""></option>
                      <option value="small">Journals</option>
                      <option value="medium">Religion</option>
                      <option value="large">Research</option>
                      <option value="x-large">Law</option>
                    </select><button type="button" class="btn dropdown-toggle btn-form-control bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Categories"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Categories</div></div> </div></button><div class="dropdown-menu" style="max-height: 281.891px; overflow: hidden; min-height: 156px;"><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 265.891px; overflow-y: auto; min-height: 140px;"><ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;"><li><a role="option" class="dropdown-item" id="bs-select-1-0" tabindex="0" aria-setsize="4" aria-posinset="1"><span class="text">Business Administration</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0" aria-setsize="4" aria-posinset="2"><span class="text">Management Science</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0" aria-setsize="4" aria-posinset="3"><span class="text">Physical Science</span></a></li><li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">Biological Science</span></a></li></ul></div></div></div>
                  </div>
                  <div class="col-lg-2">
                    <button type="submit" class="btn btn-primary btn-block rounded-xl h-100">Search </button>
                  </div>
                </div>
              </form>
            </div>
  </div>

  <section class="py-6">
    <div class="container">
        <div class="row mb-5">
            <div class="col md-12">
                <p class="subtitle text-secondary">Business Studies</p>
                </br>
                <span class="badge badge-pill">Business Administration</span>
                <span class="badge badge-pill">Management Science</span>
            </div>
        </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <p class="subtitle text-secondary">Browse </p>
                <div class="col-md-4 d-md-flex"></div>
            </div>
        </div>

        <div class="row">
           <div class="col-md-12">
                 <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51d2e%2B67u1L.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Design Secret
                                </h5>
                                <p class="small text-muted" style="margin-bottom: 2rem">Cindy Elsharouni</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://wp-media.patheos.com/blogs/sites/572/2019/01/Revised-Cover-313-x-500.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   The Bible Tells Me So
                                </h5>
                                <p class="small text-muted" style="margin-bottom: 2rem">Dave Armstrong</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://haroldjfischeldotcom.files.wordpress.com/2016/02/bookcoverimaged-1600-width-313x500.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Anthony
                                </h5>
                                <p class="small text-muted" style="margin-bottom: 2rem">Harold J. Fischel</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://haroldjfischeldotcom.files.wordpress.com/2016/02/bookcoverimaged-1600-width-313x500.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Anthony
                                </h5>
                                <p class="small text-muted" style="margin-bottom: 2rem">Harold J. Fischel</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://ilona-andrews.com/wp-content/uploads/2019/06/SOB600-313x500.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Sweep of the blade
                                </h5>
                                <p class="small text-muted">Ilona Andrews</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://www.clarityunlimited.com/wp-content/uploads/2017/04/TURN7-COVER-FINAL-313x500-1.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Turn
                                </h5>
                                <p class="small text-muted">Clara Chorley</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://i2.wp.com/www.janicebroyles.com/wp-content/uploads/2019/10/TheSecretHeir-resized-313x500.png?resize=313%2C500" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   The Secret Heir
                                </h5>
                                <p class="small text-muted" >Janice Bronyles</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://www.undergroundbookreviews.org/wp-content/uploads/2018/10/ABR-331-529-313x500.jpg" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   The Book of revelation
                                </h5>
                                <p class="small text-muted" style="">A. C Burch</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://lh3.googleusercontent.com/proxy/q--Sj8Jo8VCkCzwXrToAHI2Xcd3zhtoiOdMriJmfMJwKSbFmhjxId4huaY0kcjOJSdLsXA2BXO3eFMndADv9aA-AeXGvJ26ifbDXZixXw1lDJM-_9l-Qr0z24e6Ing" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Z-Minus
                                </h5>
                                <p class="small text-muted" style="">Perrin Briar</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row shadow hover-animate hover-shadow">
                            <div class="col-md-6">
                                <img src="https://i2.wp.com/www.janicebroyles.com/wp-content/uploads/2019/10/TheSecretHeir-resized-313x500.png?resize=313%2C500" class="img-fluid">
                            </div>
                            <div class="col-md-6 book-title">
                                <h5>
                                   Who told You?
                                </h5>
                                <p class="small text-muted" style="">Guy Right</p>
                                {{-- <div class="ico"> --}}
                                    <a type="button" class="btn-floating btn-small">
                                        <i class="fa fa-download fa-2x"></i>
                                    </a>
                                {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
           </div>

        
        </div>

       
    </div>
  </section>
</main>
    
@endsection