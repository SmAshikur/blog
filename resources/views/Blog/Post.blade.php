<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blog-title - Alphayo Blog</title>
  <!-- Css -->
  <link rel="stylesheet" href="/style.css" />
  <!-- Font awesome -->
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
      <section class="single-blog-post">
        <h1>{{$post->title}}</h1>

        <p class="time-and-author">
            {{$post->created_at->diffForHumans()}}
          <span>Written By {{$post->user->name}}</span>
        </p>

        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="{{asset($post->image)}}" alt="" />
        </div>

        <div class="about-text">
          <p>

            {{$post->body}}
          </p>
        </div>

      </section>
      <section class="recommended">
        <p>Related</p>
        <div class="recommended-cards">

          @foreach ($relatedPost as $key )
<a href={{route('post',$key)}}>
    <div class="recommended-card">
        <img style="width: 80%" src="{{asset($key->image)}}" alt="" />
      <h4>
        {{$key->title}}
      </h4>
    </div>
  </a>
@endforeach

        </div>
      </section>
    </main>

    <!-- Main footer -->
    <footer class="main-footer">
      <div>
        <a href=""><i class="fab fa-facebook-f"></i></a>
        <a href=""><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-twitter"></i></a>
      </div>
      <small>&copy 2021 Alphayo Blog</small>
    </footer>
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
