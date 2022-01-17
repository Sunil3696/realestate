<!-- <*****************************footer starts***************************> -->
<footer class="page-footer font-small stylish-color-dark pt-4 bg-light">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">RealState</h5>
                <p>Now its easier to find the house and lands all over the nepal with realstate app.</p>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Useful Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="{{ route('property_for_rent') }}">Rents</a>
                    </li>
                    <li>
                        <a href="{{ route('property_for_sell') }}">Sales</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}">About us</a>
                    </li>

                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-2 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Like us on Fb</h5>
                <div class="fb-page" data-href="#" data-tabs="timeline" data-width="250" data-height="70" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/allitemMarket/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/allitemMarket/">All Item Market</a></blockquote></div>
            </div>
            <hr class="clearfix w-100 d-md-none">

        </div>
    </div>
    <hr>
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
            <a href="#!" class="btn btn-danger btn-rounded waves-effect waves-light">Sign up!</a>
            <a href="#!" class="btn btn-primary btn-rounded waves-effect waves-light">Log in!</a>
        </li>
    </ul>
    <hr>
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fab fa-facebook-f"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fab fa-instagram"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fab fa-linkedin-in"> </i>
            </a>
        </li>
    </ul>
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">RealEsate Company</a>
    </div>
</footer>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0" nonce="RH3YdAa3"></script>
<!--  <***********************************footer ends*********************> -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        dots: false,
        margin:10,
        autoplay: true,
        autoplayTimeout: 2000,
        stagePadding: 50,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
</script>
<script>
    $('#brief_desc').summernote();
</script>
@yield('scripts')
</body>
</html>
