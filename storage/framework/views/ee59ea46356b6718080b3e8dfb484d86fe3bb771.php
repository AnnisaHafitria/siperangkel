<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from byrushan.com/projects/material-admin/app/2.1/jquery/bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Apr 2018 07:01:27 GMT -->
  <head>
    <title>SiPeRangLab | <?php echo $__env->yieldContent('title'); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Vendor styles -->
    <?php echo $__env->make('layouts.partial._styles', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldPushContent('styles'); ?>
    <style type="text/css">
        body{
            font-family: 'Quicksand', sans-serif;
        }
        div.fc-toolbar.fc-header-toolbar{
          display: none;
        }
    </style>
  </head>
  <body data-ma-theme="blue">
    <main class="main">
      <div class="page-loader">
          <div class="page-loader__spinner">
              <svg viewBox="25 25 50 50">
                  <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
              </svg>
          </div>
      </div>
      <?php echo $__env->make('layouts.partial._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->make('layouts.partial._sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <section class="content">
        <?php echo $__env->make('layouts.partial._notif', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
      </section>
    </main>
    <!-- Older IE warning message -->
    <!--[if IE]>
    <div class="ie-warning">
      <h1>Warning!!</h1>
      <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>
      <div class="ie-warning__downloads">
        <a href="http://www.google.com/chrome">
        <img src="img/browsers/chrome.png" alt="">
        </a>
        <a href="https://www.mozilla.org/en-US/firefox/new">
        <img src="img/browsers/firefox.png" alt="">
        </a>
        <a href="http://www.opera.com">
        <img src="img/browsers/opera.png" alt="">
        </a>
        <a href="https://support.apple.com/downloads/safari">
        <img src="img/browsers/safari.png" alt="">
        </a>
        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
        <img src="img/browsers/edge.png" alt="">
        </a>
        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
        <img src="img/browsers/ie.png" alt="">
        </a>
      </div>
      <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Javascript -->
    <!-- Vendors -->
    <?php echo $__env->make('layouts.partial._scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('plugin-scripts'); ?>
    <script type="text/javascript">

      function randomInt(min, max) {
          return Math.floor(Math.random()*(max+1-min)) + min;
      };
      /*--------------------------------------
          BlockUI 
      ---------------------------------------*/
      function blockUI(message){
          $.blockUI({
            message: '<span class="text-semibold"><i class="zmdi zmdi-rotate-right zmdi-hc-spin"></i>&nbsp;Sedang Di Proses...</span>',
            baseZ: 10000,
            overlayCSS: {
                backgroundColor: '#000',
                opacity: 0.6,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: '10px 15px',
                color: '#fff',
                '-webkit-border-radius': 2,
                '-moz-border-radius': 2,
                backgroundColor: '#333',
                'z-index' : 10020
            } 
          });
      }
      function blockElement(element){
          // $(element).block({
          //     message: '<div class="semibold"><h5><i class="zmdi zmdi-rotate-right zmdi-hc-spin zmdi-hc-2x"></i></h5></div>',
          //     baseZ: 100000,
          //     // timeout: 2000, //unblock after 2 seconds
          //     overlayCSS: {
          //       backgroundColor: '#fff',
          //       opacity: 0.8,
          //       cursor: 'wait',
          //     },
          //     css: {
          //         // width: 200,
          //         verticalAlign: 'middle',
          //         border: 0,
          //         padding: 0,
          //         backgroundColor: 'transparent'
          //     }, }); 
          $(element).block({
              message: '<span class="text-semibold"><i class="zmdi zmdi-rotate-right zmdi-hc-spin"></i>&nbsp;Loading...</span>',
              overlayCSS: {
                  backgroundColor: '#000',
                  opacity: 0.5,
                  cursor: 'wait'
              },
              css: {
                  border: 0,
                  padding: '10px 15px',
                  color: '#fff',
                  '-webkit-border-radius': 2,
                  '-moz-border-radius': 2,
                  backgroundColor: '#333',
                  'z-index' : 2000
              } 
          });

      }
      /*--------------------------------------
          Initialize Plugin
       ---------------------------------------*/
      function initializePlugin() {
        $('.summernote').summernote({
          placeholder: '',
          tabsize: 2,
          height: 100
        });
      }
      /*--------------------------------------
          SweetAlert
       ---------------------------------------*/
      function SweetAlert(title,text,type,timer,confirm) {
        swal({
            title: title,
            text: text,
            type: type,
            timer: timer,
            showConfirmButton: confirm
        })
      } 
      /*--------------------------------------
          Bootstrap Notify Notifications
       ---------------------------------------*/
      function notify(type,icon,title,message){
          $.notify({
              icon: icon,
              title: title,
              message: message,
              url: ''
          },{
              element: 'body',
              type: type,
              allow_dismiss: true,
              placement: {
                from: "bottom",
                align: "right"
              },
              offset: {
                  x: 20,
                  y: 20
              },
              spacing: 10,
              z_index: 1300,
              delay: 750,
              timer: 750,
              url_target: '_blank',
              mouse_over: false,
              // animate: {
              //     enter: 'fadeIn',
              //     exit: 'fadout'
              // },
              template:   '<div data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert" style="width:500px;">' +
                              '<span data-notify="icon"></span> ' +
                              '<span data-notify="title">{1}</span> ' +
                              '<span data-notify="message">{2}</span>' +
                              '<div class="progress" data-notify="progressbar">' +
                                  '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                              '</div>' +
                              '<a href="{3}" target="{4}" data-notify="url"></a>' +
                              '<button type="button" aria-hidden="true" data-notify="dismiss" class="alert--notify__close"><i class="zmdi zmdi-close-circle"></i></button>' +
                          '</div>'
          });
      }
    </script>
    <script>
      var toast = swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000
      });
      setTimeout(function() {
          $('#alert-feed').fadeOut('slide',function(){$('#alert-feed').remove()});
      }, 6000);
    </script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
  </body>
  <!-- Mirrored from byrushan.com/projects/material-admin/app/2.1/jquery/bs4/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Apr 2018 07:01:27 GMT -->
<?php echo $__env->make('layouts.partial._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>