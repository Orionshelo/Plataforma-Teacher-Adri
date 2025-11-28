<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Adri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#694673',   // Purple
                        secondary: '#ADD9C9', // Mint
                        accent: '#F2C299',    // Peach
                        dark: '#261414',      // Dark Brown/Black
                        light: '#F2F2F2',     // Light Gray
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        /* body { font-family: 'Inter', sans-serif; }  Removed as it is in tailwind config */
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
    </style>
</head>
<body class="min-h-screen bg-light font-sans text-dark">
    <?php
    require_once __DIR__ . '/../lib/functions.php';
    
    $current_page = $_SERVER['REQUEST_URI'];
    $isAuth = strpos($current_page, 'teacher.php') !== false || 
              strpos($current_page, 'student.php') !== false || 
              strpos($current_page, 'parent.php') !== false;
    ?>
    
    <header class="sticky top-0 z-50 w-full border-b border-gray-200 bg-white/90 backdrop-blur-md">
        <div class="container mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2">
                <div class="bg-primary p-2 rounded-lg text-white">
                    <i data-lucide="book-open" width="24" height="24"></i>
                </div>
                <span class="text-xl font-bold text-primary">
                    Teacher Adri
                </span>
            </a>

            <nav class="flex items-center gap-4">
                <?php if (!$isAuth): ?>
                    <a href="index.php#about" class="text-sm font-medium text-dark hover:text-primary transition-colors hidden md:block">
                        Quiénes somos
                    </a>
                    <a href="login.php" class="inline-flex items-center justify-center rounded-xl font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-transparent hover:bg-secondary/20 text-dark text-sm px-4 py-2">
                        Iniciar Sesión
                    </a>
                    <a href="register.php" class="inline-flex items-center justify-center rounded-xl font-bold transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-primary text-white hover:bg-primary/90 focus:ring-primary text-sm px-4 py-2 shadow-lg shadow-primary/20">
                        Empezar Gratis
                    </a>
                <?php else: ?>
                    <a href="index.php" class="inline-flex items-center justify-center rounded-xl font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-transparent hover:bg-red-50 text-red-600 hover:text-red-700 text-sm px-3 py-1.5">
                        <i data-lucide="log-out" width="18" height="18" class="mr-2"></i>
                        Salir
                    </a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main>
