{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="/">ERROR</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Post') ? 'active' : '' }}" href="/post">LULU</a>
                </li>

            </ul>
            <!-- <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
        </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">ERROR</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="index.html#home-section" class="nav-link"><span>Home</span></a></li>
          <li class="nav-item"><a href="index.html#about-section" class="nav-link"><span>About</span></a></li>
          <li class="nav-item"><a href="index.html#resume-section" class="nav-link"><span>Resume</span></a></li>
          <li class="nav-item"><a href="index.html#services-section" class="nav-link"><span>Services</span></a></li>
          <li class="nav-item"><a href="index.html#skills-section" class="nav-link"><span>Skills</span></a></li>
          <li class="nav-item"><a href="index.html#projects-section" class="nav-link"><span>Projects</span></a></li>
          <li class="nav-item"><a href="/categories/programing" class="nav-link"><span>My Blog</span></a></li>
          <li class="nav-item"><a href="/post" class="nav-link {{ ($active === 'active') ? 'active' : '' }} "><span>Contact</span></a></li>
        </ul>
      </div>
    </div>
  </nav>