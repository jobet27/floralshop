<?php
/**
 * Template Name: Occasions Page
 */
get_header(); ?>

    <main>
        <section class="section" style="background: var(--secondary); padding: 120px 0 60px; color: white;">
            <div class="container text-center reveal">
                <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Life's Beautiful Chapters</span>
                <h1 class="display-large" style="margin-top: 20px;">For Every <span class="text-italic">Occasion</span></h1>
                <p style="max-width: 600px; margin: 0 auto; opacity: 0.8; font-size: 1.1rem;">From grand celebrations to intimate moments, our floral designs tell your story with elegance and grace.</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="product-grid">
                    <div class="flower-card reveal">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80" alt="Weddings">
                        </div>
                        <div class="card-body">
                            <span class="card-category">Weddings</span>
                            <h3>Bridal & Venue</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9; margin-top: 10px;">Bespoke bridal bouquets and complete venue transformation.</p>
                        </div>
                    </div>
                    <div class="flower-card reveal">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?auto=format&fit=crop&w=800&q=80" alt="Events">
                        </div>
                        <div class="card-body">
                            <span class="card-category">Events</span>
                            <h3>Corporate & Galas</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9; margin-top: 10px;">Sophisticated installations that elevate any space or occasion.</p>
                        </div>
                    </div>
                    <div class="flower-card reveal">
                        <div class="card-img-wrapper">
                            <img src="https://images.unsplash.com/photo-1513151233558-d860c5398176?auto=format&fit=crop&w=800&q=80" alt="Celebrations">
                        </div>
                        <div class="card-body">
                            <span class="card-category">Celebrations</span>
                            <h3>Birthdays & More</h3>
                            <p style="font-size: 0.9rem; opacity: 0.9; margin-top: 10px;">Bring color and joy to your milestones with curated gift sets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
