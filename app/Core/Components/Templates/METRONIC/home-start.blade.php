  <!-- home start -->
  @if ($visible)
      <section class="bg-home " style="@if (isset($background_image) && $background_image) background: url({{ $background_image }});background-size:cover; @else  {{ $background_color }} @endif"
          id="home">
          <div class="home-center">
              <div class="home-desc-center">
                  <div class="container-fluid">
                      <div class="row align-items-center">
                          <div class="col-lg-6">
                              <div class="home-title mo-mb-20">
                                  <h1 class="mb-4 text-white">
                                      {{ $title }}
                                  </h1>
                                  <p class="text-white-50 home-desc mb-5">
                                      {{ $details }}
                                  </p>
                                  <div class="subscribe">
                                      <form>
                                          <div class="row">
                                              <div class="col-md-8">
                                                  <div class="mb-2">
                                                      <input type="text" class="form-control" placeholder="Enter your e-mail address" />
                                                  </div>
                                              </div>
                                              <div class="col-md-4">
                                                  <button type="submit" class="btn btn-primary">
                                                      Subscribe Us
                                                  </button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                              <div class="home-img position-relative">
                                  <img src="@if (isset($sub_images) && isset($sub_images[0])) {{ $sub_images[0] }}  @else ./theme/images/home-img.png @endif" alt=""
                                      class="home-first-img" />
                                  <img src="@if (isset($sub_images) && isset($sub_images[1])) {{ $sub_images[1] }}  @else ./theme/images/home-img.png @endif" alt=""
                                      class="home-second-img mx-auto d-block" />
                                  <img src="@if (isset($sub_images) && isset($sub_images[2])) {{ $sub_images[2] }}  @else ./theme/images/home-img.png @endif" alt=""
                                      class="home-third-img" />
                              </div>
                          </div>
                      </div>
                      <!-- end row -->
                  </div>
                  <!-- end container-fluid -->
              </div>
          </div>
      </section>
  @endif
