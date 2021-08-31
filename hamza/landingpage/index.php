<?php 

    if (isset($_POST['submit'])) {
        $from =$_POST['email'];
        $to = '';
        $subject = 'Email signup';
        $body ='Please Sign Me Up To The Email List';
        
        if(!$_POST['email']){
             $emailError = 'Please Enter A Valid Email Address';
        }

        if(!$emailError) {
            if(mail ($to, $subject, $body, $from)) {
                $result = 'Thank You We Will Keep You Updated':  
            } else {
                $result = 'Sorry there has been an error, Please try again';
            }
        }
       

    }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono:wght@700&display=swap" rel="stylesheet">

  
  </head>
  <body>

    <section id= "Logo"> 
      <div class="container">
        <div class="row">
          <div class="col-med-12 text-center">
              <img src="img/my-logo.png" class="img-fluid">
          </div>
        </div>
      </div>
    </section>

    <section id= "Intro"> 
      <div class="container">
        <div class="row">
          <div class="col-med-12 ">
              <p>We're Working Hard, We'll be ready to Launch In...</p>
          </div>
        </div>
      </div>
    </section>

    <section id= "Counter"> 
      <div class="container">
        <div class="row">

          <div class="col-med-12 ">
              <div class="countdown">
                
              </div>
          </div>

        </div>
      </div>
    </section>


    <section id= "Icons"> 
      <div class="container">  
        <div class="row">

          <div class="col-med-12 ">
              <ul class="list-inline">


<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Add font awesome icons -->
<a href="https://twitter.com/ClosetSync" class="fa fa-twitter" target="_blank"></a>
<a href="https://www.facebook.com/profile.php?id=100024868554071" class="fa fa-facebook" target="_blank"></a>
<a href="https://www.instagram.com/closetinsync/" class="fa fa-instagram" target="_blank"></a>






                <!--<a href="http://www.twitter.com" target="blank"><li class="list-inline-item"><i class="fab twitter fa-twitter-square"></i></li></a>
                <a href="http://www.facebook.com" target="blank"><li class="list-inline-item"><i class="fab facebook fa-facebook-square"></i></li></a>
                <a href="http://www.instagram.com" target="blank"><li class="list-inline-item"><i class="fab instagram fa-instagram-square"></i></li></a>-->
              </ul>
          </div>

        </div>
      </div>
    </section>
    





    <section id= "Signup"> 
      <div class="container">
        <div class="row">

          <div class="col-med-12 ">
              <form class="form-inline" role="form" method="post" action="#Signup"> 

                <!--<form class="form-inline" action="/action_page.php"> -->
                  
                  <input type="email" id="email" name="email" placeholder="Enter your email">


                <!--<input type="email" class= "form-control form-control-sm" name="email" placeholder="enter your email"> -->

                <button type="submit" class="btn btn-signup btn-sm" name="submit" value= "send">Subscribe</button>
                </form>

<?php echo $emailError;?>
<?php echo $result;?>


              </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.countdown.js"></script>
  <script>
    $(function() {
    $('.countdown').countdown({
        date: "September 1, 2021 12:00:00"
    });
});

  </script>


  </body>
</html>