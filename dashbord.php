<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
        }
        .navbar {
            background-color: #6c757d;
            padding: 15px;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575757;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .header-1{
            background-color: #333;
            padding: 11px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-title {
            font-size: 18px;
            font-weight: bold;
        }
        .card-icon {
            font-size: 50px;
            color: #007bff;
        }
        .stat {
            font-size: 24px;
            color: #333;
        }
        .icon-container-1 {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 5px; 
        }
        .icon-container-2 {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .icon-container-3 {
            display: flex;
            align-items: center;
            gap: 5px; 
        }
        .icon-container-4 {
            display: flex;
            align-items: center;
            gap: 5px; 
        }
        
    </style>
</head>
<body>
     <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <i class="fas fa-chevron-right" style="font-size: 24px; color: white; position: absolute; left: 0; top: 50%; transform: translateY(-50%);"></i>
        <div class="d-flex align-items-center ms-auto">
            <div class="d-flex align-items-center" style="gap: 1cm;">
                <div class="icon-container">
                    <i class="fas fa-envelope" style="font-size: 15px; color: orange;"></i>
                    <i class="fas fa-chevron-down" style="font-size: 15px; color: orange;"></i>
                </div>
                <div class="icon-container">
                    <i class="fas fa-window-restore" style="font-size: 15px; color: orange;"></i>
                    <i class="fas fa-chevron-down" style="font-size: 15px; color: orange;"></i>
                </div>
            </div>

            <div style="min-width: 1cm;"></div>

            <div class="d-flex align-items-center" style="gap: 1cm;">
                <div class="icon-container">
                    <i class="fas fa-bell" style="font-size: 15px; color: orange;"></i>
                    <i class="fas fa-chevron-down" style="font-size: 15px; color: orange;"></i>
                </div>
                <div class="icon-container">
                    <i class="fas fa-users" style="font-size: 15px; color: orange;"></i>
                    <i class="fas fa-chevron-down" style="font-size: 15px; color: orange;"></i>
                </div>
            </div>
        </div>
    </div>
</nav>

    <div class="sidebar">
        <a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="index.php"><i class="fas fa-user-plus"></i> Registrasi 1</a>
        <a href="register.php"><i class="fas fa-user-plus"></i> Registrasi 2</a>
        <a href="option.php"><i class="fas fa-user-plus"></i> Registrasi 3</a>
        <a href="tabel.php"><i class="fas fa-chart-bar"></i> Data</a>
    </div>


    <div class="main-content">
        <strong>Dashboard</strong> Welcome John Doe
        <div class="header header-1">
        <a class="nav-link" style="color: #f7f9fc;" href="#">Home / Dashboard / Data</a>
        </div>
        <br>
            <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-people card-icon"></i>
                        <i class="fas fa-eye" id="show-password" style="font-size: 24px; color: orange;"></i>
                        <p class="stat">16,150</p>
                        <p class="text">Daily Visits</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-graph-up card-icon"></i>
                        <i class="fas fa-shopping-cart" style="font-size: 24px; color: orange;"></i>
                        <p class="stat">25, 550</p>
                        <p class="text">Sales</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-bar-chart card-icon"></i>
                        <i class="fas fa-comment" style="font-size: 24px; color: orange;"></i>                        <p class="stat">11,225</p>
                        <p class="text">Comment</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="bi bi-speedometer2 card-icon"></i>
                        <i class="fas fa-users" style="font-size: 24px; color: orange;"></i>
                        <p class="stat">72,525</p>
                        <p class="text">No. of Visits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
