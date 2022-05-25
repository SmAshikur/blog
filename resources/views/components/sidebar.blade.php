<div>
    <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Ashik Blog</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{Request::routeIs('home')?'active':''}}" href="{{asset('/')}}">Home</a></li>
            <li><a class="{{Request::routeIs('blog')?'active':''}}" href="{{asset('/blog')}}">Blog</a></li>
            <li><a class="{{Request::routeIs('about')?'active':''}}" href="{{asset('/about')}}">About</a></li>
            <li><a class="{{Request::routeIs('contact')?'active':''}}" href="{{asset('/contact')}}">Contact</a></li>
            @guest
            <li><a class="{{Request::routeIs('login')?'active':''}}" href="{{asset('/login')}}">Log In</a></li>
            <li><a class="{{Request::routeIs('register')?'active':''}}" href="{{asset('/register')}}">Register</a></li>
            @endguest
          </ul>
        </div>
          <!-- sidebar footer -->
          <footer class="sidebar-footer">
            <div>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
            </div>

            <small>&copy 2021 Alphayo Blog</small>
          </footer>
        </div>
</div>
