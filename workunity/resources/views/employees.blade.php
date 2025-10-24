<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Employés</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4a5cdb',
                        secondary: '#667eea'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-300 min-h-screen font-sans">
    <div class="max-w-6xl mx-auto px-5 py-10 text-center">
        <div class="flex items-center justify-center gap-4 mb-5">
            <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-yellow-300 rounded-full flex items-center justify-center text-2xl">
                👨‍💼
            </div>
            <h1 class="text-primary text-4xl font-bold drop-shadow-sm md:text-5xl">
                Gestion des Employés
            </h1>
        </div>
        
        <p class="text-gray-600 text-lg mb-12 max-w-2xl mx-auto leading-relaxed">
            Bienvenue dans votre espace de gestion. Gérez vos <strong>employés</strong> et leurs <strong>départements</strong> facilement.
        </p>
        
        <div class="flex justify-center gap-8 flex-wrap mb-16">
            <a href="/employees/list" class="group bg-gradient-to-br from-indigo-500 to-purple-600 text-white rounded-3xl p-10 min-w-[200px] shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 no-underline block">
                <div class="text-5xl mb-5">📋</div>
                <div class="text-xl font-bold leading-snug">Liste des employés</div>
            </a>
            
            <a href="/employees/create" class="group bg-gradient-to-br from-teal-500 to-green-500 text-white rounded-3xl p-10 min-w-[200px] shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 no-underline block">
                <div class="text-5xl mb-5">➕</div>
                <div class="text-xl font-bold leading-snug">Ajouter un employé</div>
            </a>
            
            <a href="/departments" class="group bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-3xl p-10 min-w-[200px] shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300 no-underline block">
                <div class="text-5xl mb-5">🏢</div>
                <div class="text-xl font-bold leading-snug">Gérer les départements</div>
            </a>
        </div>
        
    </div>
</body>
</html>