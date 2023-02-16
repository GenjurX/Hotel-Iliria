<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="w-full h-[500px] -z-20 relative ">
        <img src="images/cover.jpg" alt="sunset" class="object-cover w-full h-[500px] brightness-50">
        <div class="absolute bottom-40 text-white w-full ">
            <span style="font-size: 70px;" class="flex justify-center">Our Gallery</span>
        </div>
    </div>
    <span class="mt-20 flex justify-center myText">Our Photos</span>
    <div class="flex flex-col mx-auto md:grid md:grid-cols-3 gap-2 md:w-[70%] mb-20">
        <img src="images/1.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/2.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/3.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/4.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/5.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/6.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/7.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/8.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/9.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/10.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/1.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/2.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/3.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/4.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">
        <img src="images/5.jpg" alt="room 1" class="w-[300px] h-[300px] mx-auto">

    </div>
    <?php include "components/footer.php" ?>

</body>


</html>