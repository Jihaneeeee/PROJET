<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
    <!-- Liens CDN pour Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 400px; /* Largeur maximale pour le formulaire */
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            border-radius: 15px 15px 0 0;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .card-body {
            background-color: #fff;
            border-radius: 0 0 15px 15px;
            padding: 20px;
        }
        .form-control {
            border-color: #007bff;
            border-radius: 25px;
            box-shadow: none;
            padding: 15px;
        }
        .form-control:focus {
            border-color: #0056b3;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 25px;
            padding: 12px 20px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .text-danger {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Connexion Administrateur</h1>
            </div>
            <div class="card-body">
                <form method="POST" action='/admin/login'>
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Adresse email" required>
                        @error('email')
                        <span class="text-danger">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Liens CDN pour Bootstrap JavaScript (à décommenter si vous utilisez des fonctionnalités Bootstrap JavaScript) -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>
</html>
