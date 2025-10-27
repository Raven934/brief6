<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Employé</title>
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
                ← Retour
            </a>
            <h1 class="text-primary text-3xl font-bold md:text-4xl">
                ✏️ Modifier un Employé
            </h1>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-pink-500 text-white p-6">
                <h2 class="text-2xl font-bold">Modifier: {{ $employee->full_name }}</h2>
                <p class="opacity-90">Modifiez les informations de l'employé</p>
            </div>
            
            <form method="POST" action="{{ route('employees.update', $employee) }}" class="p-8">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nom" class="block text-sm font-bold text-gray-700 mb-2">
                            👤 Nom *
                        </label>
                        <input 
                            type="text" 
                            id="nom" 
                            name="nom" 
                            value="{{ $employee->nom }}"
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: Dupont"
                        >
                    </div>
                    
                    <div>
                        <label for="prenom" class="block text-sm font-bold text-gray-700 mb-2">
                            👤 Prénom *
                        </label>
                        <input 
                            type="text" 
                            id="prenom" 
                            name="prenom" 
                            value="{{ $employee->prenom }}"
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: Jean"
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-bold text-gray-700 mb-2">
                            📧 Email *
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ $employee->email }}"
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: jean.dupont@example.com"
                        >
                    </div>

                    <div>
                        <label for="telephone" class="block text-sm font-bold text-gray-700 mb-2">
                            📞 Téléphone
                        </label>
                        <input 
                            type="tel" 
                            id="telephone" 
                            name="telephone"
                            value="{{ $employee->telephone }}"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: 0123456789"
                        >
                    </div>

                    <div>
                        <label for="departement" class="block text-sm font-bold text-gray-700 mb-2">
                            🏢 Département *
                        </label>
                        <select 
                            id="departement" 
                            name="departement" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                        >
                            <option value="developpement" {{ $employee->departement == 'developpement' ? 'selected' : '' }}>Développement</option>
                            <option value="marketing" {{ $employee->departement == 'marketing' ? 'selected' : '' }}>Marketing</option>
                            <option value="rh" {{ $employee->departement == 'rh' ? 'selected' : '' }}>Ressources Humaines</option>
                            <option value="ventes" {{ $employee->departement == 'ventes' ? 'selected' : '' }}>Ventes</option>
                            <option value="support" {{ $employee->departement == 'support' ? 'selected' : '' }}>Support</option>
                        </select>
                    </div>

                    <div>
                        <label for="poste" class="block text-sm font-bold text-gray-700 mb-2">
                            💼 Poste
                        </label>
                        <input 
                            type="text" 
                            id="poste" 
                            name="poste"
                            value="{{ $employee->poste }}"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: Développeur Frontend"
                        >
                    </div>

                    <div>
                        <label for="date_embauche" class="block text-sm font-bold text-gray-700 mb-2">
                            📅 Date d'embauche
                        </label>
                        <input 
                            type="date" 
                            id="date_embauche" 
                            name="date_embauche"
                            value="{{ $employee->date_embauche ? $employee->date_embauche->format('Y-m-d') : '' }}"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                        >
                    </div>

                    <div>
                        <label for="salaire" class="block text-sm font-bold text-gray-700 mb-2">
                            💰 Salaire (€/mois)
                        </label>
                        <input 
                            type="number" 
                            id="salaire" 
                            name="salaire"
                            value="{{ $employee->salaire }}"
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: 45000"
                            min="0"
                            step="100"
                        >
                    </div>
                </div>

                <div class="flex gap-4 mt-8">
                    <a href="{{ route('employees.list') }}" class="flex-1 bg-gray-300 text-gray-700 font-bold py-4 px-6 rounded-xl hover:bg-gray-400 transition-all duration-300 text-center">
                        Annuler
                    </a>
                    <button 
                        type="submit" 
                        class="flex-1 bg-pink-500 text-white font-bold py-4 px-6 rounded-xl hover:bg-pink-600 transition-all duration-300"
                    >
                        💾 Sauvegarder les modifications
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>