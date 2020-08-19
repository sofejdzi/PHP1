<?php
include "konekcija.php"; 
?>
<header id="header">
    <div class="logo"><a href="index.php">SANITAS <span>zdrava hrana</span></a></div>
    <?php
        if(isset($_SESSION['korisnik'])){
    ?>
        <span><?php echo $_SESSION['korisnik']->ime ?></span>
        <a href='logout.php' id="logout"><span>Odjavite se</span></a> |
        <?php }
        else{
            ?>
            <a href="#" id="log"><span>Prijava</span></a> |
            <?php
        }
        ?>
        <?php 
            if(isset($_SESSION['korisnik'])){ 
                if($_SESSION['korisnik']->idUloga==1){
                ?>
                <a href="admin.php" id="admin"><span>Admin panel</span></a> | 
            <?php } }
        ?>
    <a href="#" id="reg"><span>Registracija</span></a> |
    
    <?php
        if(isset($_SESSION['korisnik'])){
        $upitKorpa = "SELECT COUNT(idKorpa) as broj FROM korpa1 WHERE idKorisnik=:idK AND marker=0";
        $stmt = $konekcija->prepare($upitKorpa);
        $stmt->bindParam(":idK",$_SESSION['korisnik']->idKorisnik);
        $stmt->execute();
        $rezkorpa = $stmt->fetch();
        ?>
        <a href="korpa.php">
        <i class="fas fa-shopping-cart"></i>
            <?=$rezkorpa->broj?>
    </a>
    <?php
        }
    ?>	
        

    <a href="#menu" id="btnNav"><span>Meni</span></a>
</header> 
