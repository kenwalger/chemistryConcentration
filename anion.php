<?php
$pageTitle = "Anions";
include ('inc/header.php');
?>

            <div class="small-12 columns text-centered course">
                <h1 class="course">High School Chemistry</h1>
                <h3 class="course"><?php echo $pageTitle; ?> Concentration Game</h3>
            </div>
        </div>

        <div class="row">

            <div class="small-12 columns text-centered">

              <?php
              if ($pageTitle === "Anions") {
                include('inc/anionLogic.php');
              } elseif ($pageTitle === "Cations") {
                echo('That game has not been fully developed yet, sorry!');
              } else {
                echo('Sorry, there has been an error.');
              }

              ?>
                <div class="reset-button">
                    <a class="button tiny primary radius" id="restart" href="">Reset game</a>
                </div>
            </div>
        </div>

        <!-- jQuery Memory Card/Pairs Game -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" /></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js" /></script>
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