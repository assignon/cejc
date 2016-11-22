
<?php

     class model{


       private $pdo;
       private $post;


        /*const HOST = "localhost";
        const DBNAME = "CEYC";
        const USER_NAME = "root";
        const USER_PASS = "";*/

       public function model_class($model_child){

           return new $model_child;

       }


       public function model_require($model_require){

          require "../web/models/".$model_require.".php";

       }

       public function getPOST($post){

        if(isset($_POST[$post]) AND !empty($_POST[$post])){

            return $_POST[$post];
        }

       }

       protected function getPDO(){

         if( $this->pdo === null){

             $this->pdo= new PDO("mysql:host=localhost;dbname=CEYC",'root','');
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         }

         return  $this->pdo;
       }


       protected function error($error){
         ?>

         <script type="text/javascript">

         var alone = document.getElementById("alleen");
         alone.innerHTML = "<?php echo $error ?>";
         alone.style.color = "crimson";

         </script>
       <?php

       }

       public function signin_err($userErr){

         ?>

         <script type="text/javascript">

         var errors = document.getElementById("errs");
         errors.innerHTML = "<?php echo $userErr ?>";
        // errors.style.color = "crimson";

         </script>
       <?php

       }

       protected function query($statement)
       {

         $query_request = $this->getPDO()->query($tatemnt);
         $data = $query_request->fetch();
         return $data;


       }

   protected function prepare_fetch($statement,$data_array)
       {

           $request = $this->getPDO()->prepare($statement);
           $request->execute($data_array);
           $data = $request->fetch();
           return $data;


       }

       protected function prepare($statement,$data_array){

         $prepare_request = $this->getPDO()->prepare($statement);
         $prepare_request->execute($data_array);


       }



     }

 ?>
