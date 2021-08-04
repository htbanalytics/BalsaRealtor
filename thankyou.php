<?php
include_once 'header.php'
?>
<link href="css/contact.css" rel="stylesheet" type="text/css">

<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="col-4">
            <p style="font-family:'Staatliches', cursive; color:black; font-size:30px;">Residental real estate commands a great deal of attention in our culture, yet there has been no clear road map for buyers and sellers to maximize the value of the sale and purchase of homes - until now.<br> - Tracy McLaughlin</p>
        </div>
        <div class="col" id="contactCard">
        <h1 class="ml6">
            <span class="text-wrapper">
                <span class="letters">Thank You!</span>
                <span class="letters">If your matter is urgent please feel to contact me via:<br>
                Cell: (831) 254-3662<br>Email:</span>
            </span>
        </h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

        </div>
    </div>
</div>

<script>
    // Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 750,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>

<?php
include_once 'footer.php'
?>