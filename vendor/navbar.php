   <div class="page">
     <div class="page-header">
       <div class="page-brand">RT:RP - UCP</div>
       <!-- <button id="nav-toggler" class="btn btn-outline-dark btn-lg nav-btn"><i class="fas fa-bars"></i></button> -->
     </div>
     <div class="page-body">
       <div class="page-nav" id="navigation">
         <?php if ($data["admin"] >= 4) : ?>
           <a class="nav-items" href="./index.php">
             <div class="nav-icons"><i class="material-icons">home</i></div>
             <div class="nav-name">Home</div>
           </a>
           <a class="nav-items" href="./donation.php">
             <div class="nav-icons"><i class="material-icons">paid</i></div>
             <div class="nav-name">Donation</div>
           </a>
           <a class="nav-items" href="./settings.php">
             <div class="nav-icons"><i class="material-icons">build</i></div>
             <div class="nav-name">Settings</div>
           </a>
           <a href="./admin" class="nav-items">
             <div class="nav-icons"><i class="material-icons">construction</i></div>
             <div class="nav-name">Admin</div>
           </a>
           <a class="nav-items" href="./logout.php">
             <div class="nav-icons"><i class="material-icons">logout</i></div>
             <div class="nav-name">Logout</div>
           </a>
         <?php else : ?>
           <a class="nav-items" href="./index.php">
             <div class="nav-icons"><i class="material-icons">home</i></div>
             <div class="nav-name">Home</div>
           </a>
           <a class="nav-items" href="./donation.php">
             <div class="nav-icons"><i class="material-icons">paid</i></div>
             <div class="nav-name">Donation</div>
           </a>
           <a class="nav-items" href="./settings.php">
             <div class="nav-icons"><i class="material-icons">build</i></div>
             <div class="nav-name">Settings</div>
           </a>
           <a class="nav-items" href="./logout.php">
             <div class="nav-icons"><i class="material-icons">logout</i></div>
             <div class="nav-name">Logout</div>
           </a>lass="nav-name">Logout
       </div>
       </a>
     <?php endif; ?>
     <div class="page-copyright">
       Copyright &copy; Red Timer Roleplay 2021.<br>Developed by <a href="https://fakhriyt.com" target="_blank">FakhriYT</a> &bull; <a href="https://forum.redtimer.xyz/forum/30-laporan-bug/?do=add" target="_blank">Report Bug</a>.
     </div>
     </div>