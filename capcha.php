<?php include'header.php';?>
<?php include'navbar.php';?>


<section class="py-5">
    <div class="container">
        <div>
            <h2>DOWNLOAD BROCHURE</h2>
        </div>
        <div class="pt-4">
            <form id="captchaForm" method="POST">
              <div class="g-recaptcha" data-sitekey="6LeOXRsqAAAAAOyfpzB9yceKF835JMB3e86RvCw2" data-callback="enablebtn"></div>
              <br/>
              <input type="submit" id="submitbtn" disabled="disabled" value="Submit">
            </form>
        
            
        </div>
    </div>
</section>

    <div id="downloadPopup">
        <p>reCAPTCHA verified successfully.</p>
        <!--<a href="asset/pdf/sample.pdf" download>Download Brochure</a>-->
        <div class="btn-box">
            <a href="asset/pdf/sample.pdf" class="theme-btn btn-style-one" download>Download Brochure</a>
        </div>
    </div>
    
        
    <!--Google capcha verification-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
    
    // enable btn script
    
    function enablebtn(){
            document.getElementById("submitbtn").disabled = false;
        }

        // download pdf btn popup
        function showDownloadPopup() {
            document.getElementById('downloadPopup').style.display = 'block';
        }
    
        // google verification code
        document.getElementById('captchaForm').onsubmit = function(event) {
            event.preventDefault();
            var recaptchaResponse = document.getElementsByName('g-recaptcha-response')[0].value;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'verify.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        showDownloadPopup();
                    } else {
                        alert('reCAPTCHA verification failed. Please try again.');
                    }
                } else {
                    alert('An error occurred. Please try again.');
                }
            };
            xhr.send('g-recaptcha-response=' + recaptchaResponse);
        };
    </script>


<?php include'footer.php';?>
