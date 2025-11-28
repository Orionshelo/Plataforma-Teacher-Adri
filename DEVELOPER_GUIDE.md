# Guía del Desarrollador - Plataforma Teacher Adri V2

## 1. Introducción
Este proyecto es una plataforma educativa diseñada para ayudar a estudiantes, padres y profesores en el proceso de aprendizaje de inglés y adaptación cultural a los Estados Unidos.

El stack tecnológico actual es **PHP (Vanilla)**, **Tailwind CSS (CDN)** y **JavaScript (Vanilla + Lucide Icons)**.

## 2. Estructura del Proyecto

```
/
├── config/             # Configuración global (app.php, database.php)
├── data/               # Archivos JSON que actúan como base de datos temporal
├── includes/           # Fragmentos de HTML reutilizables (header, footer)
├── lib/                # Funciones auxiliares y lógica de negocio
├── index.php           # Landing Page
├── login.php           # Página de Login
├── student.php         # Dashboard del Estudiante (Módulos y Cursos)
├── teacher.php         # Dashboard del Profesor
├── parent.php          # Dashboard de Padres
└── DEVELOPER_GUIDE.md  # Este archivo
```

## 3. Gestión de Datos (Modelo)
Actualmente, los datos no persisten en una base de datos SQL. Se utilizan archivos JSON en la carpeta `/data` para simular la estructura de datos.

### Curriculum (`data/curriculum.json`)
Define la estructura de Módulos -> Cursos.
- **Módulo**: Una categoría grande (ej. "Survival English").
- **Curso**: Una lección específica (ej. "At the Airport").

**Estructura JSON:**
```json
[
  {
    "id": "mod_id",
    "title": "Nombre del Módulo",
    "courses": [
      {
        "id": "c_id",
        "title": "Nombre del Curso",
        "status": "locked|active|completed",
        "type": "video|quiz|vocabulary"
      }
    ]
  }
]
```

## 4. Cómo Agregar Nuevo Contenido
1. Abra `data/curriculum.json`.
2. Agregue un nuevo objeto al array principal para un nuevo Módulo.
3. O agregue un nuevo objeto al array `courses` dentro de un módulo existente.
4. El Dashboard del Estudiante (`student.php`) renderizará automáticamente los cambios.

## 5. Roadmap y Escalabilidad
Para llevar este proyecto al siguiente nivel (V3), se recomienda:

1. **Base de Datos Real**: Migrar los JSON a MySQL/MariaDB.
2. **Autenticación**: Implementar un sistema de login real con sesiones PHP (`$_SESSION`).
3. **Routing**: Implementar un router básico o usar un micro-framework como Slim PHP para manejar URLs amigables (ej. `/course/view/123`).
4. **Assets**: Configurar un proceso de build (Vite/Webpack) para compilar Tailwind CSS en lugar de usar CDN para producción.

## 6. Estilos y UI
El proyecto utiliza **Tailwind CSS**. Las clases se aplican directamente en el HTML.
Los iconos son provistos por **Lucide**. Se renderizan en el cliente usando `lucide.createIcons()` en el footer.
