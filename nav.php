<div class="header">
    <div id="logo">
        <a href="index.php">
            <div class="logolink"></div>
        </a>
    </div>
    <i class="fa fa-bars fa-2x hamburger" onclick="hamburger()"></i>
    <nav id="nav">
        <a href="index.php" class="<?php if($currentPage =='home'){echo 'activeone';}?>">Home</a>
        <a href="application.php" class="<?php if($currentPage =='apply'){echo 'activeone';}?>">Apply</a>
        <a href="currenthosts.php" class="<?php if($currentPage =='currenthosts'){echo 'activeone';}?>">Hosts</a>
        <a href="faq.php" class="<?php if($currentPage =='faq'){echo 'activeone';}?>">FAQ</a>
        <a href="success.php" class="<?php if($currentPage =='success'){echo 'activeone';}?>">Stories</a>
        <a href="contact.php" class="<?php if($currentPage =='contact'){echo 'activeone';}?>">Contact</a>
    </nav>
</div>