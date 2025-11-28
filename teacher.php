<?php include 'includes/header.php'; ?>

<?php
$students = [
    ['id' => 1, 'name' => 'Ana García', 'progress' => 85, 'lastActive' => 'Hace 2 horas'],
    ['id' => 2, 'name' => 'Carlos López', 'progress' => 60, 'lastActive' => 'Ayer'],
    ['id' => 3, 'name' => 'María Rodríguez', 'progress' => 92, 'lastActive' => 'Hace 1 hora'],
    ['id' => 4, 'name' => 'Juan Pérez', 'progress' => 45, 'lastActive' => 'Hace 3 días'],
];
?>

<div class="container mx-auto px-4 py-8 bg-light">
    <div class="flex justify-between items-center mb-8">
        <div>
            <h1 class="text-3xl font-bold text-dark">Panel Docente</h1>
            <p class="text-dark/70">Bienvenido, Prof. Martínez</p>
        </div>
        <button class="inline-flex items-center justify-center rounded-xl font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:pointer-events-none bg-primary text-white hover:bg-primary/90 focus:ring-primary text-sm px-4 py-2">
            <i data-lucide="plus" width="20" height="20" class="mr-2"></i>
            Nueva Tarea
        </button>
    </div>

    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <!-- Stat 1 -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-4">
            <div class="p-3 bg-primary/10 rounded-xl">
                <i data-lucide="users" class="text-primary" width="24" height="24"></i>
            </div>
            <div>
                <p class="text-sm text-dark/60">Estudiantes</p>
                <p class="text-2xl font-bold text-dark">24</p>
            </div>
        </div>
        <!-- Stat 2 -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-4">
            <div class="p-3 bg-accent/10 rounded-xl">
                <i data-lucide="book-open" class="text-accent" width="24" height="24"></i>
            </div>
            <div>
                <p class="text-sm text-dark/60">Tareas Activas</p>
                <p class="text-2xl font-bold text-dark">5</p>
            </div>
        </div>
        <!-- Stat 3 -->
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 flex items-center gap-4">
            <div class="p-3 bg-secondary/10 rounded-xl">
                <i data-lucide="check-circle" class="text-secondary" width="24" height="24"></i>
            </div>
            <div>
                <p class="text-sm text-dark/60">Completadas</p>
                <p class="text-2xl font-bold text-dark">85%</p>
            </div>
        </div>
    </div>

    <h2 class="text-xl font-bold text-dark mb-4">Progreso de la Clase</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
        <?php foreach ($students as $student): ?>
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start mb-4">
                    <div class="h-10 w-10 rounded-full bg-primary/10 flex items-center justify-center text-primary font-bold">
                        <?php echo substr($student['name'], 0, 1); ?>
                    </div>
                    <?php
                    $badgeClass = 'bg-red-100 text-red-700';
                    if ($student['progress'] >= 80) {
                        $badgeClass = 'bg-secondary/20 text-secondary';
                    } elseif ($student['progress'] >= 60) {
                        $badgeClass = 'bg-accent/20 text-accent';
                    }
                    ?>
                    <span class="text-xs font-medium px-2 py-1 rounded-full <?php echo $badgeClass; ?>">
                        <?php echo $student['progress']; ?>%
                    </span>
                </div>
                <h3 class="font-bold text-dark"><?php echo $student['name']; ?></h3>
                <p class="text-sm text-dark/50 mb-4">Activo: <?php echo $student['lastActive']; ?></p>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-primary h-2 rounded-full" style="width: <?php echo $student['progress']; ?>%"></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
