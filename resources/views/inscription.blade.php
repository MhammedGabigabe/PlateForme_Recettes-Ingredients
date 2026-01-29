<!DOCTYPE html>
<html class="light" lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Authentification | Wasftk</title>

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

    <style>
        body {
            font-family: "Plus Jakarta Sans", sans-serif;
        }
    </style>
</head>

<body class="bg-cream h-screen overflow-hidden text-soft-black">

<div class="flex h-screen w-full flex-col lg:flex-row overflow-hidden">

    <!-- IMAGE (DESKTOP) -->
    <div class="relative hidden lg:flex lg:w-1/2 bg-cover bg-center"
         style='background-image:url("https://lh3.googleusercontent.com/aida-public/AB6AXuAh-Tv7f37_o6UJVAHrmn7gQbNtJwNqc_Er1O4QeagjgXbCOVA8-1mDXZNoZ2CwUpMU7Z30bQZob_sNv7x9ZkoMzK3c9uE-eRUXODg9YsP4JSEWYMoMXMLTfqd9eNjCmi6YkvoNeK7POzwTX0i9Y0KXjUCEeBpOZh7xIrYbH-ftgVN81vChI5e1sEBb0YGQY2Okuo0LwDqjdF1yZkhretyyg9JFL2AMQ3zCEgp71Q7EkUdt_zBW583A3BjIFRu8aH6lYZhwo6QNq9U");'>
        <div class="absolute inset-0 bg-black/30 p-12 text-white flex flex-col justify-between">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-3xl">restaurant</span>
                <span class="text-xl font-bold">Wasftk</span>
            </div>
            <div>
                <h1 class="text-4xl font-extrabold mb-4">L'art de cuisiner ensemble.</h1>
                <p class="text-base opacity-90">Partagez vos recettes et astuces culinaires.</p>
            </div>
            <span class="text-xs opacity-80">© 2026 Wasftk</span>
        </div>
    </div>

    <!-- FORMULAIRE -->
    <div class="flex flex-1 items-center justify-center p-6 bg-cream overflow-hidden">

        <div class="w-full max-w-[420px] bg-white p-8 rounded-2xl shadow-xl border border-sage/10">

            <!-- LOGO MOBILE -->
            <div class="flex lg:hidden justify-center items-center gap-2 mb-6">
                <span class="material-symbols-outlined text-terracotta text-3xl">restaurant</span>
                <span class="text-lg font-bold">Culina</span>
            </div>

            <!-- TITRE -->
            <div class="mb-6 text-center lg:text-left">
                <h2 class="text-2xl font-extrabold mb-1">Bienvenue</h2>
                <p class="text-sm text-sage">Créer votre compte</p>
            </div>

            <!-- FORM -->
            <form action="inscriptionController" method="POST" class="space-y-5">
            @csrf
                <!-- NOM -->
                <div>
                    <label class="text-sm font-bold mb-1 block">Nom</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-sage/60 text-lg">person</span>
                        <input type="text" name="fullname" placeholder="Votre nom"
                               class="w-full pl-11 py-3 text-sm rounded-xl border bg-gray-50 focus:ring-2 focus:ring-sage">
                    </div>
                </div>

                <!-- EMAIL -->
                <div>
                    <label class="text-sm font-bold mb-1 block">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-sage/60 text-lg">alternate_email</span>
                        <input type="email" name="email" placeholder="exemple@email.fr"
                               class="w-full pl-11 py-3 text-sm rounded-xl border bg-gray-50 focus:ring-2 focus:ring-sage">
                    </div>
                </div>

                <!-- PASSWORD -->
                <div>
                    <label class="text-sm font-bold mb-1 block">Mot de passe</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-sage/60 text-lg">lock</span>
                        <input type="password" name="password" placeholder="••••••••"
                               class="w-full pl-11 pr-10 py-3 text-sm rounded-xl border bg-gray-50 focus:ring-2 focus:ring-sage">
                        <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-sage/60">
                            <span class="material-symbols-outlined text-lg">visibility</span>
                        </button>
                    </div>
                </div>

                <!-- BOUTONS -->
                <div class="space-y-3 pt-2">
                    <button class="w-full h-12 bg-terracotta hover:bg-terracotta-dark text-white font-bold rounded-xl text-sm">
                        Créer un compte
                    </button>
                </div>
                <div class="text-center text-sm pt-4">
                    <span class="text-gray-600">Déjà inscrit ?</span>
                    <a href="{{'login'}}"
                    class="font-bold text-terracotta hover:text-terracotta-dark transition">
                        Se connecter
                    </a>
                </div>


            </form>
        </div>
    </div>
</div>

</body>
</html>
