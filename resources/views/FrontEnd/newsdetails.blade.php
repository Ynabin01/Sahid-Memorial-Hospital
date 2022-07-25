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
    
<section class="department-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<aside class="sidebar has-marign-right sticky-top">
	        <div class="widget widget-services">
	          <h5 class="widget__title">Latest News</h5>
	          <div class="widget-content">
	            <ul class="list-unstyled mb-0">
	              <li><a href="news-detail.php" class="active"><span>Covid Vaccination</span><i class="fa fa-arrow-right"></i></a></li>
	              <li><a href="news-detail.php"><span>World Health day</span><i class="fa fa-arrow-right"></i></a></li>
	              <li><a href="news-detail.php"><span>Health Issues of Nepal</span><i class="fa fa-arrow-right"></i></a></li>
	              <li><a href="news-detail.php"><span>Mens Mental Health</span><i class="fa fa-arrow-right"></i></a></li>
	              <li><a href="news-detail.php"><span>Women Health</span><i class="fa fa-arrow-right"></i></a></li>
	            </ul>
	          </div><!-- /.widget-content -->
	        </div><!-- /.widget-services -->
	        <div class="widget widget-help bg-overlay bg-img" style="background: url(images/5.jpg) center center; background-size: cover;">
	          <div class="widget-content">
	            <div class="widget__icon">
	              <i class="icon-call3"></i>
	            </div>
	            <h4 class="widget__title">Emergency Cases</h4>
	            <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
	              or medical enquiry call us.
	            </p>
	            <a href="tel:015218921" class="phone__number">
	              <i class="icon-phone fa fa-phone"></i> <span>+977-01-5218921</span>
	            </a>
	          </div><!-- /.widget-content -->
	        </div>
	      </aside>
			</div>
			<div class="col-lg-8">
				<div class="department-detail">
					<h2>Covid Vaccination</h2>
					<p>The vaccination campaign that started on November 21 will last till December 20. There are provisions to receive vaccination from 4 major locations within Kathmandu and Sahid Memorial Hospital of Kalanki is one of them.</p>
					<p>Jyoti Giri, a volunteer for Nepal Red Cross said, “In this vaccination center, we simply want people to get vaccination without any problem. Sometimes people may forget their cards, but as long as they have a photo of the card in their phone, we vaccinate them, and make them a new card with their previous card number.”</p>
					<img src="images/covid.jpg">
					<strong>Jyoti Giri, a volunteer for Nepal Red Cross. Photo: Prasan Gurung/Nepalnews</strong>
					<img src="images/covid1.jpg">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
