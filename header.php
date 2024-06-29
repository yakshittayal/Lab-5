
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Pets</title>
  <link rel="stylesheet" href="./css/bootstrap.css" />
  <link rel="stylesheet" href="./css/style.css" />
</head>
<body>
  <header class="mb-5">
    <div class="container mt-5">
      <div class="d-flex justify-content-end">
        <div class="btn-group">
          <button class="btn btn-secondary btn-sm" data-bs-theme-value="dark">
            Dark
          </button>
        </div>
        <div class="btn-group">
          <button class="btn btn-light btn-sm" data-bs-theme-value="light">
            Light
          </button>
        </div>
      </div>
      <h1 class="mb-4">Animals</h1>
      <div class="row">
        <div class="col-md-4">
          <input
            type="text"
            class="form-control form-control-lg"
            placeholder="Search Animals"
          />
        </div>
        <div
          class="col-md-8 user-menu d-flex justify-content-end align-items-center"
        >
          <ul class="nav">
            <li class="nav-itm">
              <a href="index.html" class="nav-link">Adaptations</a>
            </li>
            <li class="nav-itm">
              <a href="behavior.php" class="nav-link text-bg-primary rounded-3"
                >Behavior</a
              >
            </li>
            <li class="nav-itm">
              <a href="index.html" class="nav-link">Conservation</a>
            </li>
            <li class="nav-itm">
              <a href="index.html" class="nav-link">Diversity</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>
