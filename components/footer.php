<div class="w-full h-[600px] md:h-[350px] bg-black">
    <div class="flex w-full flex-col gap-y-3 text-xs md:flex-row md:text-base justify-between py-12 md:px-24 px-5 border-b border-white w-full md:items-center">
        <div class="flex flex-col text-white gap-y-1">
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z" fill="rgba(255,255,255,1)" />
                </svg>
                <span>+355 (0) 69 238 6412</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z" fill="rgba(255,255,255,1)" />
                </svg>
                <span>iliria.sarande@gmail.com</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M12 20.9l4.95-4.95a7 7 0 1 0-9.9 0L12 20.9zm0 2.828l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zM12 13a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" fill="rgba(255,255,255,1)" />
                </svg>
                <span>Rruga Nacionale Sarande - Butrint Km 1, <br> 9701 Sarandë, Albania</span>
            </div>
        </div>
        <div class="hidden md:grid md:grid-cols-4 text-white">
            <a href="/">Home</a>
            <a href="/about.php">About Us</a>
            <a href="/rooms.php">Rooms</a>
            <a href="/restaurant.php">Restaurant</a>
            <a href="/gallery.php">Gallery</a>
            <a href="/contact.php">Contact</a>
            <img id="alb" value="sq" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/sq.png" width="18" height="12" alt="sq" title="Albanian">
            <img id="eng" value="en" class="trp-flag-image" src="http://hotel-iliria.al/wp-content/plugins/translatepress-multilingual/assets/images/flags/en_US.png" width="18" height="12" alt="en_US" title="English">
        </div>
        <div class="md:hidden flex justify-between">
            <a href="/" class="text-white">Home</a>
            <div x-data="{show:false}" class="md:hidden">
                <button @click="show= !show"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z" fill="rgba(255,255,255,1)" />
                    </svg>
                </button>
                <div x-show="show" class="flex flex-col absolute w-full bg-purple-700 text-white left-0 pl-5 pt-2 pb-5 space-y-2 divide-y">
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

        </div>
        <div>
            <iframe class="w-[450px] md:w-[500px] h-[150px]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d391978.57402418763!2d20.016974!3d39.866787!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc012f773828d37f1!2sHotel%20Iliria!5e0!3m2!1sen!2sus!4v1675774510252!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </div>
    <div class="flex flex-col text-xs md:text-base md:flex-row md:justify-between px-24 mt-10 text-white">
        <span class="mx-auto">Copyright © 2023 iliria</span>
        <span class="mx-auto">Powered By: Jurgen Xibrraku</span>

    </div>

</div>