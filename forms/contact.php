<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Ganti dengan alamat email tujuan
    $to = "fikrisidiq22@gmail.com";

    $email_subject = "Pesan dari $name: $subject";
    $email_body = "Anda telah menerima pesan baru.\n\n" .
                  "Nama: $name\n" .
                  "Email: $email\n" .
                  "Subjek: $subject\n" .
                  "Pesan:\n$message";

    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "Invalid request";
}
?>
