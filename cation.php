<?php
$pageTitle = "Cations";
include ('inc/header.php');
?>

            <div class="small-12 columns text-centered course">
                <h1 class="course">McNary High School Chemistry</h1>
                <h3 class="course"><?php echo $pageTitle; ?> Concentration Game</h3>
            </div>
        </div>

        <div class="row">

            <div class="small-12 columns text-centered">

            <?php
              if ($pageTitle === "Anions") {
                include('inc/anionGraphics.php');
              } elseif ($pageTitle === "Cations") {
                include('inc/cationGraphics.php');
              } else {
                echo('Sorry, there has been an error.');
              }

            ?>

            </div>
        </div>

        <!-- jQuery Memory Card/Pairs Game -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" /></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js" /></script>
        <script src="js/jquery.flip.min.js" /></script>
        <script src="js/jquery.quizymemorygame.js" /></script>

        <!-- End Memory Game Plugins -->

        <!-- Call the Memory Game Plugin -->
        <script>
            $('#my-memorygame').quizyMemoryGame({
                // itemWidth: 100,
                // itemHeight: 100, 
                itemsMargin:5, 
                colCount:6, 
                animType:'flip' , 
                flipAnim:'tb', 
                animSpeed:250, 
                resultIcons:false,
                openDelay:1500
            });
        </script>

        <footer>
            <p class="footer">Copyright &copy; <?php echo date("Y"); ?> ZyzzyxTech</p>
        </footer>

    </body>
</html>