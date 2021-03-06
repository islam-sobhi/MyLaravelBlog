@include('include.header')

		<!-- PAGE HEADER -->
    <div class="page-header">

			<div class="page-header-bg"  style="background-image: url('/img/head.jpg'); background-repeat: no-repeat;
       background-attachment: fixed;  background-position: center top;"  alt=""  data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$cat->name}}</h1>
						<p class="lead">
                  {{$cat->created_at}}
            </p>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->

	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
            @if($cat->posts->count()>0)
          @foreach ($cat->posts as $post)

          <!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('categories.show',['id'=>$post->category->id])}}">{{$post->category->name}}</a>

							</div>
							<h3 class="post-title"><a href="blog-post.html"></a></h3>
							<ul class="post-meta">
								<li><a href="{{route('post.show',['slug'=>$post->slug])}}">{{$post->title}}</a></li>
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
							<p class="mb-0" >{{$post->content}}</p>
						</div>
					</div>

					<!-- /post -->
@endforeach

@else
<div class="alert alert-danger  text-center" role="alert">
   <a href="#" class="alert-link text-center"></a>Not Found Post By Category Name<strong style="color:green"> {{$cat->name}} </strong>
</div>
@endif

</div>



				<div class="col-md-4">
					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- FOOTER -->

@include('include.footer')
<!-- end footer -->
