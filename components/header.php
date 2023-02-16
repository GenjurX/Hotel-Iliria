<nav class="px-24 py-4 flex justify-between items-center text-white absolute top-0 w-full  lg:text-base z-30">
    <a href="/"><img width="205" height="21" src="http://hotel-iliria.al/wp-content/uploads/2022/09/hotel-iliria-205x21.png" class="custom-logo" alt="iliria" decoding="async" srcset="" sizes="(max-width: 205px) 100vw, 205px"></a>
    <div class="hidden text-sm flex space-x-3 flex-nowrap items-center lg:flex">

        <a href="/">Home</a>
        <a href="/about.php">About Us</a>
        <a href="/rooms.php">Rooms</a>
        <a href="/restaurant.php">Restaurant</a>
        <a href="/gallery.php">Gallery</a>
        <a href="/contact.php">Contact</a>
        <img id="alb" value="sq" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/sq.png" width="18" height="12" alt="sq" title="Albanian">
        <img id="eng" value="en" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png" width="18" height="12" alt="en_US" title="English">
    </div>

    <a href="/reservation.php"><button class="hidden lg:inline border border-white px-5 py-2 font-bold hover:bg-white hover:text-black">Reservation</button></a>
    <div x-data="{show:false}" class="lg:hidden">
        <button @click="show= !show"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                <path fill="none" d="M0 0h24v24H0z" />
                <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" fill="rgba(255,255,255,1)" />
            </svg>
        </button>
        <div x-show="show" class="flex flex-col absolute w-full bg-white text-black left-0 pl-5 pt-2 pb-5 space-y-2 divide-y">
            <a href="/">Home</a>
            <a href="/about.php">About Us</a>
            <a href="/rooms.php">Rooms</a>
            <a href="/restaurant.php">Restaurant</a>
            <a href="/gallery.php">Gallery</a>
            <a href="/contact.php">Contact</a>
            <a class="my-2"><img id="alb" value="sq" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/sq.png" width="18" height="12" alt="sq" title="Albanian"></a>
            <a class="my-2"><img id="eng" value="en" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png" width="18" height="12" alt="en_US" title="English"></a>

        </div>
    </div>
</nav>