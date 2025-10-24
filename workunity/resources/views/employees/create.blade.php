<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Employé</title>
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
    <div class="max-w-4xl mx-auto px-5 py-10">
        <div class="flex items-center gap-4 mb-8">
            <a href="/employees" class="bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300">
                ← Retour
            </a>
            <h1 class="text-primary text-3xl font-bold md:text-4xl">
                ➕ Ajouter un Employé
            </h1>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-teal-500 to-green-500 text-white p-6">
                <h2 class="text-2xl font-bold">Nouveau Employé</h2>
                <p class="opacity-90">Remplissez les informations de l'employé</p>
            </div>
            
            <form class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="nom" class="block text-sm font-bold text-gray-700 mb-2">
                            👤 Nom complet *
                        </label>
                        <input 
                            type="text" 
                            id="nom" 
                            name="nom" 
                            required
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: Jean Dupont"
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
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                            placeholder="Ex: +33 1 23 45 67 89"
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
                            <option value="">Sélectionner un département</option>
                            <option value="developpement">Développement</option>
                            <option value="marketing">Marketing</option>
                            <option value="rh">Ressources Humaines</option>
                            <option value="ventes">Ventes</option>
                            <option value="support">Support Client</option>
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
                            class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                        >
                    </div>
                </div>

                <div class="mt-6">
                    <label for="salaire" class="block text-sm font-bold text-gray-700 mb-2">
                        💰 Salaire (€/mois)
                    </label>
                    <input 
                        type="number" 
                        id="salaire" 
                        name="salaire"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors"
                        placeholder="Ex: 45000"
                        min="0"
                        step="100"
                    >
                </div>

                <div class="mt-6">
                    <label for="adresse" class="block text-sm font-bold text-gray-700 mb-2">
                        📍 Adresse
                    </label>
                    <textarea 
                        id="adresse" 
                        name="adresse"
                        rows="3"
                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-primary focus:outline-none transition-colors resize-none"
                        placeholder="Ex: 123 Rue de la Paix, 75001 Paris"
                    ></textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 mt-8">
                    <button 
                        type="submit"
                        class="flex-1 bg-gradient-to-r from-teal-500 to-green-500 text-white font-bold py-4 px-6 rounded-xl hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300"
                    >
                        ✅ Ajouter l'employé
                    </button>
                    <button 
                        type="reset"
                        class="flex-1 bg-gray-200 text-gray-700 font-bold py-4 px-6 rounded-xl hover:bg-gray-300 transition-all duration-300"
                    >
                        🔄 Réinitialiser
                    </button>
                </div>
            </form>
        </div>


        <div class="mt-8 bg-white rounded-2xl shadow-xl p-6">
            <h3 class="text-xl font-bold text-gray-800 mb-4">💡 Conseils</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                <div class="flex items-center gap-2">
                    <span class="text-green-500">✓</span>
                    <span>Utilisez un email professionnel</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-green-500">✓</span>
                    <span>Vérifiez le département choisi</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-green-500">✓</span>
                    <span>Les champs avec * sont obligatoires</span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="text-green-500">✓</span>
                    <span>Le téléphone peut inclure l'indicatif</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>