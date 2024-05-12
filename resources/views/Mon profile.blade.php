<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de {{ $user->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <!-- Barre de navigation -->
        <ul class="flex mb-4">
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('profile.show') }}">Mon Profil</a>
            </li>
            <li class="mr-6">
                <a class="text-blue-500 hover:text-blue-800 font-bold" href="#messages">Messagerie</a>
            </li>
            <li>
                <a class="text-blue-500 hover:text-blue-800 font-bold" href="/publier">Publier Annonce</a>
            </li>
        </ul>

      
        </div>
    </div>
</body>
</html>
