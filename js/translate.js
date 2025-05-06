// translations.js
const translations = {
    // Navbar translations
    'LAYANAN': 'SERVICES',
    'PRICING': 'PRICING',
    'TESTIMONY': 'TESTIMONIALS',
    'TENTANG KAMI': 'ABOUT US',
    'PANGGIL SEKARANG': 'CALL NOW',
    
    // Main content translations
    'Gak Perlu Datang!': 'No Need to Come!',
    'Kami Jemput': 'We Pick Up',
    'Sibuk? Nggak Sempet? Tinggal Isi Form': 'Busy? No Time? Just Fill the Form',
    'tok tok tok... kami datang.': 'knock knock knock... we come to you.',
    'Panggil Kami!': 'Call Us!',
    'Layanan Kami >': 'Our Services >',
    'Pilih Paket Sesuai Kebutuhan Anda!': 'Choose a Package Based on Your Needs!',
    
    // CTA section
    'Tertarik untuk membersihkan Laptop mu?': 'Interested in cleaning your Laptop?',
    'Tunggu apalagi? panggil kami dengan mengisi formulir berikut dan kami akan menjemput laptop anda.': 'What are you waiting for? Call us by filling out the following form and we will pick up your laptop.',
    'Tidak Perlu datang - Kami Jemput': 'No Need to come - We Pick Up',
    'Ramah Kantong - Tidak ada Pajak dan Ongkir': 'Budget Friendly - No Tax and Shipping Cost',
    'Garansi 7-Hari': '7-Day Warranty',
    
    // Form translations
    'Request a repair visit': 'Request a repair visit',
    'Nama': 'Name',
    'No Telp (Whatsapp)': 'Phone (Whatsapp)',
    'Kamar / Alamat': 'Room / Address',
    'Jelaskan masalah laptop Anda': 'Explain your laptop issue',
    'Panggil Kami': 'Call Us'
};

// Function to change the language
function changeLanguage(lang) {
    if (lang === 'en') {
        // Store the user's language preference
        localStorage.setItem('preferredLanguage', 'en');
        
        // Translate all elements with text content
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[key]) {
                element.textContent = translations[key];
            }
        });
        
        // Translate placeholders
        document.querySelectorAll('[data-placeholder-translate]').forEach(element => {
            const key = element.getAttribute('data-placeholder-translate');
            if (translations[key]) {
                element.placeholder = translations[key];
            }
        });
        
        // Translate all elements without data-translate attribute
        // This is a fallback for elements that don't have the attribute
        document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, a, button, label, span, li').forEach(element => {
            if (!element.hasAttribute('data-translate') && element.textContent.trim() !== '') {
                const originalText = element.textContent.trim();
                if (translations[originalText]) {
                    element.textContent = translations[originalText];
                }
            }
        });
    } else {
        // Reset to Indonesian (reload the page)
        localStorage.setItem('preferredLanguage', 'id');
        location.reload();
    }
}

// Initialize the language based on stored preference
document.addEventListener('DOMContentLoaded', function() {
    const languageBtns = document.querySelectorAll('.language-btn');
    const storedLanguage = localStorage.getItem('preferredLanguage');
    
    // Set active class based on stored preference
    if (storedLanguage) {
        languageBtns.forEach(btn => {
            if (btn.getAttribute('data-lang') === storedLanguage) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
        
        // Apply translations if English is selected
        if (storedLanguage === 'en') {
            changeLanguage('en');
        }
    }
    
    // Add click event listeners to language buttons
    languageBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remove active class from all buttons
            languageBtns.forEach(b => b.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get selected language
            const selectedLang = this.getAttribute('data-lang');
            
            // Apply translations
            changeLanguage(selectedLang);
        });
    });
});