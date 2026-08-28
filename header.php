<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talland Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="port.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <span class="navbar-brand h1 mb-0">Talland</span>
      <a class="nav-link text-white me-3" href="home.php">Home</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="projectDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Projecten
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="project.php">project 1</a></li>
              <li><a class="dropdown-item" href="project1.php">project 2</a></li>
              <li><a class="dropdown-item" href="opdracht3.php">Opdracht 3</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ik.php">Contact</a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Zoeken...">
          <button class="btn btn-outline-light" type="submit">Zoek</button>
        </form>
      </div>
    </div>
  </nav>