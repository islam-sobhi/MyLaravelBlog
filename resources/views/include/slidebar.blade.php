 <div class="container">
<div id="myCarousel" class="carousel slide" data.ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/4.jpg">
                <div class="carousel-caption hidden-xs">
                    <h1 class="capt"></h1>


                </div>
            </div>

            <div class="item">
                <img src="images/img5.jpg" alt="iamage1">
                <div class="carousel-caption hidden-xs">
                    <h1 class="capt"></h1>


                </div>
            </div>

            <div class="item">
             	<!-- post -->
  <div class="col-md-4">
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show',['slug'=>$posts->slug])}}">
								<img src="{{$posts->featured}}" alt=""class="img-responsive">
						</a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('categories.show',['id'=>$posts->category->id])}}">{{$posts->category->name}}</a>

							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html"></a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$posts->title}}</a></li>
								<li>{{$posts->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
	</div>
					<!-- /post -->

                </div>
            </div>

            <div class="item">
                <img src="images/1.jpg">
                <div class="carousel-caption hidden-xs">
                    <h1 class="capt"></h1>
                </div>
            </div>

            <div class="item">
                <img src="images/6.JPG">
                <div class="carousel-caption hidden-xs">
                    <h1 class="capt"></h1>
                </div>
            </div>
            <div class="item">
                <img src="images/2.jpg">
                <div class="carousel-caption hidden-xs">
                    <h1 class="capt"></h1>

                </div>
            </div>
        </div>
        </div>
     
</div>
<!-- Carousel nav -->
     