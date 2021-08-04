<?php
include_once 'header.php'
?>
<link href="css/contact.css" rel="stylesheet" type="text/css">
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    // https://github.com/axios/axios
axios.defaults.headers.post['Content-Type'] = 'application/json';
axios.post('https://formsubmit.co/ajax/your@email.com', {
    name: "FormSubmit",
    message: "I'm from Devro LABS"
})
    .then(response => console.log(response))
    .catch(error => console.log(error));
</script>
<div class="container" style="padding-top:30px;">
    <div class="row">
        <div class="col-4">
            <p style="font-family:'Staatliches', cursive; color:black; font-size:30px;">Residental real estate commands a great deal of attention in our culture, yet there has been no clear road map for buyers and sellers to maximize the value of the sale and purchase of homes - until now.<br> - Tracy McLaughlin</p>
        </div>
        <div class="col" id="contactCard">
            <form action="https://formsubmit.co/richard@htbanalytics.com" method="POST">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="_honey" style="display:none">
                <input type="text" name="phone" placeholder="Contact Number">
                <label for="message"></label>
                <textarea name="message" style="height: 200px;"></textarea>
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="http://localhost/BalsaRealtor/thankyou.php">
                <button class="btn btn-primary" type="submit">Send</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once 'footer.php'
?>