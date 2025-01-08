<nav class="col-md-2 bg-light sidebar vh-100">
    <div class="p-3">
        <!-- User Info -->
        <div class="user-info d-flex align-items-center my-4">
            <a href="dashboard.php">
                <img src="img/s.jpg" alt="User" class="rounded-circle me-3" width="50" />
            </a>
            <div>
                <h6 class="mb-0">Saqib Din</h6>
                <span class="text-muted">Administrator</span>
            </div>
        </div>

        <!-- Navigation Menu -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark" href="dashboard.php"><i class="fa fa-home me-2"></i>Dashboard</a>
            </li>

            <!-- Teachers Dropdown -->
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="collapse" href="#teacherDropdown" aria-expanded="false" aria-controls="teacherDropdown">
                    <i class="fa-solid fa-chalkboard-user me-2"></i>Teachers
                </a>
                <div class="collapse" id="teacherDropdown">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="list.html">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="add.html">Add</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Students Dropdown -->
            <li class="nav-item">
                <a class="nav-link text-dark" data-bs-toggle="collapse" href="#studentDropdown" aria-expanded="false" aria-controls="studentDropdown">
                    <i class="fa-solid fa-users me-2"></i>Students
                </a>
                <div class="collapse" id="studentDropdown">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="list.html">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="student.php">Add</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark setting-gears" data-bs-toggle="collapse" href="#settingDropdown" aria-expanded="false" aria-controls="studentDropdown">
                <i class="fa-solid fa-gear me-2 "></i>Settings
                </a>
                <div class="collapse" id="settingDropdown">
                    <ul class="nav flex-column ms-3">
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="profile.php">My Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="admin.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</nav>
