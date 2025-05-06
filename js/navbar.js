// Properly handle navbar toggler behavior
document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarSupportedContent');
    
    // Handle navbar toggler clicks
    if (navbarToggler && navbarCollapse) {
        // Add click handler to toggle button
        navbarToggler.addEventListener('click', function() {
            navbarCollapse.classList.toggle('show');
        });
        
        // Add click handlers to all nav links so clicking any link closes the menu
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Only close if the navbar is expanded (mobile view)
                if (window.innerWidth < 992) {
                    navbarCollapse.classList.remove('show');
                }
            });
        });
        
        // Close navbar when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInside = navbarToggler.contains(event.target) || 
                                  navbarCollapse.contains(event.target);
            
            if (!isClickInside && navbarCollapse.classList.contains('show') && 
                window.innerWidth < 992) {
                navbarCollapse.classList.remove('show');
            }
        });
    }
});