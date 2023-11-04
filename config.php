<?php 
   if(isset($_GET['login'])){
      if($_GET['login'] == 'true'){
         echo "
         <script>
         function showToast() {
           var toast = document.createElement('div');
           toast.classList.add('success');
           var icon = document.createElement('span');
           icon.classList.add('icon');
           icon.innerHTML = '&#10003;';
           var message = document.createElement('span');
           message.innerHTML = 'Đăng nhập thành công';
           var closeBtn = document.createElement('span');
           closeBtn.classList.add('close-btn');
           toast.appendChild(message);
           toast.appendChild(closeBtn);
           document.body.appendChild(toast);
           closeBtn.addEventListener('click', function() {
             toast.remove();
           });
           setTimeout(function() {
             toast.remove();
           }, 3000);
         }
         document.addEventListener('DOMContentLoaded', function() {
           showToast();
           showToast(); 
         });
       </script>";
      }
      else{
         echo "
         <script>
         function showToast() {
           var toast = document.createElement('div');
           toast.classList.add('warning');
           var icon = document.createElement('span');
           icon.classList.add('icon');
           icon.innerHTML = '&#10003;';
           var message = document.createElement('span');
           message.innerHTML = 'Thông tin tài khoản hoặc mật khẩu không chính xác';
           var closeBtn = document.createElement('span');
           closeBtn.classList.add('close-btn');
           toast.appendChild(message);
           toast.appendChild(closeBtn);
           document.body.appendChild(toast);
           closeBtn.addEventListener('click', function() {
             toast.remove();
           });
           setTimeout(function() {
             toast.remove();
           }, 3000);
         }
         document.addEventListener('DOMContentLoaded', function() {
           showToast();
           showToast(); 
         });
       </script>";
     
      }
   }
   if(isset($_GET['addtocart'])){
      if($_GET['addtocart'] == 'false'){
         echo "
         <script>
         function showToast() {
           var toast = document.createElement('div');
           toast.classList.add('error');
           var icon = document.createElement('span');
           icon.classList.add('icon');
           icon.innerHTML = '&#10003;';
           var message = document.createElement('span');
           message.innerHTML = 'Vui lòng đăng nhập để thêm giỏ hàng';
           var closeBtn = document.createElement('span');
           closeBtn.classList.add('close-btn');
           toast.appendChild(message);
           toast.appendChild(closeBtn);
           document.body.appendChild(toast);
           closeBtn.addEventListener('click', function() {
             toast.remove();
           });
           setTimeout(function() {
             toast.remove();
           }, 3000);
         }
         document.addEventListener('DOMContentLoaded', function() {
           showToast();
           showToast(); 
         });
       </script>";
      }
      else{
         echo "
         <script>
         function showToast() {
           var toast = document.createElement('div');
           toast.classList.add('info');
           var icon = document.createElement('span');
           icon.classList.add('icon');
           icon.innerHTML = '&#10003;';
           var message = document.createElement('span');
           message.innerHTML = 'Thêm thành công';
           var closeBtn = document.createElement('span');
           closeBtn.classList.add('close-btn');
           toast.appendChild(message);
           toast.appendChild(closeBtn);
           document.body.appendChild(toast);
           closeBtn.addEventListener('click', function() {
             toast.remove();
           });
           setTimeout(function() {
             toast.remove();
           }, 1000);
         }
         document.addEventListener('DOMContentLoaded', function() {
           showToast();
           showToast(); 
         });
       </script>";
     
      }
   }
   if(isset($_GET['register'])){
      if($_GET['register'] == 'true'){
         echo "
         <script>
         function showToast() {
           var toast = document.createElement('div');
           toast.classList.add('success');
           var icon = document.createElement('span');
           icon.classList.add('icon');
           icon.innerHTML = '&#10003;';
           var message = document.createElement('span');
           message.innerHTML = 'Chúc mừng bạn đã tạo tài khoản thành công';
           var closeBtn = document.createElement('span');
           closeBtn.classList.add('close-btn');
           toast.appendChild(message);
           toast.appendChild(closeBtn);
           document.body.appendChild(toast);
           closeBtn.addEventListener('click', function() {
             toast.remove();
           });
           setTimeout(function() {
             toast.remove();
           }, 3000);
         }
         document.addEventListener('DOMContentLoaded', function() {
           showToast();
           showToast(); 
         });
       </script>";
      }
   }
?>