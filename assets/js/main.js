/**
 * Main JavaScript file for portfolio website
 */

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
    
    // Project filter functionality (for projects.php page)
    const filterButtons = document.querySelectorAll('.filter-button');
    const projectItems = document.querySelectorAll('.project-item');
    
    if (filterButtons.length > 0 && projectItems.length > 0) {
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');
                
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('bg-indigo-600', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-gray-100', 'text-gray-800'));
                
                // Add active class to current button
                this.classList.remove('bg-gray-100', 'text-gray-800');
                this.classList.add('bg-indigo-600', 'text-white');
                
                // Show/hide projects based on filter
                projectItems.forEach(item => {
                    if (filter === 'all') {
                        item.classList.remove('hidden');
                    } else {
                        const categories = item.getAttribute('data-category').split(',');
                        if (categories.includes(filter)) {
                            item.classList.remove('hidden');
                        } else {
                            item.classList.add('hidden');
                        }
                    }
                });
            });
        });
    }
    
    // Form validation for contact form
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            let isValid = true;
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');
            
            // Clear previous error messages
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            
            // Validate name
            if (!nameInput.value.trim()) {
                document.getElementById('name-error').textContent = 'Name is required';
                isValid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailInput.value.trim() || !emailRegex.test(emailInput.value.trim())) {
                document.getElementById('email-error').textContent = 'Valid email is required';
                isValid = false;
            }
            
            // Validate message
            if (!messageInput.value.trim()) {
                document.getElementById('message-error').textContent = 'Message is required';
                isValid = false;
            }
            
            if (!isValid) {
                event.preventDefault();
            }
        });
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Account for fixed header
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animation on scroll (simple version)
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    
    function checkIfInView() {
        animatedElements.forEach(element => {
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < window.innerHeight - elementVisible) {
                element.classList.add('visible');
            }
        });
    }
    
    // Initial check
    if (animatedElements.length > 0) {
        checkIfInView();
        window.addEventListener('scroll', checkIfInView);
    }
});

// Dark mode toggle functionality
const darkModeToggle = document.getElementById('dark-mode-toggle');
if (darkModeToggle) {
    // Check for saved theme preference or use OS preference
    const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const savedTheme = localStorage.getItem('theme');
    
    // Set initial theme
    if (savedTheme === 'dark' || (!savedTheme && prefersDarkMode)) {
        document.documentElement.classList.add('dark');
        darkModeToggle.checked = true;
    }
    
    // Toggle theme on change
    darkModeToggle.addEventListener('change', function() {
        if (this.checked) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    });
}