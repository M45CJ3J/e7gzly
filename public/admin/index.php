<?php
require_once 'header.php';

if ($_SESSION['logged'] != 1)
  header('Location: ../index.php');
else if ($_SESSION['logged'] && (!$_SESSION['user_type'] > 1 && !$_SESSION['user_type'] < 5))
  header('Location: ../denied.php');
?>

<div class="container py-5">
  <div class="row">
    <div class="col-lg-4 offset-lg-1 col-sm-6">
      <a href="orgs.php">
        <div class="card gradient-3">
          <div class="card-body">
            <h3 class="text-white">Organizations Count</h3>
            <div class="d-inline-block">
              <h2 id='org_count' class="text-white"></h2>
            </div>
            <span class="float-right display-5 opacity-5"> <i class="fas fa-code-branch"></i></span>
          </div>
        </div>
      </a>
    </div>

    <div class="col-lg-4 offset-lg-1 col-sm-6">
      <div class="card gradient-2 ">
        <div class="card-body">
          <h3 class="text-white">Customers</h3>
          <div class="d-inline-block">
            <h2 id='customers' class="text-white"></h2>
          </div>
          <span class="float-right display-5 opacity-5">
          <i class="fas fa-users"></i>
        </span>
        </div>
      </div>
    </div>
    <div class="col-lg-4 offset-lg-1 col-sm-6">
      <div class="card gradient-1 ">
        <div class="card-body">
          <h3 class="text-white">Tickets</h3>
          <div class="d-inline-block">
            <h2 id='tickets' class="text-white"></h2>
          </div>
          <span class="float-right display-5 opacity-5"><i class="fas fa-ticket-alt"></i></span>
        </div>
      </div>
    </div>
  </div>
</div>


</div>
</div>




<?php require_once 'footer.php'; ?>