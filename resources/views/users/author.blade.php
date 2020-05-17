@include('include.header')


		<!-- PAGE HEADER -->
		<div class="page-header" style="background-img:url('img/header-1.jpg')">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<div class="author">
							<img class="author-img center-block" src="/{{$author->profile->avatar}}" alt="">
							<h1 class="text-uppercase">{{$author->name}}</h1>
							<p class="lead">{{$author->profile->about}}</p>
							<ul class="author-social">
								<li><a href="{{$author->profile->facebook}}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- post -->
                          
          @foreach ($author->posts  as $post)
					<div class="post post-row">
						<a class="post-img" href="{{route('post.show',['slug'=>$post->slug])}}"><img src="{{$post->featured}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('categories.show',['id'=>$post->category->id])}}">{{$post->category->name}}</a>
							</div>
							<h3 class="post-title">
								<a href="{{route('post.show',['slug'=>$post->slug])}}">{{$post->title}}</a>                            
                                </h3>
							<ul class="post-meta">
								<li><a  href="{{route('author.show',['id'=>$author->id])}}">{{$author->name}}</a></li>
								<li>{{$post->created_at->diffForHumans()}}</li>
							</ul>
							<p>
                                {{$post->content}}
                            </p>
						</div>
					</div>
					<!-- /post -->
					<!-- /post -->
@endforeach


					<!--<div class="section-row loadmore text-center">
						<a href="#" class="primary-button">Load More</a>
					</div>-->
				</div>

				<div class="col-md-4">
					<!-- ad widget-->
					<div class="aside-widget text-center">
						<a href="#" style="display: inline-block;margin: auto;">
							<img class="img-responsive" src="./img/ad-3.jpg" alt="">
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
@include('include.footer')