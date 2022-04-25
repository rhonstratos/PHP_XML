
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <div class="container-fluid">
        <a href="./"><img src="../assets/nav.png" alt="Woggy" class="navbar-brand ms-5" width="60" height="70"></a>
        <div></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav fs-4 mx-auto">
                <li class="nav-item me-2"><a href="./" class="nav-link active">Home</a></li>
                <li class="nav-item me-2"><a href="./register.php" class="nav-link active">Register</a></li>
                <li class="nav-item"><a href="./edit.php" class="nav-link active">Edit</a></li>
                <li>
                    <form action="./" method="post" class="d-flex fs-4 ms-lg-5">
                        <div class="form-group w-100 input-group input-group-lg">
                            <span class="input-group-text">Search</span>
                            <input type="text" name="search" class="form-control text-center" value="<?php include('search.php'); ?>"></input>                   
                            <button class="btn btn-success" type="submit" name="searchRequest">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search mb-1" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>