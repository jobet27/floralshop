<?php
/**
 * Template Name: Delivery Information
 */
get_header(); ?>

    <main>
        <!-- Delivery Hero -->
        <section class="section" style="height: 60vh; min-height: 400px; display: flex; align-items: center; position: relative; background: var(--secondary) url('https://images.unsplash.com/photo-1549416878-b9ca35c2d47b?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(26,60,52,0.8), rgba(26,60,52,0.4)); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Safe & Sustainable</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 20px;">Arriving in <span class="text-italic">Style</span></h1>
                </div>
            </div>
        </section>

        <!-- Main Content with Sidebar -->
        <section class="section" style="background: var(--background);">
            <div class="container">
                <div style="display: grid; grid-template-columns: 300px 1fr; gap: 80px; align-items: start;">
                    
                    <!-- Dynamic Sidebar -->
                    <?php include( locate_template( 'sidebar-navigation.php' ) ); ?>

                    <!-- Page Content -->
                    <div class="content-area">
                        <div class="reveal">
                            <h2 style="font-size: 3.5rem; color: var(--secondary); line-height: 1.1; margin-bottom: 40px;">Where We <span class="text-italic">Bloom</span></h2>
                            <p style="font-size: 1.25rem; line-height: 2; opacity: 0.8; margin-bottom: 60px;">We offer premium white-glove delivery services throughout the greater metropolitan area. Every arrangement is transported in climate-controlled conditions to ensure it arrives as fresh as it left our studio.</p>
                            
                            <div style="background: white; padding: 60px; box-shadow: var(--shadow-sm); border-left: 6px solid var(--primary); margin-bottom: 60px;">
                                <h3 style="color: var(--secondary); margin-bottom: 30px; font-size: 2rem;">Local Delivery Zones</h3>
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                                    <ul style="list-style: none; opacity: 0.8; font-size: 1.1rem; line-height: 2;">
                                        <li>• Downtown & Financial District</li>
                                        <li>• North Side & Harbor View</li>
                                    </ul>
                                    <ul style="list-style: none; opacity: 0.8; font-size: 1.1rem; line-height: 2;">
                                        <li>• West Garden District</li>
                                        <li>• East Bloom Heights</li>
                                    </ul>
                                </div>
                            </div>

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                                <div>
                                    <h4 style="color: var(--primary); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Eco-Luxe Packaging</h4>
                                    <p style="opacity: 0.7; line-height: 1.8;">100% compostable wraps and FSC-certified gift boxes. No single-use plastics.</p>
                                </div>
                                <div>
                                    <h4 style="color: var(--primary); text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">Same-Day Service</h4>
                                    <p style="opacity: 0.7; line-height: 1.8;">Orders placed before 1:00 PM are eligible for same-day delivery across all zones.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
