<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $employee->full_name }} - Détails</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ec4899',
                        secondary: '#f9a8d4'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gradient-to-br from-slate-100 to-slate-300 min-h-screen font-sans">
    <div class="max-w-4xl mx-auto px-5 py-10">
        <div class="flex items-center gap-4 mb-8">
            <a href="{{ route('employees.list') }}" class="bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300">
                ← Retour à la liste
            </a>
            <h1 class="text-primary text-3xl font-bold md:text-4xl">
                👤 Détails de l'employé
            </h1>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-pink-500 text-white p-6">
                <div class="flex items-center gap-4">
                    <div class="w-16 h-16 bg-pink-400 rounded-full flex items-center justify-center text-white font-bold text-2xl">
                        {{ strtoupper(substr($employee->prenom, 0, 1) . substr($employee->nom, 0, 1)) }}
                    </div>
                    <div>
                        <h2 class="text-3xl font-bold">{{ $employee->full_name }}</h2>
                        <p class="opacity-90">{{ $employee->poste ?? 'Aucun poste défini' }}</p>
                    </div>
                </div>
            </div>
            
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="space-y-6">
                        <h3 class="text-xl font-bold text-gray-800 border-b pb-2">Informations personnelles</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-gray-600 mb-1">Nom</label>
                                <div class="text-lg text-gray-800">{{ $employee->nom }}</div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold text-gray-600 mb-1">Prénom</label>
                                <div class="text-lg text-gray-800">{{ $employee->prenom }}</div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-bold text-gray-600 mb-1">Email</label>
                                <div class="text-lg text-gray-800">
                                    <a href="mailto:{{ $employee->email }}" class="text-pink-500 hover:text-pink-600">
                                        {{ $employee->email }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h3 class="text-xl font-bold text-gray-800 border-b pb-2">Informations professionnelles</h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-bold text-gray-600 mb-1">Poste</label>
                                <div class="text-lg text-gray-800">
                                    {{ $employee->poste ?? 'Non renseigné' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>