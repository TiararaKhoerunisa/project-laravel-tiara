<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaTicket</title>
    <script src="@vite('resources/css/app.css')"></script>

</head>
<body class="bg-light-pink">
    <header class="bg-dark-gray text-white py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">CinemaTicket</h1>
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">About</a></li>
                <li><a href="#" class="hover:text-gray-300">Movies</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container mx-auto mt-8">
        <section class="text-center py-16">
            <h2 class="text-4xl font-bold mb-4">Welcome to CinemaTicket</h2>
            <p class="mb-8">Book your favorite movies easily!</p>
            <button class="bg-red text-white px-6 py-2 rounded-md hover:bg-opacity-90">Book Now</button>
        </section>

        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">About Us</h2>
            <p class="text-center">Kami menyediakan cara termudah untuk memesan tiket film secara online. Nikmati film favorit Anda di bioskop kami yang nyaman.</p>
        </section>

        <section class="mb-16">
            <h2 class="text-3xl font-bold text-center mb-8">Now Showing</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="assets/image/azamine.jpeg" alt="Azzamine" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Azzamine</h3>
                        <p class="text-gray-700 mb-4">Drama | 1 jam 44 menit</p>
                        <button class="bg-red text-white px-4 py-2 rounded-md hover:bg-opacity-90">Buy Ticket</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="assets/image/spiderman.jpeg" alt="Spiderman" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Spiderman</h3>
                        <p class="text-gray-700 mb-4">Action | 2 jam 1 menit</p>
                        <button class="bg-red text-white px-4 py-2 rounded-md hover:bg-opacity-90">Buy Ticket</button>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="assets/image/kukirakaurumah.jpg" alt="Kukira Kau Rumah" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2">Kukira Kau Rumah</h3>
                        <p class="text-gray-700 mb-4">Drama | 1 jam 30 menit</p>
                        <button class="bg-red text-white px-4 py-2 rounded-md hover:bg-opacity-90">Buy Ticket</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
            <p>Email: ramine@cinematicket.com</p>
            <p>Phone: +628122951797979</p>
        </section>
    </main>
</body>
</html>