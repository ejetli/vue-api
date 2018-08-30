<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="/">Expand at sm</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo e(Request::is('/') ? "active" : ""); ?>">           
              <a class="nav-link" href="/">Home</a>        
          </li>
          <li class="nav-item <?php echo e(Request::is('cmodules') ? "active" : ""); ?>">
             <a class="nav-link" href="/cmodules">CModules</a>
          </li>

           <li class="nav-item <?php echo e(Request::is('tags') ? "active" : ""); ?>">
              <a class="nav-link" href="/tags">tags</a>
          </li>

          <li class="nav-item <?php echo e(Request::is('tag') ? "active" : ""); ?>">
              <a class="nav-link" href="/tag">tag</a>
          </li>
        </ul>
 
        <ul class=" navbar-nav">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="<?php echo e(route('cmodules.index')); ?>">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
        </ul>
      </div>
    </nav>