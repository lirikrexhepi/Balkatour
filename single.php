<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BalkaTour</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>

</head>

<body>

    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a>
                    <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get started</a>
                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Company</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Marketplace</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Features</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Team</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="flex justify-center mb-40">
        <div class="lg:w-4/6 w-5/6 mt-8">
            <h1 class="lg:text-3xl text-2xl font-semibold">Luxury villa with stunning views & infinity pool</h1>
            <div class="flex flex-row justify-between mb-6">
                <a target="_blank" class="my-2 block font-semibold underline " href="https://maps.google.com/?q=Radovići, Opština Tivat, Montenegro">Radovići, Opština Tivat, Montenegro</a>
                <!--Share Icon-->
                <a class="flex flex-row justify-center mt-5" href="javascript:void(0);" onclick="copyToClipboard()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                    </svg>
                    <span>Share</span>
                </a>
            </div>
            <div class="grid gap-2 grid-cols-[2fr_1fr]">
                <div>
                    <div>
                        <img class="aspect-square object-cover rounded-l-xl" src="assets/images/img1.png" alt="Main Image">
                    </div>
                </div>

                <div class="grid gap-2">
                    <img class="aspect-square object-cover rounded-tr-xl" src="assets/images/img2.png" alt="Main Image">
                    <div class="overflow-hidden">
                        <img class="aspect-square object-cover rounded-br-xl" src="assets/images/img3.png" alt="Main Image">
                    </div>
                </div>
            </div>

            <!--Description-->
            <div class="mt-10 flex lg:flex-row flex-col gap-4">
                <!--The Information div-->
                <div class="sm:w-2/3 w-full">
                    <h1 class="text-xl font-semibold mb-4">Description</h1>
                    <p>
                        Refugio San Felipe is located inside the finca San Felipe, in the sidewalk Buenos Aires, this spectacular space is surrounded by a beautiful landscape, with a spectacular view of the Colombian Andes. It is located just an hour and a half from Bogota or 20 minutes from the town of La Calera.
                        <br><br>
                        Here you can find peace, tranquility, and disconnect completely from the city. Perfect for couples looking for privacy and harmony with nature.
                    </p>
                    <hr class="mt-4">

                    <div class="mt-10">
                        <h1 class="text-xl font-semibold ">What this place offers</h1>

                        <ul class="grid grid-cols-3 gap-6 mt-8">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.288 15.038a5.25 5.25 0 017.424 0M5.106 11.856c3.807-3.808 9.98-3.808 13.788 0M1.924 8.674c5.565-5.565 14.587-5.565 20.152 0M12.53 18.22l-.53.53-.53-.53a.75.75 0 011.06 0z" />
                                </svg>
                                <span>
                                    Wifi
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                                </svg>

                                <span>
                                    Parking
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
                                </svg>

                                <span>
                                    Heating
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 20.25h12m-7.5-3v3m3-3v3m-10.125-3h17.25c.621 0 1.125-.504 1.125-1.125V4.875c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                                <span>
                                    Tv
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>

                                <span>
                                    Lightning Proof
                                </span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
                                </svg>

                                <span>
                                    Printer
                                </span>
                            </li>
                        </ul>

                    </div>
                </div>

                <!--The checkout div-->
                <div class="lg:w-1/3 w-full lg:h-[43vh] md:h-[50vh] h-[52vh] mt-4 border border-bg-black rounded-lg shadow-lg p-6">
                    <p class="font-semibold"><span class="text-gray-500 line-through">$1,353</span> $1,802 <span class="font-light text-sm">night</span></p>

                    <div class="flex flex-col gap-4">
                        <div class="flex flex-row mt-6 gap-2">
                            <div class="w-1/2">
                                <label class="block text-gray-600">Check-In</label>
                                <input type="date" class="border rounded-md px-3 py-2 w-full">
                            </div>
                            <div class="w-1/2">
                                <label class="block text-gray-600">Check-Out</label>
                                <input type="date" class="border rounded-md px-3 py-2 w-full">
                            </div>
                        </div>
                        <div class="w-full border rounded-md">
                            <label class="block text-gray-600 px-3 pt-2">Guests:</label>
                            <input type="number" class="border-none px-3 py-2 w-full" min="1" placeholder="Enter number of guests" />
                        </div>

                    </div>

                    <button class="rounded-lg w-full h-10 bg-cyan-500 mt-8 text-white">Reserve</button>
                    <p class="text-center mt-2 font-light text-sm text-black mb-6">You won't be charged yet</p>

                    <hr>
                    <p class="font-semibold mt-4 w-full flex flex-row justify-between">
                        <span class="text-black">Total before taxes</span>
                        <span class="text-black">$2,065</span>
                    </p>



                </div>
            </div>

            <!--The reviews div-->
            <hr class="mt-4">
            <div class="mt-10">
                <h1 class="text-xl font-semibold">Reviews</h1>
                <div class="md:flex md:flex-wrap -mx-4">
                    <!--For each loop-->
                    <div class="w-full md:w-1/2 px-4 mt-6">
                        <p class="font-medium text-lg">Lirik Rexhepi</p>
                        <p class="font-light text-sm mb-2">August 2023</p>
                        <p>
                            Everything was great. Carrie is friendly. She always responded quickly. She made us a nice surprise and responded our requests.
                            The villa is fully equipment and so clean. The villa is in the countryside and ecological. There is so mosquitos around here.
                            Because of this Carrie gave us mosquito repellent. We had a great time at the villa.
                        </p>
                    </div>

                    <div class="w-full md:w-1/2 px-4 mt-6">
                        <p class="font-medium text-lg">Leart Ramadani</p>
                        <p class="font-light text-sm mb-2">August 2023</p>
                        <p>
                            We stayed at Carrie’s house for 6 nights and it was the most beautiful house with the most amazing view we ever stayed at.
                            The beds were all very comfortable and the interior was more than beautiful. You immediately notice the love she put into this place!
                        </p>
                    </div>

                    <div class="w-full md:w-1/2 px-4 mt-6">
                        <p class="font-medium text-lg">Edonis Bislimi</p>
                        <p class="font-light text-sm mb-2">August 2023</p>
                        <p>
                            Superb villa in a fantastic place, where we enjoyed the view, swimming pool and its surroundings with two families for a week.
                            The villa is located on the Lustica Peninsula, on the bay of Kotor, and is a short drive from several nice bays and beaches.
                            Carrie is a friendliest host, who is always ready for you remotely.
                        </p>
                    </div>

                    <div class="w-full md:w-1/2 px-4 mt-6">
                        <p class="font-medium text-lg">Vesa Susuri</p>
                        <p class="font-light text-sm mb-2">August 2023</p>
                        <p>
                            Carrie was an absolutely amazing host. Always on hand to help us and offer advice. So, so helpful! The next-door neighbor went above and beyond to help us, so kind.
                            I cannot recommend Carrie's place enough. It really is the most perfect house and perfect setting for a truly perfect holiday. Hopefully one day we’ll be back.
                        </p>
                    </div>
                </div>
            </div>



            <hr class="mt-4">
            <div class="mt-10">
                <h1 class="text-xl font-semibold mb-4">Where you'll be</h1>
                <iframe class="w-full h-96" frameborder="0" style="border:0" src="https://www.google.com/maps?q=Radovići, Opština Tivat, Montenegro&output=embed" allowfullscreen loading="lazy"></iframe>

            </div>
            <a target="_blank" class="my-2 block font-semibold underline " href="https://maps.google.com/?q=Radovići, Opština Tivat, Montenegro">Radovići, Opština Tivat, Montenegro</a>

        </div>
    </div>




    <script src="js/single.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>