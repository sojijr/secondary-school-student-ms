// sidebar mobile view toggle
const sidebarToggle = document.getElementById('sidebarToggle');
const sidebar = document.getElementById('sidebar');
const notificationBox = document.getElementById('notification-box')
const studentDetailsBox = document.getElementById('student-details-box')

sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('sidebar-active');
    notificationBox.classList.toggle('notification-box-toggle'); 
});

sidebarToggle.addEventListener('click', () => {
   studentDetailsBox.classList.toggle('student-details-box-toggle');
})

// dropdown
function toggleDropdown(linkSelector, dropdownSelector, chevronId, sidebarClass) {
    const dropdownLink = document.querySelector(linkSelector);
    const dropdown = document.querySelector(dropdownSelector);
    const chevronBracket = document.getElementById(chevronId);
    const sidebar = document.getElementById('sidebar');
  
    dropdownLink.addEventListener('click', () => {
      dropdown.classList.toggle('active');
      
      // Toggle the sidebar class
      sidebar.classList.toggle(sidebarClass);
  
      // Toggle the chevron icon class
      chevronBracket.classList.toggle('fa-chevron-left');
      chevronBracket.classList.toggle('fa-chevron-down');
      
      // Remove other sidebar classes if not active
      if (!dropdown.classList.contains('active')) {
        sidebar.classList.remove('finance-sidebar-dropdown');
      }
    });
  }
  
  // Academic Details dropdown
  toggleDropdown('.dropdown-link', '.dropdown-sidebar', 'dropdown-i', 'sidebar-dropdown');
  
  // Finance dropdown
  toggleDropdown('.finance-dropdown-link', '.finance-dropdown-sidebar', 'dropdown-fi', 'finance-sidebar-dropdown');
  

// refreshes page content - for the refresh button
const refreshButton = document.getElementById('refresh-button');
const refreshContent = document.getElementById('refresh-content');

refreshButton.addEventListener('click', function() {
    location.reload();
});

// double click on table rows to go to link
const rows = document.querySelectorAll('.student-details-table tbody tr');
rows.forEach(row => {
    row.addEventListener('dblclick', function () {
        // Get the data-href attribute and navigate to the link
        const link = this.getAttribute('data-href');
        if (link) {
            window.location.href = link;
        }
    });
});
