<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Curfew Pass - <?php echo $title ?></title>
   </head>
<body>
    
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">Curfew Pass</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
      <a href="dashboard.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="registration.php">
          <i class='bx bx-user-plus'></i>
          <span class="links_name">Registration</span>
        </a>
         <span class="tooltip">Registration</span>
      </li>
      <li>
       <a href="users.php">
         <i class='bx bx-user' ></i>
         <span class="links_name">Users</span>
       </a>
       <span class="tooltip">Users</span>
     </li>
     <li>
       <a href="cpass.php">
         <i class='bx bx-id-card' ></i>
         <span class="links_name">Request C-Pass</span>
       </a>
       <span class="tooltip">Request C-Pass</span>
     </li>
     <li>
     <li>
       <a href="softcopy.php">
         <i class='bx bx-copy-alt' ></i>
         <span class="links_name">Generate Softcopy</span>
       </a>
       <span class="tooltip">Generate Softcopy</span>
     </li>
     <li>
       <a href="docu.php">
         <i class='bx bx-file' ></i>
         <span class="links_name">Other Document</span>
       </a>
       <span class="tooltip">Other Document</span>
     </li>
     
     <li>
       <a href="settings.php">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="image/my_prof.png">
           <div class="name_job">
             <div class="name">Jade</div>
             <div class="job">Web designer</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
    
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>
      <div class="main-board">
        <div class="card-board">
          <div class="cards">
            <div class="card-icon">
              <i class="fas fa-user-plus"></i>
              
            </div>
            
            <span>Registered 51</span>
          </div>
          <div class="cards">
          <div class="card-icon">
              <i class="fas fa-user-plus"></i>
              
            </div>
            
            <span>Users 51</span>
          </div>
          
        </div>
        </br>