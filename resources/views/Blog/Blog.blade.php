<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog - Alphayo Blog</title>

  <!-- Css -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href={{asset('style.css')}} />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
  <div id="wrapper">


     <!-- sidebar -->
     <x-sidebar/>
    <!-- Menu Button -->
    <div class="menuButton">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>

    <!-- main -->
    <main class="container">
      <h2 class="header-title">All Blog Posts</h2>
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />

          <button type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="">Health</a></li>
          <li><a href="">Entertainment</a></li>
          <li><a href="">Sports</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
      <section class="cards-blog latest-blog">

 @foreach ($posts as $post)


        <div class="card-blog-content   card m-2 p-3" style="background: #292828">
          <div class="d-flex justify-content-center">
            <img style="width: 80%" src="{{asset($post->image)}}" alt="" />
          </div>
          <p>
            {{$post->created_at->diffForHumans()}}
            <span>Written By {{$post->user->name}}  </span>
          </p>
          <h4 style="font-weight: bolder" class="d-flex justify-content-center mb-3">
            <a href={{route('post',$post)}}>{{$post->title}}</a>
          </h4>
          <div class="d-flex justify-content-evenly">
              <a class="btn btn-warning" href="{{route('postEdit',$post)}}">Edit post</a>
              <a class="btn btn-success" href="{{route('post',$post)}}">View post</a>
              <a class="btn btn-danger" href="{{route('postDelete',$post)}}">Delete post</a>
          </div>
        </div>

        @endforeach
        <!-- pagination -->

      </section>
      <div class="pagination" id="pagination">
        <a href="">&laquo;</a>
        <a class="active" href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">&raquo;</a>
      </div>
      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>&copy 2021 Alphayo Blog</small>
      </footer>
    </main>
  </div>

  <!-- Click events to menu and close buttons using javaascript-->
  <script>
    document
      .querySelector(".menuButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "100%";
        document.querySelector(".sidebar").style.zIndex = "5";
      });

    document
      .querySelector(".closeButton")
      .addEventListener("click", function () {
        document.querySelector(".sidebar").style.width = "0";
      });
  </script>
</body>

</html>
