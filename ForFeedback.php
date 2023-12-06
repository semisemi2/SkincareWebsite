<php>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $message = $_POST["message"];


    echo "<h2>Form Data</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    
    header("Location: ContactForm.html");
    exit();
}
</php>
