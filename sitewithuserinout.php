
          <!DOCTYPE html>
          <html>
          <head>

          <title>  weight calculator </title>

              <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
              <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
              <script src="./bootstrap/js/bootstrap.js"></script>
              <link rel="stylesheet" href="./bootstrap/css/sheet.css">

          </head>
            <body>

              <header class="bgimage">
              <h1>weight calculator</h1>
              </header>

            <!--  stylee  -->

          <form action ='results.php' method='post'>
                      <br>
                      <div class="container">
                      <div class="row">
                        <div class="col-sm-3">
                          <section>

                          <h1>Name: </h1>
                          <label><input type="text" name="name" /><label>

                          </section>
                            </div>

                        <div class="col-sm-3">
                                  <section>
                          <h1>Age  : </h1>
                          <label><input type="number" name="Age" /><label>
                          </section>
                            </div>

                            <div class="col-sm-3">
                                      <section>
                          <h1>weight  : </h1>
                          <label><input type="number" step"0.01" name="weight" /><label>

                          <h4>
                          kg : <input type ="checkbox" name ="weightinkg">
                          pounds : <input type ="checkbox" name ="weightinpounds">
                          </h4>

                                      </section>
                                    </div>

                        <div class="col-sm-3">
                                    <section>

                          <h1> height  : </h1>
                          <label><input type="number" step="0.01" name="height" /><label>
                          <h4>
                          cm : <input type ="checkbox" name ="heightincm">
                          inch : <input type ="checkbox" name ="heightininch">
                          </h4>

                        </section>
                          </div>


                          <input type="submit" name="submit" value"calculate">

                        <!--  <div class="col-sm-3">
                                      <section>
                          <label><input type="submit"><label>
                          </section>
                            </div>
                            <br>
                          -->

                          </form>

        <!-- php  code   -->
        <!-- ____________________________________________________________________________________________   -->
          <?php
             if(isset($_POST['heightininch'])){
              $height = $_POST['heigh']*2.54;
            }else{
              $height = $_POST['height'];
            }
             // FORMULA FOR  MALE !!!
             //
              $idealweight  = $height - 100 - ($height- 150)/4;
           ?>

          <br>
          <br>

       <?php /*
      //  if (isset( $_POST['Submit1'])) {
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
            elseif(isset($_POST['heightincm'])) {
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
      //}
    */  ?>

         <!--  <?php include "footer.html" ?> -->

              </body>
          </html>
