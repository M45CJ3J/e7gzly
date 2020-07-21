<?php
require_once 'header.php';

if (!$_SESSION['logged'])
    header('Location: ../index.php');
else if ($_SESSION['logged'] && $_SESSION['user_type'] != 2)
    header('Location: ../denied.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6">
            <div class="card gradient-3">
                <div class="card-body">
                    <h3 class=" text-white">Waiting Customers</h3>
                    <div class="d-inline-block">
                        <h2 id='waiting' class="text-white"></h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fas fa-user-clock"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 col-sm-6">
            <div class="card gradient-1">
                <div class="card-body">
                    <h3 class="text-white">Customer Name</h3>
                    <div class="d-inline-block">
                        <h2 id='cust_name'  class="text-white"></h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 offset-lg-1 col-sm-6">
            <div class="card gradient-2">
                <div class="card-body">
                    <h3 class=" text-white">Service Name</h3>
                    <div class="d-inline-block">
                        <h2 id='service_name' class="text-white"></h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fas fa-cogs"></i></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 offset-lg-1 col-sm-6">
            <div class="card gradient-4">
                <div class="card-body">
                    <h3 class="text-white">Ticket Number</h3>
                    <div class="d-inline-block">
                        <h2  id='ticket_name' class="text-white"></h2>
                    </div>
                    <span class="float-right display-5 opacity-5"><i class="fas fa-ticket-alt"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row py-5">
        <div class="col-12">
            <form id="next_customer_form" method="post">
                <button name="form-btn" value="next" class="btn btn-primary form-btn d-block mx-auto  py-5 px-5 font-size-30" type="submit"><h3 class="text-white">Next Customer</h3></button>
            </form>

        </div>
    </div>
</div>


<?php require_once 'footer.php'; ?>