<?php
/**
 * Template Name: Wedding Services
 */
get_header(); ?>

    <main>
        <!-- Wedding Hero -->
        <section class="section" style="height: 60vh; min-height: 400px; display: flex; align-items: center; position: relative; background: var(--secondary) url('https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(26,60,52,0.8), rgba(26,60,52,0.4)); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Bespoke Artistry</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 20px;">For Your <span class="text-italic">Forever</span></h1>
                </div>
            </div>
        </section>

        <!-- Main Content with Sidebar -->
        <section class="section" style="background: var(--background);">
            <div class="container">
                <div style="display: grid; grid-template-columns: 300px 1fr; gap: 80px; align-items: start;">
                    
                    <!-- Side Navigation Sidebar -->
                    <aside class="reveal" style="position: sticky; top: 120px;">
                        <div style="padding-bottom: 40px; border-bottom: 1px solid rgba(0,0,0,0.1); margin-bottom: 40px;">
                            <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700; font-size: 0.8rem;">Browse Occasions</span>
                        </div>
                        <nav>
                            <ul style="list-style: none;">
                                <li style="margin-bottom: 20px;">
                                    <a href="<?php echo esc_url( home_url( '/weddings' ) ); ?>" style="font-family: var(--font-display); font-size: 1.5rem; color: var(--primary); font-weight: 700;">Weddings</a>
                                </li>
                                <li style="margin-bottom: 20px;">
                                    <a href="<?php echo esc_url( home_url( '/events' ) ); ?>" style="font-family: var(--font-display); font-size: 1.5rem; opacity: 0.4; transition: opacity 0.3s ease;">Corporate & Events</a>
                                </li>
                                <li style="margin-bottom: 20px;">
                                    <a href="<?php echo esc_url( home_url( '/occasions#celebrations' ) ); ?>" style="font-family: var(--font-display); font-size: 1.5rem; opacity: 0.4; transition: opacity 0.3s ease;">Birthdays & Parties</a>
                                </li>
                                <li style="margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(0,0,0,0.1);">
                                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="padding: 15px 30px; font-size: 0.7rem; width: 100%;">Enquire Now</a>
                                </li>
                            </ul>
                        </nav>
                    </aside>

                    <!-- Page Content -->
                    <div class="content-area">
                        <div class="reveal">
                            <h2 style="font-size: 3.5rem; color: var(--secondary); line-height: 1.1; margin-bottom: 40px;">Elegance in <span class="text-italic">Every Petal</span></h2>
                            <p style="font-size: 1.25rem; line-height: 2; opacity: 0.8; margin-bottom: 60px;">We believe that wedding florals should be as unique as your love story. Our process begins with a deep dive into your vision, color palette, and venue aesthetics, ensuring that every arrangement—from the bridal bouquet to the grandest installation—is a reflection of your personality.</p>
                            
                            <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?auto=format&fit=crop&w=1200&q=80" alt="Wedding Showcase" style="width: 100%; height: 600px; object-fit: cover; margin-bottom: 80px; box-shadow: var(--shadow-luxury);">

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                                <div>
                                    <h3 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px;">Personal Florals</h3>
                                    <p style="opacity: 0.7; line-height: 1.8;">Bespoke bouquets and boutonnieres crafted with the rarest seasonal blooms to complement your attire perfectly.</p>
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px;">Ceremony Decor</h3>
                                    <p style="opacity: 0.7; line-height: 1.8;">From grand floral arches to delicate aisle markers, we create the perfect stage for your vows.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Portfolio Teaser -->
        <section class="section" style="background: var(--secondary); color: white;">
            <div class="container">
                <div class="text-center reveal" style="margin-bottom: 80px;">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Inspiration</span>
                    <h2 style="font-size: 4rem;">Recent <span class="text-italic">Weddings</span></h2>
                </div>
                <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 40px;" class="reveal">
                    <img src="https://images.unsplash.com/photo-1544592033-85912493051b?auto=format&fit=crop&w=800&q=80" alt="Wedding 1" style="width: 100%; height: 600px; object-fit: cover;">
                    <img src="https://images.unsplash.com/photo-1510076857177-7470076d4098?auto=format&fit=crop&w=800&q=80" alt="Wedding 2" style="width: 100%; height: 600px; object-fit: cover;">
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
