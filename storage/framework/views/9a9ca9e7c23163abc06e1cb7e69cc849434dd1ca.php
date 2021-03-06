<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('partials._head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

  <body>
    <?php echo $__env->make('partials._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

       <div class="container">

          <?php echo $__env->make('partials._messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
          <div class="col-md-12 mt-5">

             <?php echo $__env->yieldContent('content'); ?>
             
          </div>
          
         
           <?php echo $__env->make('partials._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
        </div> <!-- /container -->

        <?php echo $__env->make('partials._javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       
        <?php echo $__env->yieldContent('scripts'); ?>
  </body>

<!-- Mirrored from getbootstrap.com/docs/3.3/examples/navbar-static-top/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 11:34:09 GMT -->
</html>
