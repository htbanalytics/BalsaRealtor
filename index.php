<?php
include_once 'header.php';
?>

<script href="js/numbers.js"></script>
<! -- Carousel Images -- >
<style>
    .carousel-item {
        height: 32rem;
        background: #777;
    }
</style>

<div class="container-fluid" id="carousel">
    <div class="row">
        <div class="col">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="Images/slide1.jpg" class="d-block w-100" alt="407 Isabel Drive">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>407 Isabel Drive</h5>
                        <p></p>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Images/slide2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="Images/slide3.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
</div>
<!--  Search -->
<div class="container-fluid" id="search">
    <div class="row g-3">
        <div class="col-sm-2">
            <p style="display: inline-block; vertical-align:bottom; font-family: 'Style Script', cursive; color:black; font-size:24px;">Find your dream home</p>
        </div>
        <div class="col-sm-5">
            <input type="text" class="form-control" placeholder="City" aria-label="City">
        </div>
        <div class="col-sm">
            <input type="text" class="form-control" placeholder="State" aria-label="State">
        </div>
        <div class="col-sm">
            <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
        </div>
    </div>
    <div class="row g-3">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
            <select name="bedrooms" id="bd"></div>
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
            </select>
        </div>
        <div class="col-sm-2">
            <select name="bedrooms" id="bd"></div>
                <option value="">Bathrooms</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="2.5">2.5</option>
                <option value="3+">3+</option>
            </select> 
        </div>
        <div class="col-sm-2">
            <input type="number" id="minPrice" name="minPrice" placeholder="Min. Price">
        </div>
        <div class="col-sm-2">
            <input type="number" id="maxPrice" name="maxPrice" placeholder="Max. Price">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success">Search</button>
        </div>
</div>

<!--  Reviews  -->
<div class="container-fluid" id="cards" style="padding-top: 20px;">
    <div class="row">
        <div class="col">
            <div class="card">
                <img src="Images/model2.jpg" alt="" style="border-radius: 50%; height:150px; width:150px; margin:auto;">
                <blockquote><p class="card-text">I am so happy to have found Anthony! He was an absolute pleasure to help me find my dream vacation home.</p></blockquote>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/model3.jpg" alt="" style="border-radius: 50%; height:150px; width:150px; margin:auto;">
                <blockquote><p class="card-text">Can't believe how fast he sold my house and above asking price too!'</p></blockquote>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="Images/model4.jpg" alt="" style="border-radius: 50%; height:150px; width:150px; margin:auto;">
                <blockquote><p class="card-text">Very professional and attentive to both my needs and wants. Helped me naviagate this crazy market. I highly reccomend. </p></blockquote>
            </div>
        </div>
    </div>
</div>

<!--  Statistics  -->

<div class="container-fluid mt-3" id="statistics">
    <div class="row">
        <div class="col-4">
            <h3 style="text-align:center;">Aptos Statistics</h3>
                <div class="counter-container">
                    <div class="counter" data-target="74"></div>
					<span>Available Listings</span>
                    <div class="counter" data-target="38"></div>
                    <span>Average Days on Market</span>
                    <div class="counter" data-target="1025000"></div>
                    <span>Med. List Price</span>
                    <div class="counter" data-target="778.19"></div>
                    <span>Avg. $ / Sq. Ft.</span>
                </div>
        </div>
        <div class="col-4">
            <h3 style="text-align: center;">Santa Cruz County</h3>
                <div class="counter-container" style="flex-direction: column;">
                    <div class="counter" data-target="794"></div>
					<span>Med. List Price</span>
                    <div class="counter" data-target="77">77</div>
                    <span>Avg. Days on Market</span>
                    <div class="counter" data-target="995000"></div>
                    <span>Highest Price on Market</span>
                    <div class="counter" data-target="721.32"></div>
                    <span>Avg. $ / Sq. Ft.</span>
                </div>
        </div>
        <div class="col-4">
            <img src="Images/houseCol.png" class="img-fluid rounded" alt="" style="max-height: 380px; width: auto; float:right;">
        </div>
    </div>
</div>

<script src="js/num.js"></script>
<?php
include_once 'footer.php';
?>