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

<body>
    <?php include 'components/header.php'; ?>
    <div class="w-full h-[500px] -z-20 relative ">
        <img src="images/room2.jpg" alt="sunset" class="object-cover w-full h-[500px] brightness-50">
        <div class="absolute top-40 text-white w-full ">
            <span style="font-size: 70px;" class="flex justify-center">Our Rooms</span>
            <p class="flex mx-auto text-center w-96">
                All rooms are air-conditioned and come with a balcony with either a partial or a full sea view. Each unit type comes with cable TV and a fridge, as well as a bathroom fitted with a shower. Some units include a basic kitchenette.
            </p>
        </div>
    </div>
    <span class="mt-20 flex justify-center myText">Rooms</span>
    <div class="flex flex-col space-y-5 md:space-y-0 mx-auto md:grid md:grid-cols-3 md:w-[1000px] md:border-b border-yellow-500 pb-5 gap-x-5 gap-y-5">
        <?php
        include "database.php";
        $query = 'SELECT * FROM `rooms`';
        $result = mysqli_query($conn, $query);
        ?>
        <?php if (mysqli_num_rows($result) > 0) : ?>
            <?php while ($data = mysqli_fetch_array($result)) : ?>

                <div class="mx-auto md:relative md:h-[420px]">
                    <img width="300" height="300" src="<?php echo $data['image']; ?>" alt="room1">
                    <span class="mt-2 font-bold w-52"><?php echo $data['type']; ?></span>
                    <div class="my-2"></div>
                    <div class="flex flex-col">
                        <span class="w-52"><?php echo $data['bedding']; ?></span>
                        <a class="mx-auto md:absolute md:bottom-0 " href="/reservation.php"><button class="mt-2 bttn">Book Now</button></a>
                    </div>
                </div>
        <?php endwhile;
        endif;
        mysqli_close($conn);
        ?>
    </div>
    <?php include "components/footer.php" ?>
</body>

</html>