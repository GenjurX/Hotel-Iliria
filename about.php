<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <div class="w-full h-[600px] -z-20 relative ">
        <img src="images/sunset.webp" alt="sunset" class="w-full h-[600px] brightness-50">
        <div class="absolute bottom-40 text-white w-full ">
            <span style="font-size: 70px;" class="flex justify-center">About Us</span>
        </div>
    </div>
    <div class="mt-5 flex flex-col md:flex-row md:mx-24 md:border-2 border-black items-center md:p-2">
        <div class="relative">
            <img src="images/image2.jpg" alt="room pic" class="w-[600px] h-[400px]">
            <p class="absolute ml-20 right-0 -bottom-10 bg-sky-900 text-white p-5 text-lg italic font-bold">Happiness consists of living each day as if it were the first day of you Honeymoon and the last day of your Vacation.
                Quotes</p>
        </div>
        <div class="flex flex-col mt-10 ml-10">
            <span class="font-bold text-sky-900">RELAXED & FRIENDLY</span>

            <span class="myText">Our Story</span>
            <div class="border-b border-black w-24 my-4"></div>
            <p class="font-bold mt-3 ">
                Hotel Iliria Has Been Welcoming Guests Since 7 Feb 2004.</p>
            <p class="w-[600px] mt-3">The Best Place To Start Is Always From Iliria Hotel. We Aim At Making Your Holiday An Unforgettable One With Comfort And Relaxation With Our Fantastic Rooms. We Promise You A Vacation Experience That You Will Saturate With Food, Holiday, Entertainment And Peace With Our Delicious Menus, Cheerful Staff, And Beach Dining Facility.</p>
            <a href="/reservation.php" class="bttn mt-2 w-48 text-center ">Book Now</a>
        </div>
    </div>
    <div class="grid px-5 md:grid-cols-2 md:mx-24 gap-x-24 gap-y-5 mt-24 items-center">
        <div>
            <span class="text-2xl">About Hotel Iliria</span>
            <p class="my-3">Located on the beachfront, Hotel Iliria offers an on-site restaurant serving traditional Albanian dishes, as well as a garden and a bar. Free Wi-Fi access is available. The centre of Sarandë is 500 m away.</p>
            <p>All rooms are air-conditioned and come with a balcony with either a partial or a full sea view. Each unit type comes with cable TV and a fridge, as well as a bathroom fitted with a shower. Some units include a basic kitchenette.</p>
        </div>
        <img src="images/room1.jpg" alt="room pic" class="mt-5 w-[500px] h-[350px]">
        <img src="images/hoteIliria.jpg" alt="room pic" class="mt-5 w-[500px] h-[350px]">
        <div>
            <span class="text-2xl">Location</span>
            <p class="my-3">The 16th century Lëkurësi Castle is just 1 km away and the ruins of the ancient Greek town of Phoenice can be found at a distance of 4 km. UNESCO-protected Butrint National Park is 15 km from the property.</p>
            <p>The local bus station is 500 m away, while the Ferry Port is 700 m from the Iliria. Corfu Airport can be reached by ferry and is approximately 20 km away. The property offers free parking.</p>
        </div>
        <div class="flex flex-col">
            <span class="text-2xl">Testimonials</span>
            <p class="my-3">This is our guests’ favourite part of Sarandë, according to independent reviews.</p>
            <p>Couples particularly like the location — they rated it <span class="font-bold">9.5</span> for a two-person trip.</p>
            <a href="/reservation.php" class="bttn w-44 mt-3 text-center">Book now</a>
        </div>
        <img src="images/image.jpg" alt="room pic" class="mt-5 w-[500px] h-[350px]">
    </div>

    <div class="mt-20 w-full ">
        <span class="myText flex justify-center text-center">Facilities Of Hotel Iliria
        </span>
        <div class="flex flex-col gap-y-4 ">
            <div class="center md:flex md:space-x-4 md:space-x-4 ">
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900 ">
                    <img src="images/freeparking.png" alt="parking" class="mx-auto mt-2 ">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Parking</span>
                </div>
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/restaurant.png" alt="parking" class="mx-auto  mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Restaurant</span>
                </div>
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/rooms.png" alt="parking" class=" mx-auto mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Family Rooms</span>
                </div>
            </div>
            <div class="center md:flex md:space-x-4">
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/wifi.png" alt="parking" class=" mx-auto mt-2 mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Wi-Fi</span>
                </div>
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/nonSmoking.png" alt="parking" class="mx-auto  mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Non-Smoking Rooms</span>
                </div>
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/bar.png" alt="parking" class=" mx-auto mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Bar</span>
                </div>
            </div>


        </div>

    </div>
    <a href="/reservation.php"><button class="flex mx-auto my-10 bttn">Book now</button></a>

    <?php include "components/footer.php"; ?>

</body>

</html>