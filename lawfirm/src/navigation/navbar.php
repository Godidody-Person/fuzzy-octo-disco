<?php
define("R", "/lawfirm/public/");
?>

<div class="navbar">
    <a href="<?=R?>index.php">LegalBridge.com<span>/home</span></a>
    <a href="<?=R?>index.php#services">Services</a>
    <a href="<?=R?>about.php">About</a>

    <a href="<?=R?>contact-us.php" class="button">Contact</a>
    <a href="<?=R?>consult.php" class="button">Request a Consultation</a>
</div>
<div class="small-navbar">
    <button id="open" onclick="openNav()"><i class="material-symbols-outlined" icon-align>menu</i></button>
    <div class="menu" id="small-menu">
        <button onclick="closeNav()"><i class="material-symbols-outlined" icon-align>close</i></button>
        <a href="<?=R?>index.php">LegalBridge home</a>
        <a href="<?=R?>index.php#services">Services</a>
        <a href="<?=R?>about.php">About</a>
        <a href="<?=R?>contact-us.php" class="button">Contact</a>
        <a href="<?=R?>consult.php" class="button">Request a Consultation</a>
    </div>
</div>

<script>
    function openNav(){
        document.getElementById("small-menu").style.display = "flex";
    }

    function closeNav(){
        document.getElementById("small-menu").style.display = "none";
    }
</script>