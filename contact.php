<?php
include "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];

    $sql = "INSERT INTO feedback (name,email,subject, message) 
            VALUES ('$name','$email','$subject', '$message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script> alert( 'Feedback added to Database succesfully!') </script>";
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-200">
    <?php include 'components/header.php'; ?>
    <div class="w-full h-[500px] -z-20 relative ">
        <img src="images/cover.jpg" alt="sunset" class="object-cover w-full h-[500px] brightness-50">
        <div class="absolute bottom-40 text-white w-full ">
            <span style="font-size: 70px;" class="flex justify-center">Contact Us</span>
        </div>
    </div>
    <div class="mt-20 flex flex-column justify-center text-center gap-y-5 ">
        <span>OUR LOCATION</span>
        <span style="font-size: 20px;" class="font-bold">Rruga Nacionale Sarande - Butrint Km 1, 9701 Sarandë, Albania</span>
        <a href="/reservation.php" class="bttn text-center w-44 center">Book Now</a>
        <span>TELEPHONE RESERVATIONS</span>
        <span style="font-size: 45px;" class="font-bold">+355 (0) 69 238 641</span>
        <span>iliria.sarande@gmail.com</span>

    </div>

    <div class="md:h-[600px] w-full flex flex-col md:flex-row mt-10 mb-20">
        <iframe class="w-[100%] md:w-[50%] h-[400px] md:h-[600px]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6124.665219127932!2d20.016974!3d39.866787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc012f773828d37f1!2sHotel%20Iliria!5e0!3m2!1sen!2sus!4v1675808282536!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="flex flex-col mx-auto w-[500px]">
            <span style="font-size: 30px;" class="mb-10 font-bold">Send us a message</span>
            <form action="contact.php" method="POST" class="flex flex-col w-[100%]">
                <label class="mb-1">Your name</label>
                <input class="p-2 border border-black" type="text" name="name" required>
                <label>Your email</label>
                <input class="p-2 border border-black" type="email" name="email" required>
                <label>Subject</label>
                <input class="p-2 border border-black" type="text" name="subject" required>
                <label>Your message (optional)</label>
                <textarea class="p-2 border border-black" name="message" cols="30" rows="10"></textarea>
                <input type="submit" class="mt-3 px-5 py-2 border-2 border-black text-center w-44 hover:bg-black hover:text-white" value="Submit">
            </form>
        </div>
    </div>
    <?php include "components/footer.php" ?>

</body>

</html>