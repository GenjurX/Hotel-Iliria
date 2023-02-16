<?php
include "database.php";
session_start();
$quantity = $_SESSION['quantity'];
$room_id = $_SESSION['room_id'];
$checkin = $_SESSION['checkin'];
$checkout = $_SESSION['checkout']; ?>

<?php
if (isset($_POST['submit']) && ($_POST['title']) && isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['card_type'])  && isset($_POST['card_number'])  && isset($_POST['card_holder'])  && isset($_POST['security_code'])  && isset($_POST['expiration'])) {

    $title = $_POST['title'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $country = $_POST['country'];
    $arrival = $_POST['arrival_time'];
    $card_type = $_POST['card_type'];
    $card_number = $_POST['card_number'];
    $card_holder = $_POST['card_holder'];
    $security_code = $_POST['security_code'];
    $expiration = $_POST['expiration'];
    $comments = $_POST['comments'];
    $total = $_SESSION['total'];

    $query1 = "INSERT INTO bookings (title,name,last_name, email,telephone,mobile, address, city, post_code, country, arrival, comments, card_type, card_number, card_holder, security_code, expiration, room_id, checkin, checkout, occupancy, total, quantity)
        VALUES ('$title','$name', '$last_name', '$email','$telephone','$mobile','$address','$city','$postcode','$country', '$arrival', '$comments', '$card_type', '$card_number', '$card_holder', '$security_code', '$expiration', '$room_id', '$checkin', '$checkout', '2','$total', '$quantity')";
    $result = mysqli_query($conn, $query1);
    if ($result) {
        echo "<script> alert( 'Booking added to Database succesfully!') </script>";
    } else {
        die(`Error: " . $sql . ":-" . mysqli_error($conn)`);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-200">
    <div class="flex justify-between px-5 py-3">
        <span style="font-size: 24px;" class="font-bold">Book Hotel Iliria</span>
        <a href="/reservation.php" class="px-3 py-1 rounded-lg bg-blue-500 text-white">Back</a>
    </div>
    <div class="flex flex-col md:flex-row mx-5 w-full">
        <div class="flex flex-col bg-white w-full md:w-1/2 border-2 border-gray-300">
            <div class="border-b-2 border-gray-300 px-5 py-2 ">
                <span style="font-size: 24px;" class="font-bold">Guest Details</span>
            </div>
            <form id="form" action="booking.php" method="POST" class="flex flex-column px-5 mb-4">
                <div class="flex justify-between mt-3 items-center">
                    <label>* Title</label>
                    <input name="title" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* First Name</label>
                    <input name="name" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Surname</label>
                    <input name="last_name" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Email</label>
                    <input name="email" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Telephone</label>
                    <input name="telephone" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Mobile</label>
                    <input name="mobile" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg">
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Address</label>
                    <textarea name="address" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg"></textarea>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>City</label>
                    <input name="city" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg">
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Postcode</label>
                    <input name="postcode" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg">
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Country of Residence</label>
                    <input name="country" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg">
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Arrival Time</label>
                    <input name="arrival_time" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg">
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>Comments</label>
                    <textarea name="comments" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg"></textarea>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Card Type</label>
                    <select name="card_type" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                    </select>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Card Number</label>
                    <input name="card_number" type="number" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Name of Card Holder</label>
                    <input name="card_holder" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Card Security Code</label>
                    <input name="security_code" type="number" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <div class="flex justify-between mt-3 items-center">
                    <label>* Expires</label>
                    <input name="expiration" type="text" class="border-2 border-gray-300 w-96 p-1 rounded-lg" required>
                </div>
                <input type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg ml-[40%] mt-4" value="Confirm Booking" />
            </form>
        </div>
        <div class="md:ml-20 w-full md:w-1/3 bg-white border-2 border-gray-300">
            <div class="border-b-2 border-gray-300 px-5 py-2 ">
                <span style="font-size: 24px;" class="font-bold">Your booking details</span>
            </div>
            <?php
            $query = "SELECT * from rooms where id= '$room_id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="px-5 mt-2">
                        <span style="font-size: 24px;" class="font-bold"> <?php echo $row['type'] ?></span>
                        <img src="<?php echo $row['image'] ?>" alt="roompic">
                        <div class="flex justify-between mt-3 font-bold">
                            <span>Check In</span>
                            <span><?php echo $checkin ?></span>
                        </div>
                        <div class="flex justify-between mt-3 font-bold">
                            <span>Check Out</span>
                            <span><?php echo $checkout ?></span>
                        </div>
                        <div class=" flex justify-between mt-3 font-bold">
                            <span>Price</span>
                            <span class="w-28 text-right">€<?php echo $row['price'] ?> per room per night</span>
                        </div>
                        <div class="flex justify-between mt-3 font-bold">
                            <span>Number of rooms</span>
                            <span><?php echo $quantity; ?></span>
                        </div>
                        <div class=" flex justify-between mt-3 font-bold">
                            <span>Total to pay</span>
                            <?php
                            $total = $row['price'] * $quantity;
                            $_SESSION['total'] = $total;
                            ?>
                            <span>€<?php echo $total; ?></span>
                        </div>
                    </div>

            <?php

                }
            }
            ?>

        </div>
    </div>
</body>

</html>