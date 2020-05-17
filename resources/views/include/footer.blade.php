<!-- FOOTER -->
<footer id="footer">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-3">
        <div class="footer-widget">
          <div class="footer-logo">
            <a href="index.html" class="logo"><img src="" alt=""></a>
          </div>
          <p>
          {{$setting->blog_email}}
          </p>
          <p>
          {{$setting->blog_name}}
          </p>
          <p>
          {{$setting->phone_number}}
          </p>
          <p>
          {{$setting->address}}
          </p>

          <ul class="contact-social">
            <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title">Categories</h3>
          <div class="category-widget">

          	<ul>
							@foreach ($categories as $category)
								<li><a href="{{route('categories.show',['id'=>$category->id])}}">
								{{$category->name}} 
								<span>
					   {{$category->posts()->count()}}
								
								</span>
								</a></li>
							
							@endforeach
						</ul>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title">Tags</h3>
          <div class="tags-widget">
            <ul>
              @foreach ($tags as $tag)
               <li><a href="{{route('tag.show',['id'=>$tag->id])}}">{{$tag->tag}}</a></li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="footer-widget">
          <h3 class="footer-title">Newsletter</h3>
          <div class="newsletter-widget">
            <form>
              <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
              <input class="input" name="newsletter" placeholder="Enter Your Email">
              <button class="primary-button">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /row -->



    <!-- row -->
    <div class="footer-bottom row">
      <div class="col-md-6 col-md-push-6">
        <ul class="footer-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contacts</a></li>
          <li><a href="#">Advertise</a></li>
          <li><a href="#">Privacy</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-md-pull-6">
        <div class="footer-copyright">

Copyright &copy;<script>document.write(new Date().getFullYear());</script></i> by <a href="https://alshahab.com" target="_blank">Islam sobhi </a>

        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->



<script src={{asset('js/jquery.min.js')}}></script>
<script src={{asset("js/bootstrap.min.js")}}></script>
<script src={{asset("js/jquery.stellar.min.js")}}></script>
<script src={{asset("js/main.js")}}></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
   (function($){
	   "use strict";
	   $('.next').click(function(){ $('.carousel').carousel('next');return false; });
	   $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
   })	
   (jQuery);
</script>
<script>
$('div').stars();

// 3 Stars with tootltip and callback
$('div').stars({
  stars: 3,
  text: ['Good', 'Great', 'Excellent'],
  click: function(index) {
    // Some ajax action
  }
});

</script>
</body>

</html>
