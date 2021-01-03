<?php include('cont.php') ?>
<?php include('header.php') ?>

<?php  include('menu.php'); ?>

<section id="login_page">
   <div class="container">
      <div class="row">
          <div class="col-md-5 card1">
               <div class="card card1">
                  <div class="card-body">
                      <h1>Login Here</h1>
                     <form action="#" method="POST">

                       <div class="from-group">
                         <label for=""> USER : </label>
                         <input type="text" name="user" class="form-control" id="user">
                       </div>
                     
                       <div class="from-group">
                         <label for=""> Passward : </label>
                         <input type="password" name="passward" class="form-control" id="passward">
                       </div>

                       <div class="from-group my-2">
                         <input type="submit" name="submit" class="form-control bg-primary" >
                       </div>
                       <div id="message"></div>
                     </form>
                  
                  
                  </div>
               </div>    
              </form>
          </div>
      </div>
   </div>
</section>

<?php

if(isset($_POST['submit'])){
 
    $con = mysqli_connect('localhost','root','','pract8');

    $user = $_POST['user'];
    
    $passward = $_POST['passward'];


    $sql = "SELECT * FROM `login` WHERE `user`= '$user' AND `passward` ='$passward'";


    $result = mysqli_query($con,$sql);

     $run = mysqli_num_rows($result);

     if($run<1){
        ?>
        <script>
          alert("sorry! wrong username and passward ");
        // document.getElementById('message').innerHTML ="sorry ! your credentials is not right..";
          window.open('login.php','_self');
        </script>
        <?php

     } else{
        $data = mysqli_fetch_assoc($result);

        $id = $data['id'];
          header('location:dashboard.php');
      
     }

}

?>

<?php include('footer.php') ?>






