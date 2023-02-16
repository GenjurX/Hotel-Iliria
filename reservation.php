<?php session_start(); ?>
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
    <?php include "components/header.php"; ?>
    <div id="carouselExampleIndicators" class="carousel slide relative">
        <div id="google_translate_element" class="hidden md:inline absolute top-20 left-20 z-50"></div>
        <div class="carousel-indicators">
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
            <button style="border-radius: 50%; height: 20px; width: 20px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
        </div>
        <div class="carousel-inner">
            <?php include "database.php";
            $query = 'SELECT image from `rooms`';
            $result = mysqli_query($conn, $query);
            ?>
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <div class="carousel-item active">
                        <img src="<?php echo $data['image'] ?>" class="d-block w-full h-[600px] object-cover" alt="room pictures">
                    </div>
            <?php endwhile;
            endif;
            mysqli_close($conn);
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="absolute bottom-20 flex w-full justify-between bg-white p-4">
            <form action="reservation.php" method="post" class="flex space-x-5 mx-auto">
                <div class="flex flex-col">
                    <label>Check-in</label>
                    <input class="border-2 border-black p-2 w-52" type="date" name="checkin" id="checkin" value="checkin">
                </div>
                <div class="flex flex-col">
                    <label>Check-out</label>
                    <input class="border-2 border-black p-2 w-52" type="date" name="checkout" id="checkout" value="checkout">
                </div>
                <div>
                    <button type="submit" class="mt-4 md:py-2 py-1 px-2 text-xs md:text-base md:px-4 rounded-full border-2 border-sky-900 bg-sky-900 hover:bg-sky-800 text-white">Check Availability</button>
                </div>
            </form>
        </div>
    </div>
    <div class="flex flex-col mt-10 px-5">

        <?php
        if (isset($_POST['checkin']) && isset($_POST['checkout']) && ($_POST['checkin'] < $_POST['checkout'])) {
            $_SESSION['checkin'] = $_POST['checkin'];
            $_SESSION['checkout'] = $_POST['checkout'];
        }
        if (isset($_SESSION['checkin']) && isset($_SESSION['checkout'])) {
            include "database.php";
            $query = "SELECT * FROM `rooms` where available >0 ";
            $result = mysqli_query($conn, $query);
        ?>
            <?php if (mysqli_num_rows($result) > 0) : ?>
                <?php while ($rooms = mysqli_fetch_assoc($result)) : ?>
                    <div class="border-2 border-gray-200 w-full mb-4 bg-white">
                        <div class="border-b-2 border-gray-200 w-full py-2 px-4">
                            <span><?php echo $rooms['type']; ?></span>
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between mt-4 px-4 relative">
                            <img src="<?php echo $rooms['image']; ?>" alt="roomPic" class="md:w-[450px] md:h-[450px] w-[300px] h-[300px] justify-center md:justify-start mb-4">
                            <div class="flex flex-col  w-52">
                                <form method="GET" id="form">
                                    <select onChange="form_submit()" class="border-2 border-black px-4 py-2 w-full" name="quantity" aria-placeholder="Quantity">

                                        <option value="">Quantity</option>
                                        <?php $quantity = $rooms['available'];
                                        for ($i = 1; $i <= $quantity; $i++) : ?>
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                        <?php endfor; ?>
                                    </select>

                                </form>
                                <div class="mt-5 flex flex-col md:text-right font-bold md:text-xl">
                                    <span>Checkin: <?php echo $_SESSION['checkin']; ?></span>
                                    <span>Checkout: <?php echo $_SESSION['checkout']; ?></span>

                                </div>
                                <script>
                                    function form_submit() {
                                        document.getElementById("form").submit();
                                    }
                                </script>

                                <?php
                                $_SESSION['room_id'] = $rooms['id'];
                                if (isset($_GET['quantity']) && isset($_GET['quantity'])) {
                                    $no_of_rooms = $_GET['quantity'];
                                } else {
                                    $no_of_rooms = 1;
                                }
                                $_SESSION['quantity'] = $no_of_rooms;
                                ?>

                                <span class="font-bold md:text-2xl md:text-right mt-4 mb-4">€ <?php echo $rooms['price']; ?>.00 per night</span>
                                <a class="px-5 py-2 bg-blue-500 text-white rounded-lg text-center absolute bottom-5 right-5" href="/booking.php?quantity=<?php echo $no_of_rooms; ?>">Book Now</a>
                            </div>
                        </div>
                    </div>
        <?php endwhile;
            endif;
            mysqli_close($conn);
        }
        ?>
    </div>
    <div class=" mx-3 pb-5">
        <iframe class="w-full " src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d437651.8853882486!2d20.005745623600944!3d39.8676794256276!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1676481217227!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>

<script type=" text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</html>