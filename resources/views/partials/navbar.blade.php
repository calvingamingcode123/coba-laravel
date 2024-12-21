<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Kirafan Wiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{ ($title === 'home') ? 'active' : '' }}" href="/">Home</a>
          <a class="nav-link {{ ($title === 'about') ? 'active' : '' }}" href="/about">About</a>
          <a class="nav-link {{ ($title === 'battle') ? 'active' : '' }}" href="/battle">Battle</a>
          <a class="nav-link {{ ($title === 'items') ? 'active' : '' }}" href="/items">items</a>
          <a class="nav-link {{ ($title === 'library') ? 'active' : '' }}" href="/library">Library</a>
          <a class="nav-link {{ ($title === 'other') ? 'active' : '' }}" href="/other">other</a>
        </div>
      </div>
    </div>
  </nav>
