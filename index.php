if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phoneNumber = htmlspecialchars($_POST['phoneNumber']);

    $to = "Necroton18@gmail.com"; // Zmień na swój adres e-mail
    $subject = "Prośba o kontakt";
    $body = "Potencjalny klient chciałby porozmawiać o lockersie. Numer telefonu: $phoneNumber";
    $headers = "From: k.chrzanowski@gryc.com.pl"; // Zmień na odpowiedni adres

    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość wysłana pomyślnie.";
    } else {
        echo "Błąd podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
