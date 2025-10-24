<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-300 min-h-screen font-sans">
    <div class="max-w-6xl mx-auto px-5 py-10">

        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-4">
                <a href="/employees" class="bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300">
                    ← Retour
                </a>
                <h1 class="text-primary text-3xl font-bold md:text-4xl">
                    📋 Liste des Employés
                </h1>
            </div>
            <a href="/employees/create" class="bg-gradient-to-r from-teal-500 to-green-500 text-white px-6 py-3 rounded-xl font-bold hover:shadow-lg transition-all duration-300">
                ➕ Ajouter un employé
            </a>
        </div>


    </div>
</body>
</html>