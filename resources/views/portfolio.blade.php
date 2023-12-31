@extends('layouts.main')

@section('content')
    {{-- <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">Tantowi Shah</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line origin-top-left"></span>
                        <span class="hamburger-line"></span>
                        <span class="hamburger-line  origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:dark:bg-transparent dark:bg-dark dark:shadow-slate-700">
                        <ul class="block lg:flex ">
                            <li class="group">
                                <a href="#home" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Home</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">About</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#clients" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Clients</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="font-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white">Contact</a>
                            </li>
                            <li class="mt-3 flex items-center pl-8 lg:mt-0">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate-500">light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle">
                                    <label for="dark-toggle">
                                        <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-in-out"></div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500">dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Header End --> --}}

    <!-- Hero Section Start -->
    <section id="home" class="pt-16 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base font-semibold text-primary md:text-xl">Hello Everyone 👋, i'm <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl dark:text-white">Tantowi Shah</span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Software Engineering <span class="text-dark dark:text-white">Student</span></h2>
                    <p class="font-medium text-secondary mb-10 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci ipsum qui asperiores veritatis voluptatem quod, fugit architecto aspernatur beatae <span class="text-dark font-bold dark:text-white">sunt!</span></p>

                    <!-- Contact Me -->
                    <a href="https://www.linkedin.com/in/tantowi-shah-hanif-756398138/" target="_blank" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full shadow-lg hover:bg-teal-600 hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                </div>
                
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative lg:right-0">
                        <img src="{{ asset('img/tanto.png') }}" alt="" class="max-w-full mx-auto relative z-[10]">
                        <span class="absolute bottom-0 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#14b8a6" d="M34.9,-39.9C44,-25.8,49.3,-12.9,53,3.7C56.7,20.3,58.8,40.5,49.7,48.8C40.5,57,20.3,53.1,2.2,50.9C-15.8,48.6,-31.5,48,-43.1,39.8C-54.7,31.5,-62.1,15.8,-63.3,-1.2C-64.4,-18.1,-59.4,-36.2,-47.8,-50.3C-36.2,-64.4,-18.1,-74.6,-2.6,-71.9C12.9,-69.3,25.8,-54,34.9,-39.9Z" transform="translate(100 100) scale(1.2)" />
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold uppercase text-primary text-lg">About Me</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md dark:text-white">I'm a Software Engineering student from Indonesia</h2>
                    <p class="font-medium text-base text-secondary max-w-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dicta neque nemo consequuntur pariatur quibusdam sapiente at ipsam nihil explicabo, non deleniti minus aliquid praesentium. Odit sit fuga adipisci voluptatibus.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2 mt-7">
                    <h3 class="font-bold text-dark text-3xl mb-4 max-w-md dark:text-white">Let's Connect</h3>
                    <p class="font-medium text-base text-secondary max-w-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus nesciunt similique, amet veniam hic facere sequi officiis accusantium possimus, delectus quisquam quidem? Nisi ipsa reprehenderit perferendis consequuntur itaque. Dolorum voluptate dignissimos, excepturi quaerat nihil enim possimus.</p>
                    <div class="flex items-center mt-4">
                        <a href="https://www.linkedin.com/in/tantowi-shah-hanif-756398138/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="https://www.instagram.com/tantowi_sh/?hl=id" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                        </a>
                        <a href="https://github.com/tantowish" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                            <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Portofolio Section Start -->
    <section id="portfolio" class="pt-36 pb-16 bg-slate-100 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Portfolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Latest Project</h2>
                    <p class="font-medium text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo animi, labore eveniet sapiente dolores veniam?</p>
                </div>
            </div>

            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto ">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                        <img src="../dist/img/portfolio/1.jpg" alt="Hotel" width="w-full"/>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Landing Page Toshka Hotel</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                        <img src="../dist/img/portfolio/2.jpg" alt="Hotel" width="w-full"/>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Github Page</h3>
                    <p class="font-medium text-base text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit odit eius sequi exercitationem iure, impedit vel fugiat enim esse. Et optio, harum repellendus amet laudantium ab reiciendis similique necessitatibus!</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                        <img src="../dist/img/portfolio/2.jpg" alt="Hotel" width="w-full"/>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Landing Page Toshka Hotel</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden dark:shadow-slate-700">
                        <img src="../dist/img/portfolio/1.jpg" alt="Hotel" width="w-full"/>
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Landing Page Toshka Hotel</h3>
                    <p class="font-medium text-base text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque magni, totam adipisci inventore sint incidunt.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portofolio Section End -->

    <!-- Clients Section Start -->
    <section id="clients" class="pt-36 pb-32 bg-slate-700 dark:bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Clients</h4>
                    <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-dark">We have worked together</h2>
                    <p class="font-medium text-slate-400 md:text-lg dark:text-slate-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo animi, labore eveniet sapiente dolores veniam?</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap justify-center items-center">
                    <a href="google.com" target="_blank" class="max-w-[100px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('/img/clients/google.svg') }}" alt="Google">
                    </a>
                    <a href="google.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('/img/clients/gojek.svg') }}" alt="Google">
                    </a>
                    <a href="google.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('/img/clients/grab.svg') }}" alt="Google">
                    </a>
                    <a href="google.com" target="_blank" class="max-w-[120px] mx-4 py-4 opacity-60 grayscale transition duration-500 hover:grayscale-0 hover:opacity-100 lg:mx-6 xl:mx-8">
                        <img src="{{ asset('/img/clients/tokopedia.svg') }}" alt="Google">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients Section Start -->

    <!-- Blog Section Start -->
    <section id="blog" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Blog</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Latest <Article></Article></h2>
                    <p class="font-medium text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo animi, labore eveniet sapiente dolores veniam?</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3 justify-center">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                        <img src="https://source.unsplash.com/360x200?programming" alt="Programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Tips Belajar Programming</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi, similique quia molestiae tenetur quisquam dicta, ab nihil impedit sequi aliquam? A nisi tempora quis incidunt architecto itaque earum omnis?</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                        <img src="https://source.unsplash.com/360x200?ampera" alt="Ampera" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Sejarah Ampera</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam illo minima eligendi corporis reiciendis similique!</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 dark:bg-slate-800 dark:shadow-slate-700">
                        <img src="https://source.unsplash.com/360x200?CSGO" alt="Programming" class="w-full">
                        <div class="py-8 px-6">
                            <h3>
                                <a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate dark:text-white">Tutorial Smokes One-Way CSGO</a>
                            </h3>
                            <p class="font-medium text-base text-secondary mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eligendi, similique quia molestiae tenetur quisquam dicta, ab nihil impedit sequi aliquam? A nisi tempora quis incidunt architecto itaque earum omnis?</p>
                            <a href="#" class="font-medium text-sm bg-primary py-2 px-4 rounded-lg text-white hover:opacity-80">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    <div class="section pt-36 pb-32 dark:bg-slate-800" id="contact">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 uppercase">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl dark:text-white">Contact Us<Article></Article></h2>
                    <p class="font-medium text-secondary md:text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo animi, labore eveniet sapiente dolores veniam?</p>
                </div>
            </div>
            <form class="w-full lg:w-2/3 lg:mx-auto">
                <div class="w-full mb-8 px-4">
                    <label for="name" class="text-base text-primary font-bold">Name</label>
                    <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="email" class="text-base text-primary font-bold">Email</label>
                    <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"/>
                </div>
                <div class="w-full mb-8 px-4">
                    <label for="messege" class="text-base text-primary font-bold">Messege</label>
                    <textarea type="messege" id="messege" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32"></textarea>
                </div>
                <div class="w-full px-4">
                    <button class="text-base font-semibold w-full text-white bg-primary py-3 px-8 rounded-full hover:opacity-80
                    hover:shadow-lg transition duration-300">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">WPT</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Us</h3>
                    <p>Tantowi Shah Hanif</p>
                    <p>Jl. Sendowo No.136</p>
                    <p>Sleman, Yogyakarta</p>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Article Category</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-2">Programming</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-2">Ampera</a>
                        </li>
                        <li>
                            <a href="#" class="inline-block text-base hover:text-primary mb-2">CSGO</a>
                        </li>
                    </ul>
                </div>
                <div class="w-full px-4 mb-12 md:w-1/3">
                    <h3 class="font-semibold text-xl text-white mb-5">Link</h3>
                    <ul class="text-slate-300">
                        <li>
                            <a href="#home" class="inline-block text-base hover:text-primary mb-2">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="inline-block text-base hover:text-primary mb-2">About</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="inline-block text-base hover:text-primary mb-2">Portfolio</a>
                        </li>
                        <li>
                            <a href="#clients" class="inline-block text-base hover:text-primary mb-2">Clients</a>
                        </li>
                        <li>
                            <a href="#blog" class="inline-block text-base hover:text-primary mb-2">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full pt-10 border-t border-slate-800">
                <div class="flex items-center justify-center mb-5">
                    <a href="https://www.linkedin.com/in/tantowi-shah-hanif-756398138/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                        <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/tantowi_sh/?hl=id" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                        <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                    <a href="https://github.com/tantowish" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white transition ease-in-out duration-300">
                        <svg class="fill-current" width="20" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                </div>
                <div>
                    <p class="font-medium text-xs text-slate-500 text-center ">Dibuat oleh <a href="https:/linkedin.com/in/tantowi-shah-hanif-756398138/" target="_blank" class="text-primary font-bold">Tantowi Shah</a>, menggunakan <a href="https:/tailwindcss.com" target="_blank" class="font-bold text-sky-500">Tailwind CSS.</a>Tailwind CSS.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top start -->
    <a href="#home" class="h-10 w-10 rounded-full fixed z-[9990] bg-primary bottom-4 right-4 hidden justify-center items-center hover:animate-pulse lg:h-14 lg:w-14 lg:bottom-5 lg:right-5" id="top">
        <span class="block w-3 h-3 border-t-2 border-l-2 rotate-45 mt-1 lg:w-4 lg:h-4 lg:mt-2"></span>
    </a>
    <!-- Back to top end -->

    <script src="../dist/js/script.js"></script>    
@endsection
