@extends('layouts.landing')

@section('title', 'Page Title')



@section('content')
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
    <p>TESTING LAYOUT.</p>
@endsection