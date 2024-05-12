<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma page</title>
  <!-- Inclure les fichiers CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Inclure la bibliothèque Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      margin-bottom: 30px;
      border-radius: 15px;
      border: 1px solid #ced4da;
      transition: transform 0.3s ease-in-out;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .card-img-top {
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      max-height: 200px;
      object-fit: cover;
    }
    .card-body {
      padding: 20px;
    }
    .card-title {
      font-size: 1.25rem;
      font-weight: bold;
    }
    .card-text {
      color: #6c757d;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
      border-radius: 25px;
      padding: 8px 20px;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #0056b3;
    }
    .btn-icon {
      margin-right: 5px;
    }
  </style>
</head>
<body>
<div class="container">
    <div class="row">
        @foreach($annonces as $annonce)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img src="{{ asset('storage/'.$annonce->image) }}" alt="Image de l'annonce" class="card-img-top">

                <div class="card-body">
                    <h5 class="card-title">{{ $annonce->modele }}</h5>
                    <p class="card-text">Prix: {{ $annonce->prix }}</p>
                    <p class="card-text">Kilométrage: {{ $annonce->kilometrage }}</p>
                    <p class="card-text">Location: {{ $annonce->location }}</p>
                    <!-- Bouton "Contacter le propriétaire" avec une icône -->
                    <a href="/login" class="btn btn-primary"><i class="fas fa-envelope btn-icon"></i> Contacter le propriétaire</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
