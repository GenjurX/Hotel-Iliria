<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Iliria</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<body>
    <?php include 'components/header.php'; ?>

    <div id="carouselExampleFade" class="carousel slide carousel-fade -z-10 w-full" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="images/photo1.webp" class="d-block w-100 h-[600px] brightness-50 " alt="...">
                <div class="carousel-caption text-white flex flex-col mb-44">
                    <h1 style="font-size: 70px;">Hotel Iliria</h1>
                    <span style="font-size: 24px; " class="mt-3">Welcomes you</span>
                    <span class="mt-3 -mb-5">If you are looking for a place to enjoy your vacation, then you <br> are in the right place. Book now at Hotel Iliria.</span>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/photo2.jpg" class="d-block w-100 h-[600px] brightness-50 " alt="...">
                <div class="carousel-caption text-white flex flex-col mb-44">
                    <h1 style="font-size: 60px; ">Hotel Iliria</h1>
                    <span style="font-size: 24px; " class="mt-3">Welcomes you</span>
                    <span class="mt-3 -mb-5">If you are looking for a place to enjoy your vacation, then you <br> are in the right place. Book now at Hotel Iliria.</span>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next d-none" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
            <a href="/about.php" class="border-2 border-sky-900 w-44 text-center py-2 rounded-full mt-5 hover:bg-sky-900 hover:text-white ">Learn more</a>
        </div>
        <img src="images/image.jpg" alt="room pic" class="mt-5 w-[500px] h-[350px]">
    </div>

    <div class="mt-5 flex flex-col md:flex-row md:mx-24 ">
        <div class="relative">
            <img src="images/image2.jpg" alt="room pic" class="mt-5 w-[600px] h-[400px]">
            <p class="absolute ml-20 right-0 -bottom-10 bg-sky-900 text-white p-5 text-lg italic font-bold">Happiness consists of living each day as if it were the first day of you Honeymoon and the last day of your Vacation.
                Quotes</p>
        </div>
        <div class="flex flex-col mt-20 ml-10">
            <span class="font-bold text-sky-900">RELAXED & FRIENDLY</span>

            <span class="myText">Our Story</span>
            <div class="border-b border-black w-24 my-4"></div>
            <p class="font-bold mt-3 ">
                Hotel Iliria Has Been Welcoming Guests Since 7 Feb 2004.</p>
            <p class="w-[600px] mt-3">The Best Place To Start Is Always From Iliria Hotel. We Aim At Making Your Holiday An Unforgettable One With Comfort And Relaxation With Our Fantastic Rooms. We Promise You A Vacation Experience That You Will Saturate With Food, Holiday, Entertainment And Peace With Our Delicious Menus, Cheerful Staff, And Beach Dining Facility.</p>
            <a href="/about.php" class="bttn mt-2 w-48 text-center ">Learn more</a>
        </div>
    </div>
    <div class="mt-20 w-full ">
        <span class="myText flex justify-center text-center">Facilities Of Hotel Iliria
        </span>
        <div class="flex flex-col ">
            <div class="center md:flex md:space-x-4">
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900 ">
                    <img src="images/freeparking.png" alt="parking" class="mx-auto mt-2 ">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Parking</span>
                </div>
                <div class="w-[400px] md:w-[300px] h-[200px] border-2 border-sky-900  ">
                    <img src="images/wifi.png" alt="parking" class=" mx-auto mt-2 mt-2">
                    <span class="text-2xl mt-3 text-sky-900 flex justify-center">Free Wi-Fi</span>
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

        </div>

    </div>
    <a href="/about.php"><button class="flex mx-auto mt-10 bttn">Discover more</button></a>


</body>
<span class="mt-24 flex justify-center myText">Rooms</span>

<div class="flex flex-col space-y-5 md:space-y-0 mx-auto md:grid md:grid-cols-3 md:w-[1000px]">
    <div class="mx-auto">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="my-3 border-b border-yellow-500 w-68"></div>
        <div class="flex flex-col text-center">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <a class="mx-auto " href="/rooms.php"><button class="mt-2 bttn">See all rooms</button></a>
        </div>
    </div>
    <div class="mx-auto">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="my-3 border-b border-yellow-500 w-68"></div>
        <div class="flex flex-col text-center">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <a class="mx-auto " href="/rooms.php"><button class="mt-2 bttn">See all rooms</button></a>
        </div>
    </div>
    <div class="mx-auto">
        <img width="300" height="300" src="images/room1.jpg" alt="room1">
        <span class="mt-2 ">Deluxe Double or Twin <br> Room with Sea View</span>
        <div class="my-3 border-b border-yellow-500 w-68"></div>
        <div class="flex flex-col text-center">
            <span>1 single bed and</span>
            <span>1 large double bed</span>
            <a class="mx-auto " href="/rooms.php"><button class="mt-2 bttn">See all rooms</button></a>
        </div>
    </div>
</div>
<div class="w-full h-[900px] md:h-[700px] relative mt-20">
    <img src="images/saranda.jpg" alt="bg picture" class="brightness-50 w-full h-[900px] md:h-[700px]  -z-10">
    <div class="absolute top-10 md:top-20 flex flex-col text-center mx-auto w-full ">
        <span class=" text-white font-bold ">TESTIMONIAL</span>
        <span style="font-size: 50px; " class="text-white font-bold ">What They Say</span>
    </div>
    <div class="absolute top-48 md:top-80 text-sm md:text-base gap-y-10 md:gap-y-0 flex mx-auto w-full flex-col md:flex-row md:space-x-5">
        <div class="mx-auto my-auto text-center text-white bg-black px-5 py-10 w-[400px] rounded-lg">

            <img src="images/hungary.jpg" alt="hungarian flag" class="flag">

            <p>
                Superb location, superb owner and staff; they satisfied all of our extra
                requests immediately. Very friendly and helpful people, we could make friends
                with them easily !!!! The Hotel is close to the main beach, shops, bars, etc.
                Great value for money, we can recommend it to everyone without reservation !!!!
                Good luck to them and promise to return the soonest !!
            </p>
            <span class="mt-8">GYÖRGY</span>
        </div>
        <div class="mx-auto my-auto text-center text-white bg-black px-5 py-10 w-[400px] rounded-lg">

            <img src="images/brazil.jpg" alt="hungarian flag" class="flag">

            <p>
                It was a very good experience. The hosts are very nice and helpful, they indicated some nice places to visit. The room was very clean and comfortable. The price is fair for what it offers. The location is good, near the food center. The host told we were the first brazilians guests 🙂
            </p>
            <span class="mt-8">NELSON</span>
        </div>
        <div class="mx-auto my-auto text-center text-white bg-black px-5 py-10 w-[400px] rounded-lg">

            <img src="images/albania.jpg" alt="hungarian flag" class="flag">
            <p>
                I liked the position of the hotel in relation to the city center and, above all, the proximity and the quality of the beach in front of the hotel. To be noted, also, the hospitality and the friendship of the whole staff.
            </p>
            <span class="mt-8">ENGJELL</span>
        </div>
    </div>
</div>
<?php include "components/footer.php" ?>

</html>