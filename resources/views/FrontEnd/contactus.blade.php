@extends("layouts.master")
@section("content")

<section class="page-title page-title-layout5 bg-img" style="background-image: url(images/6.jpg) !important; background-size: cover; background-position: center center; padding-top: 120px;">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">Our Services</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item">Services</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
<!----contact----->
@include("Frontend.sahidcontactdetails")

<div class="location-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7364064278913!2d85.27883531548191!3d27.694540732660613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb187ae8a53389%3A0x67b10f9eb22bde90!2z4KS44KS54KS_4KSmIOCkruClh-CkruCli-CksOCkv-Ckr-CksiDgpIXgpLjgpY3gpKrgpKTgpL7gpLI!5e0!3m2!1sne!2snp!4v1657448656275!5m2!1sne!2snp" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



@endsection