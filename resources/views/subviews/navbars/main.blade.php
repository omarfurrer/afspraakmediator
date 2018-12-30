
<nav class="navbar navbar-expand-lg navbar-dark fixed-top myNav">
    <div class="container-fluid nbBrand">
        <a class="navbar-brand" href="{{ url('/') }}">
         <big> Translator </big>
     </a>
     <button class="navbar-toggler togBtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span><i class="fa fa-bars"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link myNavItem dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PRODUCTS
                </a>
                <div class="dropdown-menu myDropMenu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" style="border-right: 1px solid rgb(172, 172, 172)">
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 1</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 2</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                          </div>
                          <div class="col-md-6">
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 1</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 2</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                              <a class="dropdown-item myDropItem" href="#">PRODUCT 3</a>
                          </div>
                      </div>
                  </div>
              </div>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link myNavItem dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CITIES
                </a>
                <div class="dropdown-menu myDropMenu" aria-labelledby="navbarDropdown">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6" style="border-right: 1px solid rgb(172, 172, 172)">
                              <a class="dropdown-item myDropItem" href="#">CITY 1</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 2</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                          </div>
                          <div class="col-md-6">
                              <a class="dropdown-item myDropItem" href="#">CITY 1</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 2</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                              <a class="dropdown-item myDropItem" href="#">CITY 3</a>
                          </div>
                      </div>
                  </div>
              </div>
          </li>

        <li class="nav-item">
            <a class="nav-link myNavItem" href="#">ABOUT US <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link myNavItem" href="{{ url('/contact-us') }}">CONTACT US <span class="sr-only">(current)</span></a>
        </li> 
        <li class="nav-item">
            <a class="nav-link myNavItem" href="#">HOW IT WORKS <span class="sr-only">(current)</span></a>
        </li>
        @guest

        @else

        @endguest
    </ul>
</div>
</div>
</nav>


@push('scripts')
<script>

    $(function () {
        $(document).scroll(function () {
           $nav = $(".myNav");
           $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
       });
    });

    $(document).ready(function(){
   $('.togBtn').click(function(){
       $nav = $(".myNav");
       $nav.toggleClass('clicked');
   });
});



</script>
@endpush