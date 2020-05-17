@include('include/header')


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">

		<section class="carousel slide" data-ride="carousel" id="postsCarousel">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right mb-4">
						<a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
						<a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
					</div>
				</div>
			</div>
			<div class="container p-t-0 m-t-2 carousel-inner">
				<div class="row row-equal carousel-item active m-t-0">
					@foreach ($slide1 as $posts)
					<div class="col-md-4">
						<!-- post -->
						<div class="post post-thumb">
							<a class="post-img" href="{{route('post.show',['slug'=>$posts->slug])}}">
								<img src="{{$posts->featured}}" alt="" class="myimg2" >
						</a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$posts->category->id])}}">{{$posts->category->name}}</a>

								</div>
								<h3 class="post-title title-lg">
									<a href="blog-post.html">{{$posts->title}}</a>
								</h3>
								<ul class="post-meta">
									<li><a href="author.html"></a></li>
									<li>{{$posts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
						<!-- /post -->
					</div>
					@endforeach
				</div>


				<div class="row row-equal carousel-item m-t-0">

					@foreach ($slide2 as $posts)
					<div class="col-md-4">
						<!-- post -->

						<div class="post post-thumb">
							<a class="post-img" href="{{route('post.show',['slug'=>$posts->slug])}}">
								<img src="{{$posts->featured}}" alt="" class="myimg2" >
						</a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$posts->category->id])}}">{{$posts->category->name}}</a>

								</div>
								<h3 class="post-title title-lg">
								</h3>
								<ul class="post-meta">
									<li><a href="author.html"></a></li>
									<li>{{$posts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>

						<!-- /post -->


					</div>
					@endforeach

				</div>
			</div>
		</section>














		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION RECENT POSTS
-->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">Recent posts</h2>
						</div>
					</div>

					<!-- post -->
					<div class="col-md-6">
						<div class="post ">
							<a class="post-img " href="{{route('post.show',['slug'=>$ffposts->slug])}}"><img src="{{$ffposts->featured}}" alt=""class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$ffposts->category->id])}}">{{$ffposts->category->name}}</a>
								</div>

								<h3 class="post-title title-lg"><a href="blog-post.html">{{str_limit($ffposts->content, 46)}} </a></h3>
								<ul class="post-meta">
									<li><a href="{{route('author.show',['id'=>$ffposts->user->id])}}">{{$ffposts->user->name}}</a></li>
									<li>{{$ffposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img " href="{{route('post.show',['slug'=>$sposts->slug])}}"><img src="{{$sposts->featured}}" alt=""  class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$sposts->category->id])}}">{{$sposts->category->name}}</a>
								</div>
								<h3 class="post-title title-lg"><a href="blog-post.html">{{str_limit($sposts->content, 46)}}</a></h3>
								<ul class="post-meta">
									<li><a href="{{route('author.show',['id'=>$sposts->user->id])}}">{{$sposts->user->name}}</a></li>
									<li>{{$sposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->

					<div class="clearfix visible-md visible-lg"></div>

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img"  href="{{route('post.show',['slug'=>$tposts->slug])}}"><img src="{{$tposts->featured}}" alt="" class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$tposts->category->id])}}">{{$tposts->category->name}}</a>
								</div>
								<h3 class="post-title title-lg"><a href="blog-post.html">{{str_limit($tposts->content, 46)}}</a></h3>
								<ul class="post-meta">
									<li><a href="{{route('author.show',['id'=>$tposts->user->id])}}">{{$tposts->user->name}}</a></li>
									<li>{{$tposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="col-md-6">
						<div class="post">
							<a class="post-img"  href="{{route('post.show',['slug'=>$fposts->slug])}}"><img src="{{$fposts->featured}}" alt="" class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$fposts->category->id])}}">{{$fposts->category->name}}</a>
								</div>
								<h3 class="post-title title-lg"><a href="blog-post.html">{{str_limit($sposts->content, 46)}}</a></h3>
								<ul class="post-meta">
									<li><a href="{{route('author.show',['id'=>$fposts->user->id])}}">{{$fposts->user->name}}</a></li>
									<li>{{$fposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">{{$java->name}}</h2>
						</div>
					</div>
					<!-- post -->
					<!-- post -->
					@foreach ($java->posts()->orderBy('created_at','desc')->take(5)->get() as $post)
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h3 class="post-title title-sm"><a href="blog-post.html">{{str_limit($post->content, 50)}}</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">{{$tposts->title}}</a></li>
									<li>{{$tposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->

					<!-- post -->


					<!-- /post -->

					<!-- post -->


					<!-- /post -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2 class="title">{{$python->name}}</h2>
						</div>
					</div>
					<!-- post -->
					@foreach ($python->posts()->orderBy('created_at','desc')->take(5)->get() as $post)
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h3 class="post-title title-sm"><a href="blog-post.html">{{str_limit($post->content, 50)}}</a></h3>
								<ul class="post-meta">
									<li><a href="author.html">{{$tposts->title}}</a></li>
									<li>{{$tposts->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->


				</div>
				<!-- /row -->

				<!-- row -->


				<!-- /row -->
			</div>
			<div class="col-md-4">
				<!-- ad widget-->
				<div class="aside-widget text-center">
					<a href="#" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-3.jpg" alt=" ">
					</a>
				</div>
				<!-- /ad widget -->

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

				<!-- category widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Categories</h2>
					</div>
					<div class="category-widget">
						<ul>
							<!-- <li><a href="#">Lifestyle <span>451</span></a></li> -->
							@foreach ($categories as $category)
								<li><a href="{{route('categories.show',['id'=>$category->id])}}">
								{{$category->name}} 
								<span>
					   {{$category->posts()->count()}}
								
								</span>
								</a></li>
							
							@endforeach
						</ul>
					</div>
				</div>
				<!-- /category widget -->


				<!-- newsletter widget -->
				<div class="aside-widget">
				 @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif

					<div class="section-title">
						<h2 class="title">Newsletter</h2>
					</div>
					<div class="newsletter-widget">
						    <form>
        @csrf
							<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
							<input class="input" name="newsletter" placeholder="Enter Your Email">
							<button class="primary-button">Subscribe</button>
						</form>
					</div>
				</div>
				<!-- /newsletter widget -->

				<!-- post widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Popular Posts</h2>
					</div>
					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-2.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Technology</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-widget">
						<a class="post-img" href="blog-post.html"><img src="./img/widget-5.jpg" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="category.html">Health</a>
								<a href="category.html">Lifestyle</a>
							</div>
							<h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
						</div>
					</div>
					<!-- /post -->
				</div>
				<!-- /post widget -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ad -->
			<div class="col-md-12 section-row text-center">

				<div class="alert alert-danger text-center" role="alert" style="width:100%;">

					<a href="https://smallbusiness.chron.com/start-travel-business-home-4394.html" style="display: inline-block;margin: auto;">
						<img class="img-responsive" src="./img/ad-2.jpg" alt="">
					</a>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>

			</div>
			<!-- /ad -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
	
		
						<!-- /row -->
	@foreach ($categories as $category)
			<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">{{$category->name}}</h2>
				</div>
			</div>
					
					@foreach ($category->posts()->where('category_id',$category->id)->get() as $post)
					<div class="col-md-4">
						<div class="post post-sm">
							<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" class="myimg"></a>
							<div class="post-body">
								<div class="post-category">
									<a href="{{route('categories.show',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
								</div>
								<h3 class="post-title title-sm"><a href="blog-post.html">{{str_limit($post->content, 50)}}</a></h3>
								<ul class="post-meta">
									<li><a href=""></a></li>
									<li>{{$post->created_at->diffForHumans()}}</li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					<!-- /post -->


				</div>
				<!-- /row -->
@endforeach
		<!-- row -->
		<!-- <div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">{{$python->name}}</h2>
					</div>
				</div>





			</div> -->
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- post -->
				<div class="post post-row">
				
<div style="width: 720px"><iframe width="720" height="300" src="https://maps.google.com/maps?width=720&amp;height=300&amp;hl=en&amp;q=Assuit+(Alshahab)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/coordinates.html">find my location</a></iframe></div><br />
				</div>
				<!-- /post -->

			</div>
			<div class="col-md-4">
				<!-- galery widget -->
				<div class="aside-widget">
					<div class="section-title">
						<h2 class="title">Instagram</h2>
					</div>
					<div class="galery-widget">
						<ul>
							@foreach ($galery as $post)
							<li><a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt="" class="imgalery"></a></li>
							@endforeach
						</ul>
					</div>
				</div>
				<!-- /galery widget -->





				<!-- /Ad widget -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- start footer -->
@include('include.footer')
<!-- end footer -->