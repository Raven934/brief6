<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Employés</title>
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
    <div class="max-w-7xl mx-auto px-5 py-10">
        
        <div class="flex items-center justify-between mb-8">
            <div class="flex items-center gap-4">
                <a href="{{ route('employees.dashboard') }}" class="bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300">
                    ← Retour
                </a>
                <h1 class="text-primary text-3xl font-bold md:text-4xl">
                    📋 Liste des Employés
                </h1>
            </div>
            <a href="{{ route('employees.create') }}" class="bg-pink-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                ➕ Ajouter un Employé
            </a>
        </div>
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            @if(isset($employees) && $employees->count() > 0)
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-pink-500 text-white">
                            <tr>
                                <th class="px-6 py-4 text-left font-bold">Employé</th>
                                <th class="px-6 py-4 text-left font-bold">Email</th>
                                <th class="px-6 py-4 text-left font-bold">Téléphone</th>
                                <th class="px-6 py-4 text-left font-bold">Département</th>
                                <th class="px-6 py-4 text-left font-bold">Poste</th>
                                <th class="px-6 py-4 text-left font-bold">Date d'embauche</th>
                                <th class="px-6 py-4 text-center font-bold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 bg-pink-400 rounded-full flex items-center justify-center text-white font-bold">
                                            {{ strtoupper(substr($employee->prenom, 0, 1) . substr($employee->nom, 0, 1)) }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-gray-800">{{ $employee->full_name }}</div>
                                            <div class="text-sm text-gray-500">ID: {{ $employee->id }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-gray-700">{{ $employee->email }}</td>
                                <td class="px-6 py-4 text-gray-700">{{ $employee->telephone ?? 'N/A' }}</td>
                                <td class="px-6 py-4">
                                    <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">
                                        {{ ucfirst($employee->departement) }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-gray-700">{{ $employee->poste ?? 'N/A' }}</td>
                                <td class="px-6 py-4 text-gray-700">
                                    {{ $employee->date_embauche ? $employee->date_embauche->format('d/m/Y') : 'N/A' }}
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('employees.show', $employee) }}" class="bg-pink-400 text-white px-3 py-1 rounded-lg hover:bg-pink-500 transition-colors text-sm">
                                            👁️ Voir
                                        </a>
                                        <a href="{{ route('employees.edit', $employee) }}" class="bg-pink-300 text-white px-3 py-1 rounded-lg hover:bg-pink-400 transition-colors text-sm">
                                            ✏️ Modifier
                                        </a>
                                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" class="inline" 
                                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-pink-600 text-white px-3 py-1 rounded-lg hover:bg-pink-700 transition-colors text-sm">
                                                🗑️ Supprimer
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-16">
                    <div class="text-6xl mb-4">👥</div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Aucun employé trouvé</h3>
                    <p class="text-gray-500 mb-6">Commencez par ajouter votre premier employé</p>
                    <div class="bg-pink-100 border border-pink-400 text-pink-700 px-6 py-4 rounded-xl max-w-md mx-auto mb-6">
                        <strong>💡 Conseil:</strong> Exécutez les seeders pour générer des employés de test:
                        <br><code class="bg-pink-200 px-2 py-1 rounded mt-2 inline-block">php artisan db:seed --class=EmployeeSeeder</code>
                    </div>
                    <a href="{{ route('employees.create') }}" class="bg-pink-500 text-white font-bold py-3 px-6 rounded-xl hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        ➕ Ajouter un Employé
                    </a>
                </div>
            @endif
        </div>

        @if(isset($employees) && $employees->count() > 0)
            <div class="mt-8 bg-white rounded-2xl shadow-xl p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-6">📊 Statistiques des Employés</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="bg-pink-500 text-white p-4 rounded-xl text-center">
                        <div class="text-3xl font-bold">{{ $employees->count() }}</div>
                        <div class="text-sm opacity-90">Total Employés</div>
                    </div>
                    <div class="bg-pink-400 text-white p-4 rounded-xl text-center">
                        <div class="text-3xl font-bold">{{ $employees->unique('departement')->count() }}</div>
                        <div class="text-sm opacity-90">Départements</div>
                    </div>
                    <div class="bg-pink-600 text-white p-4 rounded-xl text-center">
                        <div class="text-3xl font-bold">
                            {{ $employees->whereNotNull('salaire')->count() > 0 ? number_format($employees->whereNotNull('salaire')->avg('salaire'), 0) . '€' : 'N/A' }}
                        </div>
                        <div class="text-sm opacity-90">Salaire Moyen</div>
                    </div>
                    <div class="bg-pink-300 text-white p-4 rounded-xl text-center">
                        <div class="text-3xl font-bold">{{ $employees->where('created_at', '>=', now()->subMonth())->count() }}</div>
                        <div class="text-sm opacity-90">Nouveaux (30j)</div>
                    </div>
                </div>
            </div>
        @endif

                </div>
            </div>
        @endif
    </div>
</body>
</html>