<?php
/**
 * Template Name: Flower Care Guide
 */
get_header(); ?>

    <main>
        <!-- Care Hero -->
        <section class="section" style="height: 60vh; min-height: 400px; display: flex; align-items: center; position: relative; background: #fdfaf5 url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(255,255,255,0.7), rgba(255,255,255,0.3)); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; color: var(--secondary);">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Bloom Longevity</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 20px; color: var(--secondary);">Prolong the <span class="text-italic">Magic</span></h1>
                </div>
            </div>
        </section>

        <!-- Main Content with Sidebar -->
        <section class="section" style="background: white;">
            <div class="container">
                <div style="display: grid; grid-template-columns: 300px 1fr; gap: 80px; align-items: start;">
                    
                    <!-- Dynamic Sidebar -->
                    <?php include( locate_template( 'sidebar-navigation.php' ) ); ?>

                    <!-- Page Content -->
                    <div class="content-area">
                        <div class="reveal">
                            <h2 style="font-size: 3.5rem; color: var(--secondary); line-height: 1.1; margin-bottom: 40px;">Daily <span class="text-italic">Rituals</span></h2>
                            
                            <div style="margin-bottom: 60px;">
                                <div style="display: flex; gap: 30px; margin-bottom: 40px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 40px;">
                                    <span style="font-family: var(--font-display); font-size: 3rem; color: var(--primary); line-height: 1;">01.</span>
                                    <div>
                                        <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: var(--secondary);">The Fresh Cut</h3>
                                        <p style="opacity: 0.8; line-height: 1.8; font-size: 1.1rem;">Trim 1-2 inches from the bottom of each stem at a 45-degree angle. This increases the surface area for water absorption and prevents the stems from sitting flat on the vase bottom.</p>
                                    </div>
                                </div>

                                <div style="display: flex; gap: 30px; margin-bottom: 40px; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 40px;">
                                    <span style="font-family: var(--font-display); font-size: 3rem; color: var(--primary); line-height: 1;">02.</span>
                                    <div>
                                        <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: var(--secondary);">Clean Water</h3>
                                        <p style="opacity: 0.8; line-height: 1.8; font-size: 1.1rem;">Change the water every 2 days. Use lukewarm water for most blooms, and ensure the vase is thoroughly cleaned to prevent bacterial growth.</p>
                                    </div>
                                </div>

                                <div style="display: flex; gap: 30px;">
                                    <span style="font-family: var(--font-display); font-size: 3rem; color: var(--primary); line-height: 1;">03.</span>
                                    <div>
                                        <h3 style="font-size: 1.8rem; margin-bottom: 15px; color: var(--secondary);">Environment</h3>
                                        <p style="opacity: 0.8; line-height: 1.8; font-size: 1.1rem;">Keep flowers in a cool, shaded spot away from direct sunlight, drafts, and ripening fruit which ages flowers prematurely.</p>
                                    </div>
                                </div>
                            </div>

                            <img src="https://images.unsplash.com/photo-1459411552884-841db9b3cc2a?auto=format&fit=crop&w=1200&q=80" alt="Vase Care" style="width: 100%; height: 500px; object-fit: cover; box-shadow: var(--shadow-luxury);">
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
