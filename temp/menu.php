<!-- Page Content  -->

<div id="content" class="p-4 p-md-5">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="fa fa-user text-success" aria-hidden="true"> <?php echo $datos?></sapn></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../cerrarsesion.php"><span class="fa fa-power-off text-danger" aria-hidden="true"> salir</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>