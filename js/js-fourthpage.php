
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Destination pills horizontal scroll
    const pillsContainer = document.querySelector('.scroll-container');
    const leftArrow = document.querySelector('.scroll-left');
    const rightArrow = document.querySelector('.scroll-right');

    const scrollAmount = 200;

    if (leftArrow && rightArrow && pillsContainer) {
        leftArrow.addEventListener('click', function() {
            pillsContainer.scrollLeft -= scrollAmount;
            updateArrowVisibility();
        });

        rightArrow.addEventListener('click', function() {
            pillsContainer.scrollLeft += scrollAmount;
            updateArrowVisibility();
        });

        function updateArrowVisibility() {
            // Show left arrow only if there's content to scroll left
            if (pillsContainer.scrollLeft > 0) {
                leftArrow.classList.remove('d-none');
            } else {
                leftArrow.classList.add('d-none');
            }
            
            // Show right arrow only if there's content to scroll right
            if (pillsContainer.scrollLeft + pillsContainer.clientWidth < pillsContainer.scrollWidth) {
                rightArrow.classList.remove('d-none');
            } else {
                rightArrow.classList.add('d-none');
            }
        }

        // Check initially
        updateArrowVisibility();
        
        // Recheck when scrolling happens
        pillsContainer.addEventListener('scroll', updateArrowVisibility);
    }

    // Promo cards horizontal scroll
    const promoContainer = document.querySelector('.promo-cards');
    const promoLeftArrow = document.querySelector('.promo-scroll-left');
    const promoRightArrow = document.querySelector('.promo-scroll-right');

    const promoScrollAmount = 300;

    if (promoLeftArrow && promoRightArrow && promoContainer) {
        promoLeftArrow.addEventListener('click', function() {
            promoContainer.scrollLeft -= promoScrollAmount;
            updatePromoArrowVisibility();
        });

        promoRightArrow.addEventListener('click', function() {
            promoContainer.scrollLeft += promoScrollAmount;
            updatePromoArrowVisibility();
        });

        function updatePromoArrowVisibility() {
            // Show left arrow only if there's content to scroll left
            if (promoContainer.scrollLeft > 0) {
                promoLeftArrow.classList.remove('d-none');
            } else {
                promoLeftArrow.classList.add('d-none');
            }
            
            // Show right arrow only if there's content to scroll right
            if (promoContainer.scrollLeft + promoContainer.clientWidth < promoContainer.scrollWidth) {
                promoRightArrow.classList.remove('d-none');
            } else {
                promoRightArrow.classList.add('d-none');
            }
        }

        // Check initially
        updatePromoArrowVisibility();
        
        // Recheck when scrolling happens
        promoContainer.addEventListener('scroll', updatePromoArrowVisibility);
    }
});
</script>