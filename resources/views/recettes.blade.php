<!DOCTYPE html>
<html lang="fr" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes | Wasftk</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    <script>
        tailwind.config = {
            darkMode: "class",
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
<header class="sticky top-0  bg-white border-b border-sage/10">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <span class="material-symbols-outlined text-2xl text-terracotta">restaurant</span>
            <span class="font-extrabold text-lg">Wasftk</span>
        </div>

        <nav class="hidden md:flex gap-6 text-sm font-semibold">
            <a href="#" class="hover:text-terracotta">Explorer</a>
            <a href="#" class="hover:text-terracotta">Mes recettes</a>
            <a href="#" class="text-terracotta">
                Déconnexion
            </a>
        </nav>

        <img src="https://i.pravatar.cc/40" class="w-9 h-9 rounded-full border" alt="profil">
    </div>
</header>

<!-- CONTENU -->
<main class="max-w-7xl mx-auto px-6 py-10">

    <!-- TITRE + FILTRES -->
    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6 mb-10">
        <div>
            <h1 class="text-3xl font-extrabold mb-1">Explorer les recettes</h1>
            <p class="text-sage text-sm">Découvrez des plats partagés par la communauté</p>
        </div>

        <div class="flex flex-col sm:flex-row gap-3 w-full lg:w-auto">
            <input type="text" placeholder="Rechercher une recette..."
                   class="rounded-xl border bg-white px-4 py-3 text-sm w-full sm:w-64 focus:ring-2 focus:ring-sage">

            <select class="rounded-xl w-48 border bg-white px-4 py-3 text-sm focus:ring-2 focus:ring-sage">
                <option>Toutes les catégories</option>
                <option>Entrées</option>
                <option>Plats</option>
                <option>Desserts</option>
                <option>Boissons</option>
            </select>
        </div>
    </div>

    <!-- GRID RECETTES -->
    <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

        <!-- CARD -->
        <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition border border-sage/10">
            <img src="https://www.ptitchef.com/imgupl/recipe/pates-cremeuses-aux-champignons-et-a-la-saucisse--468808p751476.webp" alt="recette" class="h-56 w-full object-cover">

            <div class="p-5">
                <span class="text-xs bg-sage/10 text-sage px-3 py-1 rounded-full">Plat</span>

                <h3 class="text-lg font-bold mt-3 mb-1">Pâtes crémeuses aux champignons</h3>
                <p class="text-sm text-gray-600 line-clamp-2">
                    Une recette simple et savoureuse pour les amateurs de cuisine italienne.
                </p>

                <div class="flex items-center justify-between mt-4 text-sm">
                    <span class="flex items-center gap-1 text-sage">
                        <span class="material-symbols-outlined text-base">comment</span> 12
                    </span>
                    <span class="text-gray-500">par Ahmed</span>
                </div>
            </div>
        </article>

        <!-- CARD -->
        <article class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition border border-sage/10">
            <img src="https://empreintesucree.fr/wp-content/uploads/2018/02/1-fondant-chocolat-recette-patisserie-empreinte-sucree-1.jpg" alt="recette" class="h-56 w-full object-cover">

            <div class="p-5">
                <span class="text-xs bg-terracotta/10 text-terracotta px-3 py-1 rounded-full">Dessert</span>

                <h3 class="text-lg font-bold mt-3 mb-1">Gâteau au chocolat fondant</h3>
                <p class="text-sm text-gray-600 line-clamp-2">
                    Un classique irrésistible pour les amoureux du chocolat.
                </p>

                <div class="flex items-center justify-between mt-4 text-sm">
                    <span class="flex items-center gap-1 text-sage">
                        <span class="material-symbols-outlined text-base">comment</span> 27
                    </span>
                    <span class="text-gray-500">par Sara</span>
                </div>
            </div>
        </article>

    </div>
</main>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-500 py-6">
    © 2026 Wasftk — Partageons la passion de la cuisine
</footer>

</body>
</html>
