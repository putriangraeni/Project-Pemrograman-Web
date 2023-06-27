<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <script src ="Script.js"></script> -->
    <title>NETIZENkampus</title>
    <link rel ="stylesheet" href="Style.css">
    <!-- Gambar email dan telepon -->
    <link rel ="stylesheet" href ="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Model tulisannya -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <!--gambar icon bars dan xmark -->
    <link rel="stylesheet" href ="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"> 
  </head>
  <body>
    
    <nav class ="navbar-top flex">
      <div class ="left flex">
        <div class ="email">
          <i class ="fa fa-envelope"></i>
            <span>Netizenkampus@gmail.com</span>
        </div>
        <div class ="call">
          <i class ="fa fa-phone-alt"></i>
          <span>0411-861377</span>
        </div>
      </div>
      <div class ="right flex">
        <div class ="twitter">
          <i class ="fab fa-twitter"></i>
          <span>@NETIZENkampus</span>
        </div>
        <div class ="facebook">
          <i class ="fab fa-facebook"></i>
          <span>UNMshitpost</span>
        </div>
        <div class ="instagram">
          <i class ="fab fa-instagram"></i>
          <span>netizenkampus</span>
        </div>
        <div class ="login" id ="show-login">
          <i class="fa fa-user"></i>
          <span>LOGIN</span>
        </div>
      </div>
    </nav>
    <section class ="header">
      <img class="logo" src ="IMG/netizen_kampus-removebg-preview.png" width="300px" height="200px" style="margin-top: -50PX; margin-left: 50px"></a>
      <nav style="float: right;">
        <div class = "nav-links" id ="navLinks">
          <i class="fa fa-xmark" onclick="hideMenu()"></i>
          <ul>
            <li><a href="">HOME</a></li>
            <li><a href="">TENTANG UNM</a></li>
            <li><a href="">NEWS</a></li>
            <li><a href="">PENGADUAN</a></li>
            <!-- <li><a href="">TUTORIAL</a></li> -->
            <!-- <li><a href="">TUTORIAL</a></li> -->
            <li><a href="">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class ="text-box">
        <h1>SELAMAT DATANG <br>DI WEBSITE NATIZEN KAMPUS</h1>
        <P>Cerita aja gan. Identitas kalian aman kok!</P>
        <a href="opinion.php" class ="hero-btn">Add your opinion</a>
        <!-- <a href="" class ="hero-btn">Visit Us To Know More</a> -->
      </div>
    </section>
    <section class="course">
    <h1>TENTANG UNM</h1>
    <p>Cuman Wadah penyampaian keluh kesahnya mahasiswa tentang kampus</p>
    <div class ="row">
      <div class ="course-col">
        <h3>TUJUAN</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
      </div>
      <div class ="course-col">
        <h3>VISI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
      </div>
      <div class ="course-col">
        <h3>MISI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
      </div>
    </div>
    </section>
    <!-- BEDE -->
    <section class ="more-news">
      <div class ="news-section">
        <article class="world">
          <h2>NEWS</h2>
          <img src = "IMG/AC.jpg">
          <h3>BEDE! Panas kelas</h3>
          <p class="tulisanSatu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>

          <img src="IMG/pelecehan.jfif">
          <h3>BEDE'!PELECEHAN TERJADI DIDALAM KAMPUS UNM</h3>
        <p class="tulisanSatu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
        </article>
        <article class ="sport">
          <h2>PRESTASI UNM</h2>
          <img src="IMG/prestasi2UNM.jpeg">
          <h3>BEDE'!MAHASISWA JTIK HARUMKAN NAMA BAIK UNM </h3>
        <p class="tulisanSatu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
         <img src="IMG/prestasi2.jpg">
          <h3>BEDE'!MAHASISWA JTIK MEMBUAT CHANNEL YANG YT YANG MENDIDIK</h3>
        <p class="tulisanSatu">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
        </article>
      </div>
      <aside>
        <h4>BERITA TERBARU</h4>
         <div class ="recent-news">
          <img src ="IMG/ft.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung Fakultas tehnik</p>
        </div>
        <div class ="recent-news">
          <img src ="IMG/FSN.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas seni dan desain</p>
        </div>
         <div class ="recent-news">
          <img src ="IMG/fbs.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas bahasa dan sastra</p>
        </div>
         <div class ="recent-news">
          <img src ="IMG/fmipa.jpeg.crdownload">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas matematika dan ipa</p>
        </div>
        <div class ="recent-news">
          <img src ="IMG/ft.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung Fakultas tehnik</p>
        </div>
        <div class ="recent-news">
          <img src ="IMG/FSN.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas seni dan desain</p>
        </div>
         <div class ="recent-news">
          <img src ="IMG/fbs.jpg">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas bahasa dan sastra</p>
        </div>
         <div class ="recent-news">
          <img src ="IMG/fmipa.jpeg.crdownload">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas matematika dan ipa</p>
        </div>
         <div class ="recent-news">
          <img src ="IMG/fmipa.jpeg.crdownload">
          <p class="tulisanDua">keindahan kampus unm parangtambung fakultas matematika dan ipa</p>
        </div>
      </aside>
    </section>


    <!-- campus -->
    <!-- <section class="campus">
      <h1>Our Global Campus</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="campus-col">
          <img src="IMG/london.png">
          <div class="layer">
            <h3>LONDON</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="IMG/newyork.png">
          <div class="layer">
            <h3>NEW YORK</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="IMG/washington.png">
          <div class="layer">
            <h3>WASHINGTON</h3>
          </div>
        </div>
      </div>
    </section> -->

    <!--Facilities-->
    <section class="facilities">
      <h1>TUTORIAL</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="facilities-col">
          <h3>LANGKAH 1</h3>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
        </div>
        <div class="facilities-col">
           <h3>langkah 2</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
        </div>
        <div class="facilities-col">
          <h3>LANGKAH 3</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
        </div>
      </div>
      <img src="IMG/Alur pengaduan.jpg.crdownload">
    </section>
    <footer class="footer">
      <div class ="footer-left">
        <h3>NETIZEN KAMPUS</h3>
        <div class ="credit-cards">
          <img src ="IMG/logo1.png">
        </div>
        <p class ="footer-copyright">2022 KUTTUNGODING</p>
      </div>
      <div class ="footer-center">
        <div>
       <i class="fa-solid fa-map-location-dot"></i>
          <p><span>Indonesia</span>Sulawesi Selatan,Makassar</p>
        </div>
        <div>
          <i class="fa fa-phone-alt"></i>
          <p>0411-861377</p>
        </div>
                <div>
          <i class="fa fa-envelope"></i>
          <p>Netizenkampus@gmail.com</p>
        </div>
      </div>
    </footer>

    <!--testimonials-->
    <!-- <section class="testimonials">
      <h1>TUTORIAL</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <div class="row">
        <div class="testimonials-col">
          <img src="IMG/user1.jpg" >
          <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
            <h3>Cristine Berkley</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
        </div>
        <div class="testimonials-col">
          <img src="IMG/user2.jpg" >
          <div>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique sed minus perferendis ullam facilis atque accusantium in libero!</p>
            <h3>David Byer</h3>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
      </div>
    </section> -->

    <!--Call To  Action-->
    <!-- <section class="cta">
      <h1>Enroll for our various online courses Anywhere from the
      World</h1>
      <a href="#" class="hero-btn">CONTACT US</a>
    </section> -->

    <!--Footer-->
    <!-- <section class="footer">
      <h4>About Us</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, totam rerum. Culpa eveniet nostrum, neque, dolor repellat officiis tempore voluptate similique<br> 
        sed minus perferendis ullam facilis atque accusantium in libero!</p>
        <div class="icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart"></i> by Easy Tutorials </p>
    </section> -->

<!-- LOGIN POPUP -->
 <div class ="popup">
    <div class = "close-btn">&times;</div>
    <div class = "form">
        <h2>Log in</h2>
        <div class ="form-element">
            <label for ="email">Email</label>
            <input type = "text" id ="email" placeholder="Enter email">
        </div>
        <div class="form-element">
            <label for = "password">Password</label>
            <input type ="password" id = "password" placeholder="Enter password">
        </div>
        <div class = "form-element">
            <input type = "checkbox" id ="remember-me">
            <label for="remember-me">Remember me</label>
        </div>
        <div class ="form-element">
            <button>Sign in</button>
        </div>
        <div class = "form-element">
            <a href="#">Forgot password?</a>
        </div>
        </div>
        </div>
    </div>
</div>


    <script>
    var navLinks = document.getElementById("navLinks");

    function showMenu(){
    navLinks.style.right="0";
    }
    function hideMenu(){
    navLinks.style.right="-200px";
    }
    document.querySelector("#show-login").
    addEventListener("click",function(){
      document.querySelector(".popup").classList.add("active");
    });
    document.querySelector(".popup .close-btn").addEventListener("click",function(){
      document.querySelector(".popup").classList.remove("active");
    });
    </script>
  </body>
</html>