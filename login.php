<?php
// Sprawdzenie czy formularz został wysłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sprawdzenie czy dane logowania są poprawne
    if ($username == "admin" && $password == "1234") {
        // Jeśli dane są poprawne, przekieruj użytkownika na inną stronę
        header("Location: welcome.php");
    } else {
        // Jeśli dane są niepoprawne, wyświetl komunikat o błędzie
        echo "Niepoprawna nazwa użytkownika lub hasło. Spróbuj ponownie.";
    }
}
?>