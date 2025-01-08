<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="./styles/dashboard.css">
    <link rel="stylesheet" href="./styles/students.css">
</head>

<body class="bg-light">
    <!-- Main Container -->
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <!-- Sidebar -->
            <aside class="col-md-2 p-0">
                <?php include './components/sidebar.php'; ?>
            </aside>

            <!-- Main Content Area -->
            <div class="col-md-10 p-0 d-flex flex-column">
                <!-- Topbar -->
                <header class="">
                    <?php include './components/topbar.php'; ?>
                </header>

                <!-- Main Section -->
                    <section class="">
                        <!-- Example Content -->
                        <?php include './contents/students.php'; ?>
                    </section>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
