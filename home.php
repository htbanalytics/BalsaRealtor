<?php
include_once 'header.php'
?>

<div class="container">
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

<?php
include_once 'footer.php'
?>