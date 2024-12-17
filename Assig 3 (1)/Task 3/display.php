        <?php 
        session_start();

        if (isset($_SESSION["print"])) :
            $print = $_SESSION["print"];
            foreach ($print as $key => $value) :
                echo "<pre>";
                echo"". $key .": ". $value;
                echo "<?pre>";
                endforeach;
                endif;

        ?>
