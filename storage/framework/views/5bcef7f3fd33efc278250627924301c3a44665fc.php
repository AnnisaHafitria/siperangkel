<?php if(session()->has('notif')): ?>
<div class="alert alert-<?php echo e(session()->get('notif.type')); ?> alert-dismissible fade show" id="alert-feed">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
  </button>
  <?php echo e(session()->get('notif.title')); ?> <span><?php echo session()->get('notif.message'); ?></span>.
</div>
<?php endif; ?>