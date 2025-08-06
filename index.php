<?php include 'layouts/header.php'; ?>

<section id="home" class="min-h-screen flex items-center justify-center pt-20 md:pt-20 px-5 sm:px-20">
    <div class="container mx-auto max-w-7xl px-0 py-0 md:py-24 flex flex-col md:flex-row items-center gap-2">
        <!-- Image Content - Will appear first on mobile/tablet -->
        <div class="md:w-1/2 lg:w-2/5 xl:w-1/2 flex justify-center relative order-1 md:order-2 mb-10 md:mb-0">
            <div class="relative w-full max-w-md xl:max-w-lg aspect-[9/11] group perspective-1000">
                <!-- Floating gradient background elements -->
                <div
                    class="absolute inset-0 bg-gradient-to-br from-primary-light/10 dark:from-primary-dark/10 to-accent-light/10 dark:to-accent-dark/10 rounded-2xl blur-xl animate-pulse-slow z-0">
                </div>
                <div
                    class="absolute inset-4 bg-gradient-to-br from-primary-light/5 dark:from-primary-dark/5 to-accent-light/5 dark:to-accent-dark/5 rounded-xl blur-lg animate-pulse-slow z-0">
                </div>

                <!-- Main image container -->
                <div
                    class="relative w-full h-full overflow-hidden rounded-2xl shadow-2xl border-2 border-primary-light/20 dark:border-primary-dark/20 
                            group-hover:border-primary-light/40 dark:group-hover:border-primary-dark/40 transition-all duration-500 transform group-hover:-translate-y-2 z-10">
                    <img src="assets/images/shivampic1.png" alt="Professional Portrait of Shivam Mishra"
                        class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700 ease-out"
                        loading="eager" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-dark-light/40 dark:from-dark-dark/40 via-transparent to-transparent">
                    </div>
                </div>

                <!-- Decorative floating elements -->
                <div class="absolute -bottom-3 -left-3 w-16 h-16 bg-accent-light/20 dark:bg-accent-dark/20 rounded-lg rotate-45 animate-float transition-all 
                            duration-300 group-hover:opacity-80 z-20 hidden sm:block"></div>
                <div class="absolute -top-3 -right-3 w-12 h-12 bg-secondary-light/20 dark:bg-secondary-dark/20 rounded-lg rotate-12 animate-float-delay 
                            transition-all duration-300 group-hover:opacity-80 z-20 hidden sm:block"></div>

                <!-- Glow effect -->
                <div class="absolute inset-0 rounded-2xl pointer-events-none opacity-0 group-hover:opacity-100 
                            transition-opacity duration-500 z-30"
                    style="box-shadow: 0 0 100px 20px rgba(79, 70, 229, 0.2);"></div>
                <div class="dark:hidden absolute inset-0 rounded-2xl pointer-events-none opacity-0 group-hover:opacity-100 
                            transition-opacity duration-500 z-30"
                    style="box-shadow: 0 0 100px 20px rgba(99, 102, 241, 0.2);"></div>
            </div>
        </div>

        <!-- Text Content - Will appear second on mobile/tablet -->
        <div class="md:w-1/2 lg:w-3/5 xl:w-1/2 space-y-6 md:space-y-8 text-center md:text-left order-2 md:order-1">
            <div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-4">
                    <span class="gradient-text bg-clip-text text-transparent">
                        Shivam Mishra
                    </span>
                </h1>
                <h2 class="text-xl sm:text-2xl md:text-3xl font-semibold text-gray-600 dark:text-gray-300">
                    Full Stack Developer
                </h2>
            </div>

            <p class="text-lg sm:text-xl text-gray-500 dark:text-gray-400 max-w-2xl mx-auto md:mx-0 leading-relaxed">
                I build exceptional digital experiences with PHP, Laravel, and modern web technologies. Currently
                crafting web solutions at IPH Technology.
            </p>

            <div class="flex flex-row gap-4 justify-center md:justify-start">
                <a href="#contact"
                    class="w-auto px-8 py-3.5 bg-gradient-to-r from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark rounded-full font-medium hover:opacity-90 transition-all 
                       text-white shadow-lg shadow-primary-light/30 dark:shadow-primary-dark/30 hover:shadow-primary-light/40 dark:hover:shadow-primary-dark/40 text-center">
                    Get In Touch
                </a>
                <!-- View CV Button -->
                <a onclick="openModal()" role="button"
                    class="w-auto px-8 py-3.5 border-2 border-primary-light/30 dark:border-primary-dark/30 text-primary-light dark:text-primary-dark rounded-full font-medium hover:bg-primary-light/5 dark:hover:bg-primary-dark/5 transition-all hover:border-primary-light/50 dark:hover:border-primary-dark/50 shadow hover:shadow-primary-light/20 dark:hover:shadow-primary-dark/20 text-center cursor-pointer">
                    Download CV
                </a>
                <!-- Simple PDF Modal -->
                <div id="pdfModal" class="fixed inset-0 bg-black/60 z-50 hidden items-center justify-center">
                    <div
                        class="bg-white dark:bg-gray-900 w-[90%] h-[90%] max-w-5xl rounded-lg shadow-xl relative overflow-hidden flex flex-col">
                        <!-- Header -->
                        <div
                            class="flex justify-between items-center p-4 bg-gray-100 dark:bg-gray-800 border-b border-gray-300 dark:border-gray-700">
                            <h2 class="text-lg font-semibold text-gray-800 dark:text-white">My CV</h2>
                            <div class="flex gap-2">
                                <a href="sample-local-pdf.pdf" download
                                    class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700 transition">
                                    Download PDF
                                </a>
                                <button onclick="closeModal()"
                                    class="text-gray-500 hover:text-gray-800 dark:hover:text-gray-200">
                                    ✕
                                </button>
                            </div>
                        </div>

                        <!-- PDF Viewer -->
                        <iframe src="sample-local-pdf.pdf#toolbar=0&navpanes=0" class="flex-1 w-full"
                            frameborder="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="flex justify-center md:justify-start gap-5 pt-4">
                <a href="https://github.com/yourusername" target="_blank"
                    class="text-gray-500 dark:text-gray-400 hover:text-primary-light dark:hover:text-primary-dark transition-colors transform hover:scale-110">
                    <i class="fab fa-github text-2xl"></i>
                    <span class="sr-only">GitHub</span>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank"
                    class="text-gray-500 dark:text-gray-400 hover:text-primary-light dark:hover:text-primary-dark transition-colors transform hover:scale-110">
                    <i class="fab fa-linkedin text-2xl"></i>
                    <span class="sr-only">LinkedIn</span>
                </a>
                <a href="https://twitter.com/yourusername" target="_blank"
                    class="text-gray-500 dark:text-gray-400 hover:text-primary-light dark:hover:text-primary-dark transition-colors transform hover:scale-110">
                    <i class="fab fa-twitter text-2xl"></i>
                    <span class="sr-only">Twitter</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-gray-100 dark:bg-dark">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
            <span class="gradient-text">About Me</span>
        </h2>

        <div class="flex flex-col md:flex-row items-center">
            <!-- Profile Image -->
            <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                <div
                    class="w-64 h-64 rounded-full overflow-hidden border-4 border-primary-light/30 dark:border-primary-dark/30">
                    <div class="w-full h-full bg-gray-300 dark:bg-gray-800 flex items-center justify-center">
                        <img src="assets/images/shivampic3-Photoroom.png" alt="Shivam Mishra"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

            <!-- About Content -->
            <div class="md:w-2/3 md:pl-12">
                <h3 class="text-2xl font-semibold mb-4">Who am I?</h3>
                <p class="mb-6 text-gray-600 dark:text-gray-400">
                    I'm Shivam Mishra, an MCA graduate (2025) from Maharishi University of Information Technology,
                    Lucknow. I'm a passionate full-stack developer specializing in PHP, Laravel, and WordPress
                    development.
                </p>
                <p class="mb-6 text-gray-600 dark:text-gray-400">
                    With a strong foundation in both front-end and back-end technologies, I create clean, scalable,
                    and responsive web applications. I'm quick to learn and adapt to new technologies, with a keen
                    eye for detail and performance optimization.
                </p>

                <!-- Personal Info -->
                <div class="bg-white dark:bg-darker p-6 rounded-xl mb-8 shadow-md">
                    <h4 class="text-lg font-semibold mb-4 text-primary-light dark:text-primary-dark">Personal
                        Information</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-accent-light dark:text-accent-dark"></i>
                            <span>shivam300m@gmail.com</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone mr-3 text-accent-light dark:text-accent-dark"></i>
                            <span>+91 7522074049</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-solid fa-user-graduate mr-3 text-accent-light dark:text-accent-dark"></i>
                            <span>Master's in Computer Application - (2025)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-accent-light dark:text-accent-dark"></i>
                            <span>Lucknow, Uttar Pradesh (226012)</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-briefcase mr-3 text-accent-light dark:text-accent-dark"></i>
                            <span>Full Stack Developer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-white dark:bg-dark">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
            <span class="gradient-text">Technical Skills</span>
        </h2>
        <!-- Tab Navigation -->
        <div class="flex flex-wrap justify-center mb-8 border-b border-gray-300 dark:border-gray-700">
            <button
                class="tab-btn px-6 py-3 font-medium text-lg flex items-center justify-center gap-2 border-b-2 border-transparent hover:border-accent-light dark:hover:border-accent-dark transition-all active-tab"
                data-tab="all">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                </svg>
                All Skills
            </button>
            <button
                class="tab-btn px-6 py-3 font-medium text-lg flex items-center justify-center gap-2 border-b-2 border-transparent hover:border-accent-light dark:hover:border-accent-dark transition-all"
                data-tab="programming">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" class="w-6 h-6"
                    alt="PHP" />
                Programming
            </button>
            <button
                class="tab-btn px-6 py-3 font-medium text-lg flex items-center justify-center gap-2 border-b-2 border-transparent hover:border-accent-light dark:hover:border-accent-dark transition-all"
                data-tab="web">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" class="w-6 h-6"
                    alt="Web" />
                Web Technologies
            </button>
            <button
                class="tab-btn px-6 py-3 font-medium text-lg flex items-center justify-center gap-2 border-b-2 border-transparent hover:border-accent-light dark:hover:border-accent-dark transition-all"
                data-tab="tools">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" class="w-6 h-6"
                    alt="Tools" />
                Tools & More
            </button>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content">
            <!-- All Skills Tab -->
            <div id="all" class="tab-pane active">
                <div class="flex flex-wrap justify-center gap-4 text-center ">
                    <!-- Programming Skills -->
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark  skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                            class="w-8 h-8 mb-1" alt="PHP" />
                        <span>PHP</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png"
                            class="w-8 h-8 mb-1" alt="Laravel" />
                        <span>Laravel</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg"
                            class="w-8 h-8 mb-1" alt="CodeIgniter" />
                        <span>CodeIgniter</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg"
                            class="w-8 h-8 mb-1" alt="Java" />
                        <span>Java</span>
                    </div>

                    <!-- Web Skills -->
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                            class="w-8 h-8 mb-1" alt="HTML5" />
                        <span>HTML5</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                            class="w-8 h-8 mb-1" alt="CSS3" />
                        <span>CSS3</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                            class="w-8 h-8 mb-1" alt="JavaScript" />
                        <span>JavaScript</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg"
                            class="w-8 h-8 mb-1" alt="WordPress" />
                        <span>WordPress</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                            class="w-8 h-8 mb-1" alt="MySQL" />
                        <span>MySQL</span>
                    </div>

                    <!-- Tools & More -->
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"
                            class="w-8 h-8 mb-1" alt="Git" />
                        <span>Git/GitHub</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://miro.medium.com/v2/resize:fit:440/1*J3G3akaMpUOLegw0p0qthA.png"
                            class="w-8 h-8 mb-1" alt="API" />
                        <span>RESTful APIs</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn2.iconfinder.com/data/icons/programming-76/512/MVC-model-view-controller-512.png"
                            class="w-8 h-8 mb-1" alt="MVC" />
                        <span>MVC Architecture</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                            class="w-8 h-8 mb-1" alt="Bootstrap" />
                        <span>Bootstrap</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg"
                            class="w-8 h-8 mb-1" alt="jQuery" />
                        <span>jQuery/AJAX</span>
                    </div>
                </div>
            </div>

            <!-- Programming Tab -->
            <div id="programming" class="tab-pane hidden">
                <div class="flex flex-wrap justify-center gap-4">
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg"
                            class="w-8 h-8 mb-1" alt="PHP" />
                        <span>PHP</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/800px-Laravel.svg.png"
                            class="w-8 h-8 mb-1" alt="Laravel" />
                        <span>Laravel</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg"
                            class="w-8 h-8 mb-1" alt="CodeIgniter" />
                        <span>CodeIgniter</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original.svg"
                            class="w-8 h-8 mb-1" alt="Java" />
                        <span>Java</span>
                    </div>
                </div>
            </div>

            <!-- Web Technologies Tab -->
            <div id="web" class="tab-pane hidden text-center">
                <div class="flex flex-wrap justify-center gap-4">
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                            class="w-8 h-8 mb-1" alt="HTML5" />
                        <span>HTML5</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                            class="w-8 h-8 mb-1" alt="CSS3" />
                        <span>CSS3</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                            class="w-8 h-8 mb-1" alt="JavaScript" />
                        <span>JavaScript</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/wordpress/wordpress-original.svg"
                            class="w-8 h-8 mb-1" alt="WordPress" />
                        <span>WordPress</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                            class="w-8 h-8 mb-1" alt="MySQL" />
                        <span>MySQL</span>
                    </div>
                </div>
            </div>

            <!-- Tools Tab -->
            <div id="tools" class="tab-pane hidden">
                <div class="flex flex-wrap justify-center gap-4 text-center">
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg"
                            class="w-8 h-8 mb-1" alt="Git" />
                        <span>Git/GitHub</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://miro.medium.com/v2/resize:fit:440/1*J3G3akaMpUOLegw0p0qthA.png"
                            class="w-8 h-8 mb-1" alt="API" />
                        <span>RESTful APIs</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn2.iconfinder.com/data/icons/programming-76/512/MVC-model-view-controller-512.png"
                            class="w-8 h-8 mb-1" alt="MVC" />
                        <span>MVC Architecture</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg"
                            class="w-8 h-8 mb-1" alt="Bootstrap" />
                        <span>Bootstrap</span>
                    </div>
                    <div
                        class="px-4 py-3 dark:shadow-custom-dark dark:hover:shadow-hover-dark skill_box_style bg-gray-100 dark:bg-dark rounded-lg flex flex-col items-center w-[155px] hover:scale-105 transition-transform">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original.svg"
                            class="w-8 h-8 mb-1" alt="jQuery" />
                        <span>jQuery/AJAX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Education Section -->
