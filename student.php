<?php include 'includes/header.php'; ?>

<?php
// Cargar los módulos y cursos desde el JSON
$modules = getCurriculum();
?>

<div class="container mx-auto px-4 py-8 bg-light min-h-[calc(100vh-64px)]">
    <!-- Header del Estudiante -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
        <div class="flex items-center gap-4">
            <div class="h-16 w-16 rounded-full bg-accent border-4 border-white shadow-lg flex items-center justify-center text-2xl text-dark">
                🦁
            </div>
            <div>
                <h1 class="text-3xl font-black text-primary">¡Hola, Newcomer!</h1>
                <div class="flex items-center gap-2 text-primary/80 font-bold">
                    <i data-lucide="star" class="fill-accent text-accent" width="24" height="24"></i>
                    <span>Nivel 1 - Recién Llegado</span>
                </div>
            </div>
        </div>

        <div class="bg-white px-6 py-3 rounded-2xl shadow-sm border-2 border-secondary/30 flex items-center gap-3">
            <i data-lucide="trophy" class="text-accent" width="24" height="24"></i>
            <div>
                <p class="text-xs text-gray-500 font-bold uppercase">Mis Puntos</p>
                <p class="text-2xl font-black text-primary">350</p>
            </div>
        </div>
    </div>

    <div class="mb-8">
        <h2 class="text-2xl font-black text-primary mb-2 flex items-center gap-2">
            <i data-lucide="map" class="text-secondary" width="24" height="24"></i>
            Tu Ruta de Aprendizaje
        </h2>
        <p class="text-dark/70">Domina el inglés y la cultura americana paso a paso.</p>
    </div>

    <!-- Lista de Módulos -->
    <div class="space-y-8">
        <?php foreach ($modules as $module): ?>
            <div class="bg-white rounded-3xl border-2 border-secondary/20 overflow-hidden shadow-sm">
                <!-- Encabezado del Módulo -->
                <div class="p-6 bg-gradient-to-r from-<?php echo $module['color']; ?>/10 to-white border-b border-secondary/10">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-<?php echo $module['color']; ?>/20 text-<?php echo $module['color']; ?> rounded-2xl">
                            <i data-lucide="<?php echo $module['icon']; ?>" width="32" height="32"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-dark"><?php echo $module['title']; ?></h3>
                            <p class="text-dark/60"><?php echo $module['description']; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Lista de Cursos dentro del Módulo -->
                <div class="divide-y divide-gray-100">
                    <?php foreach ($module['courses'] as $course): ?>
                        <div class="p-4 sm:p-6 hover:bg-light transition-colors flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                            <div class="flex items-start gap-4 flex-1">
                                <div class="mt-1">
                                    <?php if ($course['status'] === 'completed'): ?>
                                        <div class="bg-secondary/20 p-2 rounded-full text-secondary">
                                            <i data-lucide="check" width="16" height="16"></i>
                                        </div>
                                    <?php elseif ($course['status'] === 'locked'): ?>
                                        <div class="bg-gray-100 p-2 rounded-full text-gray-400">
                                            <i data-lucide="lock" width="16" height="16"></i>
                                        </div>
                                    <?php else: ?>
                                        <div class="bg-primary/20 p-2 rounded-full text-primary">
                                            <i data-lucide="play" width="16" height="16"></i>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div>
                                    <h4 class="font-bold text-dark flex items-center gap-2">
                                        <?php echo $course['title']; ?>
                                        <span class="text-xs font-normal px-2 py-0.5 rounded-full bg-light text-dark/60 border border-gray-200">
                                            <?php echo ucfirst($course['type']); ?>
                                        </span>
                                    </h4>
                                    <p class="text-sm text-dark/50 mb-1"><?php echo $course['description']; ?></p>
                                    <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
                                        <i data-lucide="clock" width="12" height="12"></i>
                                        <?php echo $course['duration']; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full sm:w-auto">
                                <?php if ($course['status'] === 'active'): ?>
                                    <button class="w-full sm:w-auto inline-flex items-center justify-center rounded-xl font-bold transition-all focus:outline-none focus:ring-2 focus:ring-offset-2 bg-primary text-white hover:bg-primary/90 shadow-lg shadow-primary/20 text-sm px-6 py-3">
                                        Continuar
                                        <i data-lucide="arrow-right" width="16" height="16" class="ml-2"></i>
                                    </button>
                                <?php elseif ($course['status'] === 'completed'): ?>
                                    <button class="w-full sm:w-auto inline-flex items-center justify-center rounded-xl font-medium transition-colors bg-secondary/10 text-secondary border border-secondary/20 text-sm px-4 py-2">
                                        Repasar
                                    </button>
                                <?php else: ?>
                                    <button disabled class="w-full sm:w-auto inline-flex items-center justify-center rounded-xl font-medium bg-gray-100 text-gray-400 border border-gray-200 text-sm px-4 py-2 cursor-not-allowed">
                                        Bloqueado
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
