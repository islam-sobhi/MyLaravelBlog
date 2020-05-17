@include('include.header')

<!-- PAGE HEADER -->
<div class="page-header">
	<div class="page-header-bg" style="background-image: url('img/header-2.jpg');" class="img-responsive" alt=""></div>
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 text-center">
				<h1 class="text-uppercase">{{$post->title}}</h1>
				<p class="lead">
					{{$post->content}}
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
				<div class="section-row">



					<div class="section-title">

						<h3 class="title">{{$post->title}}</h3>
					</div>

					<blockquote class="">
						<img src="{{asset($post->featured)}}" class="img-responsive" />
						<h2> {{$post->created_at->toFormattedDateString()}} </h2>
						<p>
							{{$post->content}}
						</p>

 <br/>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->

  <div class="fb-share-button" data-href="http://127.0.0.1:8000/show/{{$post->slug}}"  data-layout="button" data-size="large"><a target="_blank" class="fb-xfbml-parse-ignore">Share</a></div>

    <br/>
						<h3 class="footer-title"></h3>
						<div class="tags-widget">

							<ul>
								<li>
									<i class="fa fa-tags"></i>
									<span>Tags</span>
								</li>

								@foreach($post->tags as $ta)
								<li><a href="{{route('tag.show',['id'=>$ta->id])}}">{{$ta->tag}}</a></li>
								@endforeach
							</ul>
						</div>
					</blockquote>
				</div>

				<blockquote class="">

					<h3 class="footer-title"></h3>
					<div class="tags-widget">

						<ul>
							<li>

								<i class="fa fa-tags"></i>
								<span>All Tags</span>
							</li>

							@foreach($tags as $ta)
							<li><a href="{{route('tag.show',['id'=>$ta->id])}}">{{$ta->tag}}</a></li>
							@endforeach
						</ul>
					</div>
				</blockquote>


				<!--
					<div class="section-row">
						<div class="section-title">
							<h3 class="title">blockquote</h3>
						</div>
						<blockquote class="blockquote">
							<p>Ei prima graecis consulatu vix, per cu corpora qualisque voluptaria. Bonorum moderatius in per, ius cu albucius voluptatum. Ne ius torquatos dissentiunt. Brute illum utroque eu quo. Cu tota mediocritatem vis, aliquip cotidieque eu ius, cu lorem suscipit eleifend sit.</p>
							<footer class="blockquote-footer">John Doe</footer>
						</blockquote>
					</div>
-->

				@include('include.disqus')
				<script id="dsq-count-scr" src="//islam-sobhi-blog.disqus.com/count.js" async></script>



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

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>