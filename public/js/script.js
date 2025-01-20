document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const contentArea = document.getElementById('content-area');
    const navbar = document.querySelector('.navbar');
    const toggleBtn = document.getElementById('toggle-sidebar');

    toggleBtn.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
        contentArea.classList.toggle('expanded');
        navbar.classList.toggle('expanded');
    });
});