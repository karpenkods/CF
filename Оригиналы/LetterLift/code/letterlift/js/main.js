// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initGDPRBanner();
    initPricingSwitcher();
    initContactForm();
    initLazyLoading();
    initSmoothScrolling();
    initModalHandlers();
});

// GDPR Banner functionality
function initGDPRBanner() {
    const gdprBanner = document.getElementById('gdpr-banner');
    const acceptBtn = document.getElementById('accept-all');
    const customizeBtn = document.getElementById('customize');
    const rejectBtn = document.getElementById('reject-all');
    
    // Check if user has already made a choice
    if (!localStorage.getItem('gdpr-choice')) {
        setTimeout(() => {
            gdprBanner.classList.add('show');
        }, 2000);
    }
    
    acceptBtn.addEventListener('click', function() {
        localStorage.setItem('gdpr-choice', 'accepted');
        gdprBanner.classList.remove('show');
    });
    
    customizeBtn.addEventListener('click', function() {
        // Open cookie policy page
        window.open('cookie-policy.html', '_blank');
    });
    
    rejectBtn.addEventListener('click', function() {
        localStorage.setItem('gdpr-choice', 'rejected');
        gdprBanner.classList.remove('show');
    });
}

// Pricing switcher functionality
function initPricingSwitcher() {
    const pricingLevels = document.querySelectorAll('.pricing-level');
    const pricingCards = document.querySelectorAll('.pricing-level-cards');
    const planButtons = document.querySelectorAll('.plan-btn');
    
    pricingLevels.forEach(level => {
        level.addEventListener('click', function() {
            const targetLevel = this.dataset.level;
            
            // Update active level button
            pricingLevels.forEach(l => l.classList.remove('active'));
            this.classList.add('active');
            
            // Show corresponding cards
            pricingCards.forEach(cards => {
                cards.classList.remove('active');
                if (cards.dataset.level === targetLevel) {
                    cards.classList.add('active');
                }
            });
        });
    });
    
    // Handle plan selection
    planButtons.forEach(button => {
        button.addEventListener('click', function() {
            const planName = this.dataset.plan;
            const planPrice = this.dataset.price;
            
            // Store selected plan data
            localStorage.setItem('selectedPlan', JSON.stringify({
                name: planName,
                price: planPrice
            }));
            
            // Redirect to checkout
            window.location.href = 'checkout.html';
        });
    });
}

// Contact form functionality
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const phone = formData.get('phone');
            const email = formData.get('email');
            const message = formData.get('message');
            
            // Basic validation
            if (!name || !phone || !email) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Phone validation
            const phoneRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!phoneRegex.test(phone.replace(/[\s\-\(\)]/g, ''))) {
                alert('Please enter a valid phone number.');
                return;
            }
            
            // Simulate form submission
            setTimeout(() => {
                showModal('contact-success-modal');
                this.reset();
            }, 1000);
        });
    }
}

// Modal functionality
function initModalHandlers() {
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.modal-close');
    
    closeButtons.forEach(button => {
        button.addEventListener('click', function() {
            const modal = this.closest('.modal');
            hideModal(modal.id);
        });
    });
    
    // Close modal when clicking outside
    modals.forEach(modal => {
        modal.addEventListener('click', function(e) {
            if (e.target === this) {
                hideModal(this.id);
            }
        });
    });
    
    // Close modal with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            modals.forEach(modal => {
                if (modal.classList.contains('show')) {
                    hideModal(modal.id);
                }
            });
        }
    });
}

function showModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
}

function hideModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('show');
        document.body.style.overflow = '';
    }
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for browsers without IntersectionObserver
        images.forEach(img => {
            img.src = img.dataset.src || img.src;
            img.classList.add('loaded');
        });
    }
}

// Smooth scrolling for anchor links
function initSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = 'none';
    }
});

// Animation on scroll
function initScrollAnimations() {
    const animatedElements = document.querySelectorAll('.benefit-card, .use-case-card, .step, .pricing-card');
    
    if ('IntersectionObserver' in window) {
        const animationObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            animationObserver.observe(el);
        });
    }
}

// Initialize scroll animations after DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(initScrollAnimations, 100);
});

// Utility functions
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\+]?[1-9][\d]{0,15}$/;
    return re.test(phone.replace(/[\s\-\(\)]/g, ''));
}

function formatPrice(price) {
    return '$' + parseFloat(price).toFixed(2);
}

// Export functions for use in other scripts
window.LetterLift = {
    showModal,
    hideModal,
    validateEmail,
    validatePhone,
    formatPrice
};

