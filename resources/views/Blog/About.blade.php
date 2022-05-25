<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Alphayo - Alphayo Blog</title>
  <!-- Css -->
  <link rel="stylesheet" href="style.css" />
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
        <h1>About Me</h1>
        <div class="single-blog-post-ContentImage" data-aos="fade-left">
          <img src="https://scontent.fdac8-1.fna.fbcdn.net/v/t39.30808-6/279563805_1681726945509095_6512338645897686936_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGNGhn-TVCsjnOd-zyz23tmukWlmfOcV-G6RaWZ85xX4YPTKdKj1mBvL1kZHbosynawtHBAoccGvWYFeOuxUSpE&_nc_ohc=fRrJ7CmyoCkAX8Ki9il&_nc_ht=scontent.fdac8-1.fna&oh=00_AT8IPJG_KPFIDf_LHCaInZkHJR4SYAzk3Zs662tPDk4-7w&oe=62934834" alt="" />
        </div>

        <div>
          <p class="about-text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam, ut
            tempore repellat molestias a distinctio fuga molestiae eaque
            laborum vero eos, maiores fugit culpa porro delectus aliquam
            adipisci nisi voluptas sequi odit, numquam architecto officia?
            Corrupti recusandae beatae sint quasi iste libero maiores commodi
            odio molestias vel fugit, omnis nobis consectetur harum veritatis
            necessitatibus asperiores officiis. Dolores nemo voluptates.
            <br /><br />
            Adipisicing elit. Illum reprehenderit sapiente at ab amet, nobis
            porro pariatur similique dicta nisi velit fugiat reiciendis, quos
            fuga nemo aliquam aspernatur est vel. Lorem ipsum dolor sit amet
            consectetur, adipisicing elit. Omnis non ad veritatis. Lorem ipsum
            dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor
            sit.
          </p>
        </div>
      </section>
    </main>

    <!-- footer -->
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
