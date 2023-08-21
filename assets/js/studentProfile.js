 //sidebar toggle
 const sidebarToggle = document.getElementById('sidebarToggle');
 const sidebar = document.getElementById('sidebar');
 const notificationBox = document.getElementById('notification-box')

 sidebarToggle.addEventListener('click', () => {
     sidebar.classList.toggle('sidebar-active');
     notificationBox.classList.toggle('notification-box-toggle');
 });