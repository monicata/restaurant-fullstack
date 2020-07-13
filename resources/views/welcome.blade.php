<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
       
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <section id="welcome">
      <div class="welcome-menu">
        <div class="logo">
          <img src="https://webstockreview.net/images/clipart-restaurant-restaurant-logo-5.png"/>
        </div>
        <div class="menu">
          <div class="menu-title">
            Menu
          </div>
          <ul class="links">
            <li>
              <a href="#">Menu</a>
            </li>
            <li>
              <a href="#">Waitlist</a>
            </li>
            <li>
              <a href="#">Offers</a>
            </li>
            <li>
              <a href="#">Giftcards</a>
            </li>
          </ul>
        </div>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook-f"></i> </a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="location">
          <div class="address">
          234 Main st, <br>
          New York, New York 11436
        </div>
        <div class="phone-number">
          <a href="tel:4366663242">436-666-3242</a>
        </div>
        </div>
      </div>
      <div class="welcome-jumbo">
        <div class="status">
          New
        </div>
        <h1>Billy Burger</h1>
      <img src="./img/hamburger-and-fries.png" alt="hamburger and fries large image" class="burger-fries">
      </div>
    </section>
<section id="information">
  <div class="restaurant-image">
    <img src="./img/top-down.jpg" alt="">
  </div>
  <div class="info">
   
  
  <h2>We Started From The Bottom in 1987</h2>
  <div class="paragraphs">
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
    Ipsam error iure reiciendis aliquid neque nesciunt, nemo esse eveniet veritatis et! Recusandae, sed ipsam eum autem non a distinctio voluptates laboriosam.
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Mollitia totam animi suscipit. Ex reprehenderit a, neque ad fugiat ipsa in perspiciatis consequatur iusto cumque officia laudantium, suscipit itaque ab veritatis?

  </p>
    <p id ="p2">
      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur obcaecati voluptatum tempore! Explicabo, dolore eligendi rem consectetur illum libero quo aliquam commodi ducimus maiores adipisci repellendus voluptatum deserunt assumenda sapiente.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, impedit ducimus. Sapiente maiores aspernatur, voluptates veritatis laborum  voluptate accusantium excepturi.
    </p>
  </div>

  <a href="#" class="about-link">
  <span> Learn More About Our Story</span>
    <div class="circle-right"><i class="fa fa-chevron-right"></i>
    </div>
  </a>

</div>
  </section>
<section id="food-preview">

  <h2>We have everything you need to kill your hunger</h2>
  <div class="button-rounded">View Our Menu</div>
 <div class="container">
  <div class="left-btn"><i class="fa fa-chevron-left"></i></div>

  <div class="right-btn"><i class="fa fa-chevron-right"></i></div>
   <div class="container__food-slider">
  

  <ul class="container__sliding-system">   
    <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Starters
      </div>
      <div class="food-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriosam nemo repudiandae, aperiam quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://taco.sfo2.digitaloceanspaces.com/2019/04/CHIPS.png
        " alt="">
      </div>
    </div>
  
  </li>
  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Burgers
      </div>
      <div class="food-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriosam nemo repudiandae, aperiam quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="http://www.pngmart.com/files/5/Hamburger-PNG-HD.png" alt="">
      </div>
    </div>
  
  </li>

  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Entrees
      </div>
      <div class="food-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriose incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png
        " alt="">
      </div>
    </div>
  
  </li>

  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Sides
      </div>
      <div class="food-description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laborios quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Salad-Transparent-PNG.png
        " alt="">
      </div>
    </div>
  
  </li>

  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Desserts
      </div>
      <div class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriosam nemo repudiandae, aperiam quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png
        " alt="">
      </div>
    </div>
  
  </li>

  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Drinks
      </div>
      <div class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriosam nemo repudiandae, aperiam quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png
        " alt="">
      </div>
    </div>
  
  </li>

  <li class="container__slide">
    <div class="background">  </div>
  
    <div class="content">
      <div class="food-title">
        Appetizers
      </div>
      <div class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur omnis illum tempora rerum nam provident, doloremque nostrum laboriosam nemo repudiandae, aperiam quis ipsa vitae incidunt aliquid! Quasi!
      </div>
      <div class="food-image">
        <img src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png
        " alt="">
      </div>
    </div>
  
  </li>
</ul>
  

 </div>

</div>
  
</section>

  
    <script src="/js/dist/vendors~FirstComp.js"></script>
    <script src="/js/dist/FirstComp.js"></script>
    <script src="/js/dist/main.js"></script>
    <script src="app.js"></script>

  </body>
</html>
