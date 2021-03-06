<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 mCS_img_loaded" src="{{asset("images") . "/" . "img1.PNG"}}" style="max-height: 250px" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="color-white">First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mCS_img_loaded" src="{{asset("images") . "/" . "img2.PNG"}}" style="max-height: 250px" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="color-white">Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 mCS_img_loaded" src="{{asset("images") . "/" . "img3.PNG"}}" style="max-height: 250px" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="color-white">Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>