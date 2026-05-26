<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            Employee Management System
        </a>
    </div>
</nav>

<div class="container mt-5">

    <div class="text-center mb-4">
        <h1>Employee Dashboard</h1>
        <p class="text-muted">Manage employees and monitor workforce statistics</p>
    </div>

    <div class="row">

        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>👥 Total Employees</h5>
                    <h1 class="text-primary">
                        <?= $totalEmployees ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>✅ Active Employees</h5>
                    <h1 class="text-success">
                        <?= $activeEmployees ?>
                    </h1>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>❌ Inactive Employees</h5>
                    <h1 class="text-danger">
                        <?= $inactiveEmployees ?>
                    </h1>
                </div>
            </div>
        </div>

    </div>

    <div class="text-center mt-5">

        <a href="/employee" class="btn btn-primary btn-lg me-2">
            Manage Employees
        </a>

        <a href="/employee/create" class="btn btn-success btn-lg">
            Add Employee
        </a>

    </div>

</div>

<footer class="text-center mt-5 mb-3 text-muted">
    Employee Management System |
    Built with CodeIgniter 4 |
    Deployed via AWS CodePipeline & CodeDeploy
</footer>

</body>
</html>
