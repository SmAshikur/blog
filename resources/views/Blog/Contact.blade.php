<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Alphayo - Alphayo Blog</title>
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
      <section id="contact-us">
        <h1>Get in Touch!</h1>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <!-- contact info -->
        <div class="container">

          <div class="contact-info">
            <div class="specific-info">
              <i class="fas fa-home"></i>
              <div>
                <p class="title">4th floor, Hi Center</p>
                <p class="subtitle">Moi Avenue</p>
              </div>
            </div>
            <div class="specific-info">
              <i class="fas fa-phone-alt"></i>
              <div>
                <a href="">+254 720 XXX XXX </a>
                <br />
                <a href="">+254 721 XXX XXX</a>

                <p class="subtitle">Mon to Fri 9am-6pm</p>
              </div>
            </div>
            <div class="specific-info">
              <i class="fas fa-envelope-open-text"></i>
              <div>
                <a href="mailto:info@alphayo.co.ke">
                  <p class="title">info@alphayo.co.ke</p>
                </a>
                <p class="subtitle">Send us your query anytime!</p>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="contact-form">
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <!-- Name -->
                <label for="name"><span>Name</span></label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" />
                @error('name')
                <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                @enderror

                <!-- Email -->
                <label for="email"><span>Email</span></label>
                <input type="text" id="email" name="email" value="{{ old('email') }}" />
                @error('email')
                <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                @enderror

                <!-- Subject -->
                <label for="subject"><span>Subject</span></label>
                <input type="text" id="Subject" name="subject" value="{{ old('subject') }}" />
                @error('subject')
                <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                @enderror
                <!-- Message -->
                <label for="message"><span>Message</span></label>
                <textarea id="message" name="message">{{ old('message') }}</textarea>
                @error('message')
                <p style="color: red; margin-bottom:5px; ">{{ $message }}</p>
                @enderror
                <!-- Button -->
                <input type="submit" value="Submit" />
            </form>
          </div>
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

      // setTimeout(() => {alert('Welcome')}, 500);
  </script>
</body>

</html>
