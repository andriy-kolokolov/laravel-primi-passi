<style>
    .nav-item.active {
        font-weight: bold;
    }
    .nav-item.active a {
        color: crimson;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-danger fw-bold" href="#">NETFLIX</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/movies">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tvshows">TV Shows</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/latest">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mylist">My List</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    // Get the current URL or page
    let currentUrl = window.location.href;

    // Get all the navigation links
    let navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Remove the "active" class from all navigation items
    navLinks.forEach(function (link) {
        link.parentNode.classList.remove('active');
    });

    // Loop through each navigation link
    navLinks.forEach(function (link) {
        // Check if the link's href matches the current URL
        if (link.href === currentUrl) {
            // Add the "active" class to the parent list item
            link.parentNode.classList.add('active');
        }
    });
</script>


