<div>
    <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Ashik Blog</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{Request::routeIs('home')?'active':''}}" href="{{route('home')}}">Home</a></li>
            <li><a class="{{Request::routeIs('blog')?'active':''}}" href="{{route('blog')}}">Blog</a></li>
            <li><a class="{{Request::routeIs('about')?'active':''}}" href="{{route('about')}}">About</a></li>
            <li><a class="{{Request::routeIs('contact')?'active':''}}" href="{{route('contact')}}">Contact</a></li>
            @guest
            <li><a class="{{Request::routeIs('login')?'active':''}}" href="{{route('login')}}">Log In</a></li>
            <li><a class="{{Request::routeIs('register')?'active':''}}" href="{{route('register')}}">Register</a></li>
            @endguest
            @auth
            <li><a class="{{Request::routeIs('home')?'active':''}}" href="{{route('home')}}">Dashboard</a></li>
            <li><a  onclick="event.preventDefault();
                document.getElementById('logout-form').submit()" href="{{route('logout')}}">Log Out</a></li>
            @endauth
          </ul>
        </div>
          <!-- sidebar footer -->
          <footer class="sidebar-footer">
            <div>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-twitter"></i></a>
            </div>

            <small>&copy 2021 Ashik Blog</small>
          </footer>
        </div>
</div>
