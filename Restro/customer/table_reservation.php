<?php
session_start();
include('config/config.php');
include('config/checklogin.php');
check_login();
require_once('partials/_head.php');
?>

<body>
    <!-- Sidenav -->
    <?php
    require_once('partials/_sidebar.php');
    $number_of_persons = $_POST["number_of_persons"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $budget = $_POST["budget"];
    $contact_number = $_POST["contact_number"];
    $email_address = $_POST["email_address"];
    $customer_name = $_POST["customer_name"];

    $post_query = "INSERT INTO rpos_table (customer_name, no_of_persons, date, time, budget, table_status) VALUES (?, ?, ?, ?, ?, ?)";
    $post_statement = $mysqli->prepare($post_query);
    $table_status = 1;
    $rc = $post_statement->bind_param('ssssss', $customer_name, $number_of_persons, $date, $time, $budget, $table_status);

    $post_statement->execute();

    ?>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <?php
        require_once('partials/_topnav.php');
        ?>
        <!-- Header -->
        <div style="background-image: url(../admin/assets/img/theme/restro00.jpg); background-size: cover;" class="header  pb-8 pt-5 pt-md-8">
        <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container-fluid">
                <div class="header-body">
                    Booking Successful!
                </div>
            </div>
        </div>
        Booking Successful!
    <?php
    require_once('partials/_scripts.php');
    ?>
</body>