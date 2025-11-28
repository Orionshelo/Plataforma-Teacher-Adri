<?php include 'includes/header.php'; ?>

<div class="container mx-auto px-4 py-8 bg-light">
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-dark">Portal de Padres</h1>
        <p class="text-dark/70">Resumen de actividad de Leo</p>
    </div>

    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Main Stats -->
        <div class="lg:col-span-2 space-y-8">
            <div class="grid sm:grid-cols-3 gap-4">
                <!-- Stat 1 -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4">
                    <div class="flex items-start justify-between mb-2">
                        <div class="p-2 bg-primary/10 rounded-lg">
                            <i data-lucide="clock" class="text-primary" width="24" height="24"></i>
                        </div>
                        <span class="text-xs text-dark/50 bg-light px-2 py-1 rounded-full">Hoy</span>
                    </div>
                    <p class="text-sm text-dark/60">Tiempo de Estudio</p>
                    <p class="text-2xl font-bold text-dark">45 min</p>
                </div>
                <!-- Stat 2 -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4">
                    <div class="flex items-start justify-between mb-2">
                        <div class="p-2 bg-accent/10 rounded-lg">
                            <i data-lucide="award" class="text-accent" width="24" height="24"></i>
                        </div>
                        <span class="text-xs text-dark/50 bg-light px-2 py-1 rounded-full">Esta semana</span>
                    </div>
                    <p class="text-sm text-dark/60">Puntos Ganados</p>
                    <p class="text-2xl font-bold text-dark">+150</p>
                </div>
                <!-- Stat 3 -->
                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-4">
                    <div class="flex items-start justify-between mb-2">
                        <div class="p-2 bg-secondary/10 rounded-lg">
                            <i data-lucide="activity" class="text-secondary" width="24" height="24"></i>
                        </div>
                        <span class="text-xs text-dark/50 bg-light px-2 py-1 rounded-full">Tendencia</span>
                    </div>
                    <p class="text-sm text-dark/60">Rendimiento</p>
                    <p class="text-2xl font-bold text-dark">Excelente</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <h3 class="text-lg font-bold text-dark mb-4">Actividad Reciente</h3>
                <div class="space-y-4">
                    <!-- Activity 1 -->
                    <div class="flex items-start gap-4 p-3 rounded-xl bg-secondary/10 border border-secondary/20">
                        <div class="mt-1">
                            <i data-lucide="check-circle" class="text-secondary" width="20" height="20"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-dark">Completó 'Matemáticas Espaciales'</p>
                            <p class="text-sm text-dark/50">Hace 15 min</p>
                        </div>
                        <span class="font-bold text-secondary">100/100</span>
                    </div>
                    <!-- Activity 2 -->
                    <div class="flex items-start gap-4 p-3 rounded-xl bg-primary/10 border border-primary/20">
                        <div class="mt-1">
                            <i data-lucide="info" class="text-primary" width="20" height="20"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-dark">Inició sesión en la plataforma</p>
                            <p class="text-sm text-dark/50">Hace 1 hora</p>
                        </div>
                    </div>
                    <!-- Activity 3 -->
                    <div class="flex items-start gap-4 p-3 rounded-xl bg-accent/10 border border-accent/20">
                        <div class="mt-1">
                            <i data-lucide="alert-circle" class="text-accent" width="20" height="20"></i>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-dark">Tarea 'Lectura Veloz' pendiente</p>
                            <p class="text-sm text-dark/50">Para mañana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 bg-primary/5 border-primary/10">
                <h3 class="font-bold text-primary mb-2 flex items-center gap-2">
                    <i data-lucide="alert-circle" width="20" height="20"></i>
                    Avisos Importantes
                </h3>
                <p class="text-sm text-primary/80 mb-4">
                    La reunión de padres se ha programado para el próximo viernes a las 17:00hs.
                </p>
                <button class="inline-flex items-center justify-center rounded-xl font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-primary text-white hover:bg-primary/90 focus:ring-primary text-sm px-3 py-1.5 w-full">
                    Ver Detalles
                </button>
            </div>

            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <h3 class="font-bold text-dark mb-4">Tareas Pendientes</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3 text-sm text-dark/70">
                        <div class="w-2 h-2 rounded-full bg-red-500"></div>
                        Lectura Cap. 4
                    </li>
                    <li class="flex items-center gap-3 text-sm text-dark/70">
                        <div class="w-2 h-2 rounded-full bg-accent"></div>
                        Ejercicios de Geometría
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
