<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div style="position:absolute; top: 3%; right: 3%">
      <a href="<?php echo e(url('jobcircular')); ?>"><button class="apply">Apply For Job</button></a>
    </div>
    <div>
      <div style="display:flex; align-items:center; justify-content:center">
          <img src="images/logo.png" alt="hrms" style="width: 200px; height:auto">
      </div>
      
      <div>
        <br>
      </div>
      
      <div class= "flex">
       <div>
        <img  style = "margin-top: 10px;" src = 'https://www.zambianguardian.com/wp-content/uploads/2022/05/Functions-of-human-resource-management-systems.png'>
       </div> 
      <div class="container">
          <header style="color: #826AFB; font-size: 300%">LOGIN</header>
          <?php if(session('error')): ?>
            <div class="alert alert-danger" style="color: red; justify-content:center; text-align:center">
                <?php echo e(session('error')); ?>

            </div>
          <?php endif; ?>
          <form action="<?php echo e(url('login')); ?>" class="form" method="POST">
            <?php echo csrf_field(); ?>
            <div class="input-box">
              <label>Email</label>
              <input type="email" name="email" placeholder="Enter email address" required />
            </div>

            <div class="input-box">
              <label>Password</label>
              <input type="password" name="pass" placeholder="Enter Password" required />
            </div>

            <div class="gender-box">
              <div class="gender-option">
                <div class="gender">
                  <input type="checkbox" id="check-male" name="remember" checked />
                  <label for="check-male">Remember me?</label>
                </div>
                <div class="gender">
                    <p>Forgot Pass?</p><a href="#" id="check-other" style="float: right">Contact Admin.</a>
                </div>
              </div>
            </div>
            
            <button>Submit</button>
          </form>
      </div> </div>  
    </div>
  </body>
</html><?php /**PATH C:\xampp\htdocs\HMRS3.0-main\resources\views/login.blade.php ENDPATH**/ ?>