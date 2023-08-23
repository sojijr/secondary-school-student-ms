 const sidebarToggle = document.getElementById('sidebarToggle');
 const sidebar = document.getElementById('sidebar');
 const notificationBox = document.getElementById('notification-box')
 const studentDetailsBox = document.getElementById('student-details-box')
 const chevronBracket = document.getElementById('dropdown-i')

//sidebar toggle
 sidebarToggle.addEventListener('click', () => {
     sidebar.classList.toggle('sidebar-active');
     notificationBox.classList.toggle('notification-box-toggle'); 
 });

 sidebarToggle.addEventListener('click', () => {
    studentDetailsBox.classList.toggle('student-details-box-toggle');
 })
 
// Get the dropdown link and the dropdown itself
const dropdownLink = document.querySelector('.dropdown-link');
const dropdown = document.querySelector('.dropdown');

// Toggle the dropdown when the link is clicked
dropdownLink.addEventListener('click', () => {
    dropdown.classList.toggle('active');
    sidebar.classList.toggle('sidebar-dropdown');
    chevronBracket.classList.toggle('fa fa-chevron-down');
});

dropdownLink.addEventListener('click', () => {
    chevronBracket.classList.toggle('fa-chevron-left');
    chevronBracket.classList.toggle('fa-chevron-down');
});