<section id="education" class="py-16 bg-gray-100 dark:bg-[#0b0b0b]">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
            <span class="gradient-text">Education</span>
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- MCA Card -->
            <div
                class="bg-white dark:bg-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:border-primary-light dark:hover:border-primary-dark transition-all duration-300 hover:shadow-lg hover:-translate-y-1 flex flex-col h-full equal-height">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div
                            class="w-12 h-12 bg-primary-light/10 dark:bg-primary-dark/10 rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-graduation-cap text-primary-light dark:text-primary-dark text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-primary-light dark:text-primary-dark">Master of Computer
                            Applications</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Maharishi University, Lucknow</p>
                    </div>
                    <span
                        class="bg-primary-light/20 dark:bg-primary-dark/20 text-primary-light dark:text-primary-dark text-xs px-3 py-1 rounded-full h-fit whitespace-nowrap">
                        2023–2025
                    </span>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-3 mt-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent-light dark:text-accent-dark mr-3 mt-0.5"></i>
                        <span>Specialized in Full Stack Development</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent-light dark:text-accent-dark mr-3 mt-0.5"></i>
                        <span>Advanced Web Technologies</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-accent-light dark:text-accent-dark mr-3 mt-0.5"></i>
                        <span>Project Management</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-400 dark:text-gray-500">Completed with Honors</span>
                </div>
            </div>

            <!-- PG Diploma Card -->
            <div
                class="bg-white dark:bg-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:border-secondary-light dark:hover:border-secondary-dark transition-all duration-300 hover:shadow-lg hover:-translate-y-1 flex flex-col h-full equal-height">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div
                            class="w-12 h-12 bg-secondary-light/10 dark:bg-secondary-dark/10 rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-certificate text-secondary-light dark:text-secondary-dark text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-secondary-light dark:text-secondary-dark">PG Diploma in
                            Computer Application</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Government Polytechnic, Lucknow</p>
                    </div>
                    <span
                        class="bg-secondary-light/20 dark:bg-secondary-dark/20 text-secondary-light dark:text-secondary-dark text-xs px-3 py-1 rounded-full h-fit whitespace-nowrap">
                        2019 - 2021
                    </span>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-3 mt-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Advanced Programming Concepts</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Database Systems</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Software Development Fundamentals</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-400 dark:text-gray-500">Specialization in Web Technologies</span>
                </div>
            </div>

            <!-- BSc Card -->
            <div
                class="bg-white dark:bg-dark p-6 rounded-xl border border-gray-200 dark:border-gray-800 hover:border-accent-light dark:hover:border-accent-dark transition-all duration-300 hover:shadow-lg hover:-translate-y-1 flex flex-col h-full equal-height">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <div
                            class="w-12 h-12 bg-accent-light/10 dark:bg-accent-dark/10 rounded-lg flex items-center justify-center mb-3">
                            <i class="fas fa-university text-accent-light dark:text-accent-dark text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-accent-light dark:text-accent-dark">Bachelor of Science</h3>
                        <p class="text-gray-500 dark:text-gray-400 text-sm mt-1">Awadh University, Ayodhya</p>
                    </div>
                    <span
                        class="bg-accent-light/20 dark:bg-accent-dark/20 text-accent-light dark:text-accent-dark text-xs px-3 py-1 rounded-full h-fit">2015
                        - 2018</span>
                </div>
                <ul class="text-sm text-gray-600 dark:text-gray-400 space-y-3 mt-4 flex-grow">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Computer Science Fundamentals</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Mathematics & Algorithms</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle text-primary-light dark:text-primary-dark mr-3 mt-0.5"></i>
                        <span>Problem Solving Skills</span>
                    </li>
                </ul>
                <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-400 dark:text-gray-500">Major in Computer Science</span>
                </div>
            </div>
        </div>

        <!-- Certifications -->
        <div class="max-w-4xl mx-auto mt-12">
            <div class="bg-white dark:bg-dark p-6 rounded-xl border border-gray-300 dark:border-gray-700 shadow-md">
                <h3 class="text-xl font-semibold mb-4 text-center text-primary-light dark:text-primary-dark">Additional
                    Certifications</h3>
                <div class="flex flex-wrap justify-center gap-4">
                    <span class="bg-gray-100 dark:bg-darker px-4 py-2 rounded-full text-sm flex items-center">
                        <i class="fab fa-laravel mr-2 text-accent-light dark:text-accent-dark"></i> Laravel Framework
                    </span>
                    <span class="bg-gray-100 dark:bg-darker px-4 py-2 rounded-full text-sm flex items-center">
                        <i class="fab fa-wordpress mr-2 text-accent-light dark:text-accent-dark"></i> WordPress
                    </span>
                    <span class="bg-gray-100 dark:bg-darker px-4 py-2 rounded-full text-sm flex items-center">
                        <i class="fab fa-php mr-2 text-accent-light dark:text-accent-dark"></i> PHP Advanced
                    </span>
                    <span class="bg-gray-100 dark:bg-darker px-4 py-2 rounded-full text-sm flex items-center">
                        <i class="fas fa-database mr-2 text-accent-light dark:text-accent-dark"></i> Database Management
                    </span>
                    <span class="bg-gray-100 dark:bg-darker px-4 py-2 rounded-full text-sm flex items-center">
                        <i class="fab fa-js mr-2 text-accent-light dark:text-accent-dark"></i> JavaScript
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Experience Section -->
<section id="experience" class="py-20 bg-gray-200 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 max-w-7xl">
        <div class="text-center mb-16">
            <h2 class="text-4xl sm:text-5xl font-bold mb-4">
                <span class="gradient-text bg-clip-text text-transparent">
                    Professional Journey
                </span>
            </h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-3xl mx-auto text-lg">
                My career progression through innovative companies and impactful projects
            </p>
        </div>

        <div class="relative">
            <!-- Main Timeline Container -->
            <div class="flex flex-col md:flex-row items-stretch justify-between gap-6 md:gap-8">
                <!-- Current Job Card -->
                <div class="w-full md:w-1/2 relative group flex flex-col">
                    <div
                        class="absolute -inset-2 bg-gradient-to-r from-primary-light/30 dark:from-primary-dark/30 to-accent-light/30 dark:to-accent-dark/30 rounded-3xl blur-lg opacity-0 group-hover:opacity-70 transition-all duration-500">
                    </div>
                    <div
                        class="relative h-full bg-white/90 dark:bg-gray-800/90 backdrop-blur-md p-8 rounded-3xl shadow-2xl border border-gray-300/60 dark:border-gray-700/60 hover:border-primary-light/40 dark:hover:border-primary-dark/40 transition-all duration-300 flex-grow">
                        <div class="flex items-center mb-5">
                            <div class="w-3 h-3 rounded-full bg-accent-light dark:bg-accent-dark mr-3 animate-pulse">
                            </div>
                            <p class="text-sm font-semibold text-accent-light dark:text-accent-dark tracking-wider">
                                CURRENT POSITION</p>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2 text-left">Software Engineer
                            Trainee</h3>
                        <h4 class="text-primary-light dark:text-primary-dark text-lg mb-4 text-left">IPH Technology Pvt.
                            Ltd., Lucknow</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-left">Feb 2025 - Present</p>
                        <ul class="space-y-3 text-left">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Developing web applications using PHP,
                                    Laravel,
                                    CodeIgniter, and WordPress</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Designing responsive front-end interfaces
                                    using HTML,
                                    CSS, and Bootstrap</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Assisting in debugging, testing, and
                                    optimizing website
                                    performance</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline Center Connector -->
                <div class="hidden md:flex flex-col items-center justify-center py-4 relative z-10 mx-2">
                    <div
                        class="w-16 h-16 rounded-full bg-gradient-to-br from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark flex items-center justify-center text-white font-bold text-lg shadow-xl shadow-primary-light/40 dark:shadow-primary-dark/40 hover:scale-110 transition-all duration-300 mb-2">
                        Now
                    </div>
                    <div
                        class="w-1 h-16 bg-gradient-to-b from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark">
                    </div>
                    <div
                        class="w-16 h-16 rounded-full bg-white dark:bg-gray-800 border-4 border-primary-light/40 dark:border-primary-dark/40 flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold text-lg shadow-xl hover:scale-110 transition-all duration-300 mt-2">
                        2024
                    </div>
                </div>

                <!-- Previous Job Card -->
                <div class="w-full md:w-1/2 relative group flex flex-col mt-8 md:mt-0">
                    <div
                        class="absolute -inset-2 bg-gradient-to-r from-primary-light/30 dark:from-primary-dark/30 to-accent-light/30 dark:to-accent-dark/30 rounded-3xl blur-lg opacity-0 group-hover:opacity-70 transition-all duration-500">
                    </div>
                    <div
                        class="relative h-full bg-white/90 dark:bg-gray-800/90 backdrop-blur-md p-8 rounded-3xl shadow-2xl border border-gray-300/60 dark:border-gray-700/60 hover:border-primary-light/40 dark:hover:border-primary-dark/40 transition-all duration-300 flex-grow">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2 text-left">PHP Developer Intern
                        </h3>
                        <h4 class="text-primary-light dark:text-primary-dark text-lg mb-4 text-left">LogZero Technology
                            Pvt. Ltd., Noida</h4>
                        <p class="text-gray-600 dark:text-gray-400 mb-6 text-left">Feb 2024 - Aug 2024</p>
                        <ul class="space-y-3 text-left">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Gained hands-on experience in developing
                                    web
                                    applications with PHP, Laravel and CodeIgniter</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Collaborated on creating responsive,
                                    user-friendly
                                    front-end designs</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-accent-light dark:text-accent-dark mt-0.5 mr-3 flex-shrink-0"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">Played a role in API integrations and
                                    provided support
                                    for maintaining legacy code</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile Timeline Connector -->
                <div class="md:hidden flex flex-row items-center justify-center py-4 w-full">
                    <div
                        class="w-16 h-16 rounded-full bg-gradient-to-br from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark flex items-center justify-center text-white font-bold text-lg shadow-xl shadow-primary-light/40 dark:shadow-primary-dark/40 mx-4">
                        Now
                    </div>
                    <div
                        class="w-16 h-1 bg-gradient-to-r from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark">
                    </div>
                    <div
                        class="w-16 h-16 rounded-full bg-white dark:bg-gray-800 border-4 border-primary-light/40 dark:border-primary-dark/40 flex items-center justify-center text-gray-700 dark:text-gray-300 font-bold text-lg shadow-xl mx-4">
                        2024
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-gray-100 dark:bg-dark">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">
            <span class="gradient-text">Featured Projects</span>
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-white dark:bg-darker rounded-xl overflow-hidden shadow-lg card-hover equal-height">
                <div
                    class="h-48 bg-gradient-to-r from-primary-light dark:from-primary-dark to-accent-light dark:to-accent-dark flex items-center justify-center">
                    <i class="fas fa-shopping-cart text-6xl text-white opacity-30"></i>
                </div>
                <div class="p-6 flex flex-col h-full">
                    <div>
                        <h3 class="text-xl font-bold mb-2">E-Commerce Shopping Platform</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">Laravel</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">PHP</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">MySQL</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">Bootstrap</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            A complete online shopping system with user login, product catalog, cart, and checkout
                            functionality.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-500 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Admin panel for managing products and orders</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Secure payment gateway integration</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Real-time order tracking</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto pt-4">
                        <div class="flex space-x-3">
                            <a href="#"
                                class="text-sm px-4 py-2 bg-primary-light/20 dark:bg-primary-dark/20 text-primary-light dark:text-primary-dark rounded-full hover:bg-primary-light/30 dark:hover:bg-primary-dark/30 transition-all">
                                View Demo
                            </a>
                            <a href="#"
                                class="text-sm px-4 py-2 border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
                                Source Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="bg-white dark:bg-darker rounded-xl overflow-hidden shadow-lg card-hover equal-height">
                <div
                    class="h-48 bg-gradient-to-r from-secondary-light dark:from-secondary-dark to-accent-light dark:to-accent-dark flex items-center justify-center">
                    <i class="fas fa-user-tie text-6xl text-white opacity-30"></i>
                </div>
                <div class="p-6 flex flex-col h-full">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Profilo - Portfolio Platform</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">Laravel</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">PHP</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">MySQL</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">jQuery</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            A dynamic portfolio platform for users to manage profiles, projects, and career information.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-500 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Image upload and real-time form validation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Fully responsive design</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Customizable sections (bio, experience, education)</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto pt-4">
                        <div class="flex space-x-3">
                            <a href="#"
                                class="text-sm px-4 py-2 bg-primary-light/20 dark:bg-primary-dark/20 text-primary-light dark:text-primary-dark rounded-full hover:bg-primary-light/30 dark:hover:bg-primary-dark/30 transition-all">
                                View Demo
                            </a>
                            <a href="#"
                                class="text-sm px-4 py-2 border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
                                Source Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="bg-white dark:bg-darker rounded-xl overflow-hidden shadow-lg card-hover equal-height">
                <div
                    class="h-48 bg-gradient-to-r from-accent-light dark:from-accent-dark to-secondary-light dark:to-secondary-dark flex items-center justify-center">
                    <i class="fas fa-blog text-6xl text-white opacity-30"></i>
                </div>
                <div class="p-6 flex flex-col h-full">
                    <div>
                        <h3 class="text-xl font-bold mb-2">Blogging Website</h3>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">WordPress</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">Divi
                                Theme</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">HTML/CSS</span>
                            <span
                                class="px-3 py-1 bg-primary-light/10 dark:bg-primary-dark/10 text-primary-light dark:text-primary-dark rounded-full text-xs">SEO</span>
                        </div>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            A content-driven blog using WordPress with SEO-friendly layouts and Divi builder.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-500 dark:text-gray-500 mb-4">
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Category-based post structure</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Integrated social sharing features</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-accent-light dark:text-accent-dark mt-1 mr-2"></i>
                                <span>Mobile responsive and performance optimized</span>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-auto pt-4">
                        <div class="flex space-x-3">
                            <a href="#"
                                class="text-sm px-4 py-2 bg-primary-light/20 dark:bg-primary-dark/20 text-primary-light dark:text-primary-dark rounded-full hover:bg-primary-light/30 dark:hover:bg-primary-dark/30 transition-all">
                                View Demo
                            </a>
                            <a href="#"
                                class="text-sm px-4 py-2 border border-gray-300 dark:border-gray-700 text-gray-600 dark:text-gray-400 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-all">
                                Source Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'layouts/footer.php';?>