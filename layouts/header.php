<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivam Mishra | Full Stack Developer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#4f46e5',
                            dark: '#6366f1'
                        },
                        secondary: {
                            light: '#7c3aed',
                            dark: '#8b5cf6'
                        },
                        accent: {
                            light: '#db2777',
                            dark: '#ec4899'
                        },
                        dark: {
                            light: '#f8fafc',
                            dark: '#0f172a'
                        },
                        darker: {
                            light: '#f1f5f9',
                            dark: '#020617'
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 6s ease-in-out infinite',
                        'bounce-slow': 'bounce 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .smart-scroller {
            position: fixed;
            right: 25px;
            bottom: 25px;
            z-index: 9999;
        }

        .scroller-btn {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background-color: rgba(74, 108, 247, 0.9);
            color: white;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
            padding: 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
        }

        .scroller-btn.visible {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .scroller-btn:hover {
            background-color: rgba(74, 108, 247, 1);
            transform: scale(1.05) translateY(0);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .scroller-btn:active {
            transform: scale(0.98) translateY(0);
        }

        .scroll-icon {
            transition: transform 0.3s ease;
        }

        .scroller-btn.scroll-up .up-arrow {
            display: block;
        }

        .scroller-btn.scroll-up .down-arrow {
            display: none;
        }

        .scroller-btn.scroll-down .up-arrow {
            display: none;
        }

        .scroller-btn.scroll-down .down-arrow {
            display: block;
        }

        @media (max-width: 768px) {
            .smart-scroller {
                right: 15px;
                bottom: 15px;
            }

            .scroller-btn {
                width: 40px;
                height: 40px;
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .gradient-text {
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            background-image: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899);
        }

        .dark .gradient-text {
            background-image: linear-gradient(90deg, #4f46e5, #7c3aed, #db2777);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .skill-bar {
            transition: width 1.5s ease-in-out;
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899);
            transition: width 0.3s ease;
        }

        .dark .nav-link::after {
            background: linear-gradient(90deg, #4f46e5, #7c3aed, #db2777);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .active::after {
            width: 100%;
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.8;
            }

            50% {
                opacity: 0.4;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(45deg);
            }

            50% {
                transform: translateY(-10px) rotate(45deg);
            }
        }

        @keyframes float-delay {

            0%,
            100% {
                transform: translateY(0) rotate(12deg);
            }

            50% {
                transform: translateY(-8px) rotate(12deg);
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 6s ease-in-out infinite;
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        .animate-float-delay {
            animation: float-delay 5s ease-in-out 1s infinite;
        }

        .gradient-text {
            background-image: linear-gradient(to right, #6366f1, #8b5cf6, #d946ef);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .dark .gradient-text {
            background-image: linear-gradient(to right, #4f46e5, #7c3aed, #db2777);
        }

        .tab-pane {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .active-tab {
            border-bottom-color: #8b5cf6 !important;
            color: #8b5cf6;
        }

        .dark .active-tab {
            border-bottom-color: #7c3aed !important;
            color: #7c3aed;
        }

        .equal-height {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .equal-height>div {
            flex: 1;
        }

        .theme-toggle {
            transition: all 0.3s ease;
        }

        .theme-toggle:hover {
            transform: rotate(30deg);
        }
    </style>
</head>

<body
    class="bg-darker-light dark:bg-darker text-gray-700 dark:text-gray-300 font-sans antialiased transition-colors duration-300">
    <!-- Header/Navigation -->
    <header class="fixed w-full bg-dark dark:bg-dark bg-opacity-90 dark:bg-opacity-90 backdrop-blur-sm z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4 ">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold gradient-text">Shivam.</a>
                <nav class="hidden md:flex items-center">
                    <ul class="flex space-x-8">
                        <li><a href="#home" class="nav-link active">Home</a></li>
                        <li><a href="#about" class="nav-link">About</a></li>
                        <li><a href="#experience" class="nav-link">Experience</a></li>
                        <li><a href="#projects" class="nav-link">Projects</a></li>
                        <li><a href="#skills" class="nav-link">Skills</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                    <button id="theme-toggle"
                        class="ml-6 p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 theme-toggle">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                </nav>
                <div class="flex items-center md:hidden">
                    <button id="theme-toggle-mobile"
                        class="mr-4 p-2 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 theme-toggle">
                        <i class="fas fa-moon dark:hidden"></i>
                        <i class="fas fa-sun hidden dark:block"></i>
                    </button>
                    <button id="mobile-menu-button" class="text-gray-700 dark:text-gray-300 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-dark dark:bg-dark py-4 px-6">
            <ul class="space-y-4 bg-dark dark:bg-dark">
                <li><a href="#home" class="block nav-link active">Home</a></li>
                <li><a href="#about" class="block nav-link">About</a></li>
                <li><a href="#experience" class="block nav-link">Experience</a></li>
                <li><a href="#projects" class="block nav-link">Projects</a></li>
                <li><a href="#skills" class="block nav-link">Skills</a></li>
                <li><a href="#contact" class="block nav-link">Contact</a></li>
            </ul>
        </div>
    </header>