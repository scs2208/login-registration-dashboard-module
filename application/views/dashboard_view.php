


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(CSS); ?>/style2.css">


</head>
<body>


<div class="navbar">
  <a href="#">Dashboard</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/index">Home</a>
  <?php if($this->session->userdata('level')==='1'): ?>                   
    <div class="dropdown">
      <button class="dropbtn">Employee</button>
      <div class="dropdown-content">
        <a href="<?php echo base_url(); ?>index.php/User/display">View</a>
        <a href="<?php echo base_url(); ?>index.php/User/register">Register</a>
        <a href="#">Profile</a>
        <a href="#">Salary</a>
      </div>
    </div>
  <?php endif; ?>
  <a href="#">Transaction</a>
  <a href="#">Stock</a>
  <a href="<?php echo base_url(); ?>index.php/Welcome/logout">Log out</a>
</div>
<br><br>



</body>
</html>
