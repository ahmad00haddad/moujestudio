<?php
// إعدادات البريد الإلكتروني
$to = "ahmad000haddad@gmail.com";
$subject = "New msg - your website";

// تحقق من وجود البيانات المطلوبة
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // تنسيق محتوى الرسالة باستخدام HTML
    $body = '
    <html>
    <head>
        <style>
      
            .wrapper {
                padding: 2em;
                background-color: #4a5aa77d;
                border-radius: 10px;
                box-shadow: 0 0 25px var(--color-primary), 0 0 50px var(--color-primary),
                    0 0 100px var(--color-primary);
    color: #fbfbfb !important;
            }
            .heading {
                    font-size: 1.5rem;
    color: #fbfbfb;
    margin-bottom: 1em;
            }
            .info {
                font-size: 1.2rem;
                color: #fbfbfb !important;
                margin-bottom: 0.5em;
            }
            .info strong {
                color: #0c0c0c;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h1 class="heading">New Message from Contact Form</h1>
            <div class="info">
                <strong>Name:</strong> ' . $name . '<br>
                <strong>Email:</strong> ' . $email . '<br>
                <strong>Message:</strong><br>' . nl2br($message) . '
            </div>
        </div>
    </body>
    </html>';

    // إعدادات البريد الإلكتروني
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // إرسال البريد
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
