<aside class="sidebar">
  <?php if(Auth::check()): ?>
  <div class="scroll-wrapper scrollbar-inner" style="position: relative;">
    <div class="scrollbar-inner scroll-content" style="height: 566.5px; margin-bottom: 0px; margin-right: 0px; max-height: none;">
      <div class="user">
        <div class="user__info" data-toggle="dropdown">
          <img class="user__img" src="<?php echo e(asset('demo/img/profile-pics/8.jpg')); ?>" alt="">
          <div>
            <div class="user__name"><?php echo e(Auth::user()->name); ?></div>
            <div class="user__email" style="font-size:10px;"><?php echo e(Auth::user()->email); ?></div>
          </div>
        </div>
        <div class="dropdown-menu">
          
          <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();$('#logout-form').submit();">
              <?php echo e(__('Logout')); ?>

          </a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
        </div>
      </div>

      <ul class="navigation">
        <li class="<?php echo e(Request::is('home') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('home')); ?>"><i class="zmdi zmdi-home"></i> Beranda</a></li>

        <li class="<?php echo e(Request::is('almarhum') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('almarhum')); ?>"><i class="zmdi zmdi-account"></i> Almarhum</a></li>

        <?php
          $active_parent_1 = Request::is('master/blok') || 
                             Request::is('master/petugas_penerima') || 
                             Request::is('master/tpu')? 'navigation__sub--active' : ''; 
        ?>
        <li class="navigation__sub <?php echo e($active_parent_1); ?> navigation__sub--toggled"><a href="#"><i class="zmdi zmdi-settings"></i> Master</a>
          <ul>
              <li class="<?php echo e(Request::is('master/blok') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('master/blok')); ?>">Blok</a></li>
              <li class="<?php echo e(Request::is('master/tpu') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('master/tpu')); ?>">Tpu</a></li>
              <li class="<?php echo e(Request::is('master/petugas_penerima') ? 'navigation__active' : ''); ?>"><a href="<?php echo e(url('master/petugas_penerima')); ?>">Petugas Penerima</a></li>
          </ul>   
        </li>
     </ul>

    </div>
    <div class="scroll-element scroll-x">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="width: 100px;"></div>
      </div>
    </div>
    <div class="scroll-element scroll-y">
      <div class="scroll-element_outer">
        <div class="scroll-element_size"></div>
        <div class="scroll-element_track"></div>
        <div class="scroll-bar" style="height: 99px; top: 0px;"></div>
      </div>
    </div>
  </div>
  <?php endif; ?>
</aside>