<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><?php echo lang('shop'); ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#app-nav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="app-nav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="#"> <?php echo lang('Categories'); ?> </a></li>
         <li> <a class="nav-link" href="#"> <?php echo lang('ITEMS') ?>   </a></li>
         <li> <a class="nav-link" href="#"> <?php echo lang('MEMBERS') ?> </a></li>
         <li> <a class="nav-link" href="#"> <?php echo lang('STATISTICS') ?> </a></li>
         <li> <a class="nav-link" href="#"> <?php echo lang('LOGS') ?> </a></li>
        
        
        <li class="nav-item dropdown nav-item_dropdown" >
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Alaa Edine
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
            <li><a class="dropdown-item" href="#">Edit Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
