/**
 * FloralShop Main JavaScript
 * 
 * Handles sticky header, mobile navigation, and scroll reveal animations.
 */

document.addEventListener('DOMContentLoaded', () => {
    'use strict';
    
    document.body.classList.add('js-enabled');

    // 1. Sticky Header Logic
    const header = document.querySelector('.main-header');
    const scrollThreshold = 10;

    const handleHeaderScroll = () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    window.addEventListener('scroll', handleHeaderScroll);
    handleHeaderScroll(); // Run on load

    // 2. Intersection Observer for Reveal Animations
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOptions = {
        threshold: 0.05,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                observer.unobserve(entry.target);
            }
        });
    }, revealOptions);

    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // 3. Mobile Menu Toggle (Simplified for professional demo)
    const createMobileToggle = () => {
        const navContainer = document.querySelector('.nav-container');
        if (!navContainer) return;

        const toggle = document.createElement('button');
        toggle.className = 'mobile-nav-toggle';
        toggle.innerHTML = '<span></span><span></span><span></span>';
        toggle.setAttribute('aria-label', 'Toggle Navigation');
        
        navContainer.appendChild(toggle);

        toggle.addEventListener('click', () => {
            const nav = document.querySelector('.nav-menu');
            nav.classList.toggle('mobile-active');
            toggle.classList.toggle('toggle-active');
            document.body.classList.toggle('no-scroll');
        });
    };

    createMobileToggle();

    // 4. Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // 5. Hero Parallax Zoom
    const hero = document.querySelector('.hero');
    if (hero) {
        window.addEventListener('scroll', () => {
            const scroll = window.pageYOffset;
            hero.style.backgroundPositionY = `${scroll * 0.5}px`;
        });
    }

    // 6. Magnetic Button Effect
    const magneticBtns = document.querySelectorAll('.btn-primary:not(.no-magnetic)');
    magneticBtns.forEach(btn => {
        btn.addEventListener('mousemove', (e) => {
            const position = btn.getBoundingClientRect();
            const x = e.pageX - position.left - position.width / 2;
            const y = e.pageY - position.top - position.height / 2;
            
            btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
        });
        
        btn.addEventListener('mouseout', () => {
            btn.style.transform = `translate(0px, 0px)`;
        });
    });
});
