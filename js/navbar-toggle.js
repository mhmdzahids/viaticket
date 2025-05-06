// Clean navbar toggle implementation
document.addEventListener('DOMContentLoaded', function() {
    // Get the navbar toggler button
    const navbarToggler = document.querySelector('.navbar-toggler');
    
    // Get the navbar collapse element
    const navbarCollapse = document.querySelector('#navbarSupportedContent');
    
    // Only proceed if both elements are found
    if (navbarToggler && navbarCollapse) {
        // Add click event listener to the toggler button
        navbarToggler.addEventListener('click', function(e) {
            // Prevent any default behavior
            e.preventDefault();
            
            // Toggle the 'show' class on the collapse element
            navbarCollapse.classList.toggle('show');
            
            // Toggle the 'collapsed' class on the toggler button
            navbarToggler.classList.toggle('collapsed');
            
            // Toggle the aria-expanded attribute
            const isExpanded = navbarCollapse.classList.contains('show');
            navbarToggler.setAttribute('aria-expanded', isExpanded);
        });
        
        // Optional: Close the menu when clicking on nav links (for mobile)
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Only close if we're in mobile view
                if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                    navbarToggler.classList.add('collapsed');
                    navbarToggler.setAttribute('aria-expanded', 'false');
                }
            });
        });
    }
});