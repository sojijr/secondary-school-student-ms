const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
const notificationBox = document.getElementById('notification-box')
const studentDetailsBox = document.getElementById('student-details-box')

const dropdownLink = document.querySelector('.dropdown-link');
const dropdown = document.querySelector('.dropdown-sidebar');
const chevronBracket = document.getElementById('dropdown-i')

const refreshButton = document.getElementById('refresh-button');
const refreshContent = document.getElementById('refresh-content');

//sidebar toggle
 sidebarToggle.addEventListener('click', () => {
     sidebar.classList.toggle('sidebar-active');
     notificationBox.classList.toggle('notification-box-toggle'); 
 });

 sidebarToggle.addEventListener('click', () => {
    studentDetailsBox.classList.toggle('student-details-box-toggle');
 })

// Toggle the dropdown when the link is clicked
dropdownLink.addEventListener('click', () => {
    dropdown.classList.toggle('active');
    sidebar.classList.toggle('sidebar-dropdown');
});

dropdownLink.addEventListener('click', () => {
    chevronBracket.classList.toggle('fa-chevron-left');
    chevronBracket.classList.toggle('fa-chevron-down');
});

//refresh page content
refreshButton.addEventListener('click', function() {
    location.reload();
});
