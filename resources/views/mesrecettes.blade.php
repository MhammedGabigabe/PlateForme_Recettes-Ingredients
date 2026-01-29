<!DOCTYPE html>
<html lang="fr" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes recettes | Wasftk</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sage: "#7a8d7e",
                        terracotta: "#c96f53",
                        "terracotta-dark": "#b05d44",
                        cream: "#f9f7f2",
                        "soft-black": "#2c2c2c",
                    },
                    fontFamily: {
                        sans: ["Plus Jakarta Sans", "sans-serif"],
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-cream text-soft-black font-sans">

<!-- HEADER -->
<header class="sticky top-0 z-50 bg-white border-b border-sage/10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-terracotta text-2xl">restaurant</span>
            <span class="font-extrabold">Wasftk</span>
        </div>

        <nav class="hidden md:flex gap-6 text-sm font-semibold">
            <a href="recettes" class="hover:text-terracotta">Explorer</a>
            <a href="mesrecettes" class="hover:text-terracotta">Mes recettes</a>
            <a href="#" class="hover:text-terracotta">
                Déconnexion
            </a>
        </nav>

        <button onclick="openRecipeModal()"
                class="px-4 py-2 rounded-xl bg-terracotta text-white text-sm font-semibold hover:bg-terracotta-dark transition">
            Publier une recette
        </button>
    </div>
</header>

<!-- CONTENU -->
<main class="max-w-7xl mx-auto px-6 py-10">

    <h1 class="text-3xl font-extrabold mb-2">Mes recettes</h1>
    <p class="text-sage text-sm mb-8">Gérez vos recettes publiées</p>

    <!-- GRID -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <!-- CARD -->
        <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition border border-sage/10 overflow-hidden">
            <img src="https://www.ptitchef.com/imgupl/recipe/pates-cremeuses-aux-champignons-et-a-la-saucisse--468808p751476.webp"
                 class="h-56 w-full object-cover" alt="recette">

            <div class="p-5">
                <h3 class="font-bold text-lg mb-1">Pâtes crémeuses aux champignons</h3>
                <p class="text-sm text-gray-600 line-clamp-2 mb-4">
                    Une recette simple et savoureuse pour les amateurs de cuisine italienne.
                </p>

                <!-- ACTIONS -->
                <div class="flex items-center gap-3">
                    <button onclick="openRecipeModal({
                        id: 1,
                        title: 'Pâtes crémeuses',
                        description: 'Recette italienne savoureuse',
                        ingredients: '- Pâtes\n- Crème\n- Champignons',
                        steps: '1. Cuire les pâtes\n2. Préparer la sauce'
                    })"
                    class="flex-1 py-2 rounded-xl border border-sage text-sage font-semibold text-sm">
                        Modifier
                    </button>

                    <button
                       class="flex-1 py-2 rounded-xl bg-red-500 text-white font-semibold text-sm hover:bg-red-600 transition">
                        Supprimer
                    </button>
                </div>
            </div>
        </article>

    </div>
</main>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-500 py-6">
    © 2026 Wasftk — Mes recettes
</footer>

<!-- MODAL -->
<div id="recipeModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">

    <div class="bg-white w-full max-w-2xl rounded-2xl shadow-xl p-6 relative">

        <!-- CLOSE -->
        <button onclick="closeRecipeModal()"
                class="absolute top-4 right-4 text-gray-400 hover:text-black">
            ✕
        </button>

        <h2 id="modalTitle" class="text-2xl font-extrabold mb-6">
            Publier une recette
        </h2>

        <form id="recipeForm" class="space-y-4">

            <!-- ID caché -->
            <input type="hidden" id="recipeId">

            <input type="text" id="title" placeholder="Titre"
                   class="w-full rounded-xl border bg-gray-50 px-4 py-3 text-sm">

            <textarea id="description" rows="2" placeholder="Description"
                      class="w-full rounded-xl border bg-gray-50 px-4 py-3 text-sm"></textarea>

            <textarea id="ingredients" rows="3" placeholder="Ingrédients (1 par ligne)"
                      class="w-full rounded-xl border bg-gray-50 px-4 py-3 text-sm"></textarea>

            <textarea id="steps" rows="4" placeholder="Étapes de préparation"
                      class="w-full rounded-xl border bg-gray-50 px-4 py-3 text-sm"></textarea>

            <input type="file" class="w-full text-sm">

            <!-- ACTION -->
            <button id="submitBtn"
                    class="w-full h-12 bg-terracotta text-white font-bold rounded-xl hover:bg-terracotta-dark transition">
                Publier la recette
            </button>

        </form>
    </div>
</div>

<script>
function openRecipeModal(recipe = null) {
    const modal = document.getElementById('recipeModal');
    const submitBtn = document.getElementById('submitBtn');
    const modalTitle = document.getElementById('modalTitle');

    modal.classList.remove('hidden');
    modal.classList.add('flex');

    if (recipe && recipe.id) {
        // MODE EDIT
        document.getElementById('recipeId').value = recipe.id;
        document.getElementById('title').value = recipe.title;
        document.getElementById('description').value = recipe.description;
        document.getElementById('ingredients').value = recipe.ingredients;
        document.getElementById('steps').value = recipe.steps;

        submitBtn.textContent = 'Mettre à jour la recette';
        modalTitle.textContent = 'Modifier la recette';
    } else {
        // MODE CREATE
        document.getElementById('recipeForm').reset();
        document.getElementById('recipeId').value = '';

        submitBtn.textContent = 'Publier la recette';
        modalTitle.textContent = 'Publier une recette';
    }
}

function closeRecipeModal() {
    document.getElementById('recipeModal').classList.add('hidden');
}
</script>


</body>
</html>
