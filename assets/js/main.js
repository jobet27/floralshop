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
    handleHeaderScroll();

    // 2. Intersection Observer for Reveal Animations
    const revealElements = document.querySelectorAll('.reveal');
    const revealOptions = {
        threshold: 0.1,
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

    revealElements.forEach(el => revealObserver.observe(el));

    // 3. Smooth Scrolling for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === '') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // 4. Dropdown Hide on Click Logic
    const dropdownLinks = document.querySelectorAll('.luxury-dropdown a');
    dropdownLinks.forEach(link => {
        link.addEventListener('click', () => {
            const dropdown = link.closest('.luxury-dropdown');
            if (dropdown) {
                dropdown.style.display = 'none';
                setTimeout(() => {
                    dropdown.style.removeProperty('display');
                }, 500);
            }
        });
    });

    // Close on click outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.has-dropdown')) {
            document.querySelectorAll('.luxury-dropdown').forEach(dropdown => {
                dropdown.style.display = 'none';
                setTimeout(() => {
                    dropdown.style.removeProperty('display');
                }, 100);
            });
        }
    });
});
