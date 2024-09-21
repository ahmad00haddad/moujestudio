<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mouje Studio - Contact</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    />

    <!-- css import -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/contact.css" />
    <!-- java import  -->
    <!-- <script src="assets/js/script.js"></script> -->

    <!-- google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <!-- icons -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- jQuery (يجب أن يكون قبل JavaScript لـ Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript لـ Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- navbar start -->
     <!-- استدعاء النافبار -->
     <?php include 'navbar.php'; ?>
    <!--  navbar end  -->



    <!-- home start -->
 
    <section class="home" id="home">
      <div class="home-content">
        <h1>Get In <span>Touch</span> </h1>
        <!-- <h3 class="text-animation">We are <span id="animated-text"></span></h3> -->


        <p> <span>Address:</span> Amir Ben Malek St., Khalda 11953
        </p>
        <p> <span>Email:</span>  moujemusic@gmail.com </p>
        <p> <span>Phone:</span>  0962796568891 </p>
      
      

      </div>
      <div class="contact-wrap home-content w-100 p-md-5 p-4">
                <h1 class="mb-4">Contact us</h1>
                  <!-- الرسائل مخفية في البداية باستخدام CSS -->
    <div id="form-message-warning" class="mb-4 message" style="display: none; color: var(--color-text);">
        There was a problem with your form. Please try again later.
    </div>
    <div id="form-message-success" class="mb-4 message" style="display: none; color: white;">
        Your message was sent, thank you!
    </div>
           <form method="POST" id="contactForm" name="contactForm" novalidate="novalidate">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message" required></textarea>
            </div>
        </div>
    </div>
    <div class="form-group mt-4">
        <input type="button" value="Send Message" class="btn" onclick="validateAndSend();">
        <div class="submitting"></div>
    </div>
</form>
              </div>
              
              <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function validateAndSend() {
    // الحصول على القيم من الحقول
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var message = document.getElementById('message').value.trim();
    var warningMessage = '';

    // التحقق من الحقول
    if (!name || !email || !message) {
        warningMessage = 'All fields are required.';
    } else if (!validateEmail(email)) {
        warningMessage = 'Please enter a valid email address.';
    }

    // إذا كان هناك تحذير، إظهاره
    if (warningMessage) {
        document.getElementById('form-message-warning').innerText = warningMessage;
        document.getElementById('form-message-warning').style.display = 'block';
        document.getElementById('form-message-success').style.display = 'none';
    } else {
        // إذا كانت البيانات صحيحة، قم بإرسال النموذج
        sendForm();
    }
}

// دالة للتحقق من صحة البريد الإلكتروني
function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function sendForm() {
    var formData = new FormData(document.getElementById('contactForm'));

    // إرسال البيانات باستخدام AJAX
    fetch('send_email.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(result => {
        if (result.trim() === 'success') {
            document.getElementById('form-message-success').style.display = 'block';
            document.getElementById('form-message-warning').style.display = 'none';
            document.getElementById('contactForm').reset(); // تفريغ المحتوى
        } else {
            document.getElementById('form-message-warning').style.display = 'block';
            document.getElementById('form-message-success').style.display = 'none';
        }
    })
    .catch(error => {
        document.getElementById('form-message-warning').style.display = 'block';
        document.getElementById('form-message-success').style.display = 'none';
    });
}
</script>

    </section>


   
    




    
    <!-- home end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
