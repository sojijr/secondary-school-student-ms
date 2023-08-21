 //sidebar toggle
 const sidebarToggle = document.getElementById('sidebarToggle');
 const sidebar = document.getElementById('sidebar');

 sidebarToggle.addEventListener('click', () => {
     sidebar.classList.toggle('sidebar-active');
 });