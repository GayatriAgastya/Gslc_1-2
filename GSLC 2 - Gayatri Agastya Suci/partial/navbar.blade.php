<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Tugas 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Data") ? 'active' : '' }}" href="/data">Data</a>
          </li>
        </ul>
    </div>
</nav>
