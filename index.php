<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);

    $to = "twoj-email@example.com"; // Zmień na swój adres e-mail
    $subject = "Prośba o kontakt";
    $body = "Potencjalny klient chciałby porozmawiać o lockersie. Numer telefonu: $phoneNumber";
    $headers = "From: no-reply@example.com"; // Zmień na odpowiedni adres

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość wysłana pomyślnie.";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
