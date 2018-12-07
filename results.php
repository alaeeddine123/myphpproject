

    <?php
       if(isset($_POST['heightininch'])){
        $height = $_POST['heigh']*2.54;
      }else{
        $height = $_POST['height'];
      }
       // FORMULA FOR  MALE !!!

        $idealweight  = $height - 100 - ($height- 150)/4;
     ?>



    <?php
    if (isset( $_POST['submit'])) {

                if (empty($_POST["name"]) || empty($_POST["Age"]  )|| empty($_POST["height"] )|| empty($_POST["weight"] )
                ||  empty($_POST["heightincm"]) || empty($_POST["heightininch"]) ||empty($_POST["weightinkg"]) ||empty($_POST["weightinpounds"]) )
                {

                  echo "string1123354";
                  
                }



                echo"your name :";
                echo $_POST["name"];
                echo"your age : ";
                echo $_POST["Age"];
                echo"your height :";

      // condition for measure  unit display


                if(isset($_POST['heightininch'])){
                echo $_POST["height"];
                echo " inch";
                }

                else if(isset($_POST['heightincm'])) {
                echo $_POST["height"];
                echo" cm";
                }
     // condition for mesure unit display  end //

                echo"your weight : ";
      // condition for weight mesure unit display   //
                if(isset($_POST['weightinpounds'])){

                echo $_POST["weight"]," pounds";

                }
                elseif(isset($_POST['weightinkg'])){
                echo  $_POST["weight"]," kg";}
      // condition for weight mesure unit display end  //


                echo "your ideal weight :" ;
                echo $idealweight ;
                echo "kg" ;
             }else {
               echo "you didnt Submit";
             }
              /*else {
            //    header("Location : ../sitewithuserinout.php?signup=error");
    //      }//*/
    ?>
