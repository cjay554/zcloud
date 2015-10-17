<!DOCTYPE html>
<?php 
$title="Home"

?>

<html lang="en">
<head>
    <?php include('./assets/structure/landing/head.php');?>
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

            <?php include('./assets/structure/landing/body/CameraBanner.php');?>

			<?php include('./assets/structure/general/toggle-menu.php');?>
       
    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
	
    <main>
        <section class="well">
		<?php include('./assets/structure/landing/body/container.php');?>
		<?php include('./assets/structure/landing/body/gallery.php');?>
		</section>
		
        <section class="parallax parallax1" data-parallax-speed="-0.4">
		<?php include('./assets/structure/landing/body/container2.php');?>

		
        </section>
		
        		<?php include('./assets/structure/landing/body/wellContainer1.php');?>
				<?php include('./assets/structure/landing/body/wellContainer2.php');?>

		
	</main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
                <?php include('./assets/structure/footer.php') ?>

    </footer>
</div>

<script src="js/script.js"></script>
</body>
</html>