<!DOCTYPE html>
<html lang="es" class="h-full bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Animated gradient background */
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .bg-animated {
            background: linear-gradient(135deg, #7e5bef, #3b82f6, #7e5bef);
            background-size: 300% 300%;
            animation: gradientBG 8s ease infinite;
        }
        /* Float animation for the card */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .float-card {
            animation: float 6s ease-in-out infinite;
        }
        /* Pulse badge */
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.9; }
            50% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 0.9; }
        }
        .badge-pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-animated text-white">
    <div class="max-w-md mx-auto p-6 float-card">
        <div class="relative bg-white/10 backdrop-blur-lg rounded-2xl p-8 shadow-2xl border border-white/20">
            <span class="absolute top-4 left-4 inline-block px-3 py-1 text-sm font-medium text-purple-200 bg-purple-600/30 rounded-full badge-pulse">
                Laravel
            </span>
            <h1 class="text-4xl font-extrabold text-center mb-4 text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-blue-400">
                {{ $mensaje ?? '¡Hola Mundo desde Laravel!' }}
            </h1>
            <p class="text-center text-gray-200 mt-2">
                Esta es una vista de ejemplo con <span class="font-medium text-purple-300">Glassmorphism</span>,
                animación de flotación y un fondo de gradiente en movimiento.
            </p>
            <div class="flex justify-center mt-6">
                <a href="/" class="px-6 py-2 bg-purple-600 hover:bg-purple-700 rounded-full transition-colors duration-300 shadow-md">
                    Volver al inicio
                </a>
            </div>
        </div>
    </div>
</body>
</html>
