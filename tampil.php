<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="assets\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link href="assets\css\fontawesome-free\css\all.min.css" rel="stylesheet">
    <link href="assets\css\style.css" rel="stylesheet">
    <title>
        Tampilkan Editor
    </title>
    </link>
    </link>
    </link>
    </meta>
    </meta>
    </meta>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="index.php">
            <i class="fas fa-edit">
            </i>
            DATA EDITOR
        </a>
        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="cari.php">
                        Cari Editor
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="tampil.php">
                        Tampilkan Editor
                    </a>
                </li>

            </ul>
        </div>
        
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
				<a class="nav-link" href="about.php"><button class="btn btn-outline-light" type="button" class="nav-link" href="about.php">About Me</button></a>
				</li>
		</ul>
    </nav>
    <!-- End Navbar -->

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="result d-flex justify-content-center mt-4"></div>
            </div>
        </div>
    </div>

    <script src="assets\bootstrap\js\jquery.min.js">
    </script>
    <script src="assets\bootstrap\js\bootstrap.min.js">
    </script>
    <script>
        let loading = '<img class="text-center" alt="loading......" class="ml-auto" src="assets\\img\\ding.gif" width="30%">'
        $(".result").html(loading);
        loadData();

        function loadData() {
            $.get('core/get.php?q=show', function(data) {
                $(".result").html(data);
            });
        }
    </script>
</body>

</html>