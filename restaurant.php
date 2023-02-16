<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant | Hotel Iliria</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <div class="w-full h-[500px] -z-20 relative ">
        <img src="images/salad.jpg" alt="sunset" class="object-cover w-full h-[500px] brightness-50">
        <div class="absolute bottom-40 text-white w-full ">
            <span style="font-size: 70px;" class="flex justify-center">Restaurant</span>
        </div>
    </div>

    <div class="mt-20 flex flex-col md:flex-row md:mx-24 px-5 md:px-0 items-center gap-10">
        <p class="font-bold italic text-xl">” Iliria Restaurant is the right destination for food lovers. Our chef has masterfully chosen a menu to gratify all the tastes of our clients..”</p>
        <img src="images/image.jpg" alt="food" class="mt-5 w-[500px] h-[350px]">
    </div>
    <div class="w-full h-[500px] mt-10 flex flex-col md:flex-row bg-[#003B4A] items-center">
        <img src="images/italian-cuisine.jpg" alt="italian-cuisine" class="h-[50%] w-full md:h-[500px] md:w-[50%]">
        <div class="mx-auto text-center text-white italic flex flex-col mt-20 md:mt-0">
            <span style="font-size: 30px;">MEDITERRANEAN</span>
            <span style="font-size: 20px;">ITALIAN</span>
            <span>A La Carte</span>
        </div>

    </div>
    <?php include "components/footer.php" ?>

</body>

</html>