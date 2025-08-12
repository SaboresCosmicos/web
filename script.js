// Mobile Navigation
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    initializeEventListeners();
});

function initializeEventListeners() {
    // Mobile navigation
    hamburger.addEventListener('click', toggleMobileMenu);

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
                // Close mobile menu if open
                navMenu.classList.remove('active');
            }
        });
    });

    // Newsletter form
    const newsletterForm = document.getElementById('newsletter-form');
    newsletterForm.addEventListener('submit', handleNewsletterSubmit);

    // Contact form
    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', handleContactSubmit);

    // Service buttons
    document.querySelectorAll('.service-card .btn').forEach(button => {
        button.addEventListener('click', handleServiceRequest);
    });

    // Product buttons
    document.querySelectorAll('.product-card .btn').forEach(button => {
        button.addEventListener('click', handleProductRequest);
    });
}

// Mobile Navigation
function toggleMobileMenu() {
    navMenu.classList.toggle('active');
}

// Form Handlers
function handleNewsletterSubmit(event) {
    event.preventDefault();
    const email = event.target.querySelector('input[type="email"]').value;
    
    // Simulate newsletter subscription
    showNotification(`¡Gracias por suscribirte! Te enviaremos contenido cósmico a ${email}`);
    event.target.reset();
}

function handleContactSubmit(event) {
    event.preventDefault();
    const name = event.target.querySelector('input[type="text"]').value;
    const email = event.target.querySelector('input[type="email"]').value;
    const message = event.target.querySelector('textarea').value;
    
    // Simulate contact form submission
    const whatsappMessage = `Hola! Soy ${name} (${email}). ${message}`;
    const whatsappUrl = `https://wa.me/5491112345678?text=${encodeURIComponent(whatsappMessage)}`;
    
    window.open(whatsappUrl, '_blank');
    showNotification('Mensaje enviado! Te contactaremos pronto.');
    event.target.reset();
}

function handleServiceRequest(event) {
    const serviceCard = event.target.closest('.service-card');
    const serviceName = serviceCard.querySelector('h3').textContent;
    
    const message = `¡Hola! Me interesa el servicio: ${serviceName}. ¿Podrías darme más información?`;
    const whatsappUrl = `https://wa.me/5491112345678?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
    showNotification('Redirigiendo a WhatsApp para más información...');
}

function handleProductRequest(event) {
    const productCard = event.target.closest('.product-card');
    const productName = productCard.querySelector('h3').textContent;
    const productPrice = productCard.querySelector('.product-price').textContent;
    
    const message = `¡Hola! Me interesa el producto: ${productName} (${productPrice}). ¿Podrías darme más información sobre cómo adquirirlo?`;
    const whatsappUrl = `https://wa.me/5491112345678?text=${encodeURIComponent(message)}`;
    
    window.open(whatsappUrl, '_blank');
    showNotification('Redirigiendo a WhatsApp para más información...');
}

// Notification System
function showNotification(message, type = 'success') {
    // Remove existing notifications
    const existingNotification = document.querySelector('.notification');
    if (existingNotification) {
        existingNotification.remove();
    }
    
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'error' ? 'linear-gradient(135deg, #dc2626, #b91c1c)' : 'linear-gradient(135deg, #737b6a, #383838)'};
        color: #ffffff;
        padding: 1rem 1.5rem;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        z-index: 3000;
        font-weight: 500;
        max-width: 300px;
        animation: slideInRight 0.3s ease-out;
    `;
    
    notification.textContent = message;
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease-out';
        setTimeout(() => {
            if (notification.parentNode) {
                notification.remove();
            }
        }, 300);
    }, 3000);
}

// Add CSS animations for notifications
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    @keyframes slideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(100%);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Scroll Effects
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.style.background = 'rgba(0, 0, 0, 0.98)';
    } else {
        navbar.style.background = 'rgba(0, 0, 0, 0.95)';
    }
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.product-card, .service-card, .about-content');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});

// Parallax effect for hero section
window.addEventListener('scroll', function() {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('.hero-content');
    if (hero) {
        hero.style.transform = `translateY(${scrolled * -0.5}px)`;
    }
});

// Loading animation
window.addEventListener('load', function() {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s ease';
    
    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
});

document.addEventListener('DOMContentLoaded', () => {
    const copyWarning = document.getElementById('copy-warning');
    let timeout;

    function showWarning() {
        copyWarning.classList.add('visible');

        clearTimeout(timeout);
        timeout = setTimeout(() => {
            copyWarning.classList.remove('visible');
        }, 3000);
    }

    document.body.addEventListener('copy', (e) => {
        e.preventDefault();
        showWarning();
    });

    document.body.addEventListener('contextmenu', (e) => {
        e.preventDefault();
        showWarning();
    });
});