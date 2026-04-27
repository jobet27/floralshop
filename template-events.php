<?php
/**
 * Template Name: Events & Installations
 */
get_header(); ?>

    <main>
        <!-- Events Hero -->
        <section class="section" style="height: 60vh; min-height: 400px; display: flex; align-items: center; position: relative; background: var(--secondary) url('https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: linear-gradient(to bottom, rgba(26,60,52,0.8), rgba(26,60,52,0.4)); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Corporate & Private Commissions</span>
                    <h1 class="display-large" style="font-size: 5rem; line-height: 0.9; margin-bottom: 20px;">Architecture of <span class="text-italic">Botanicals</span></h1>
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
                                    <a href="<?php echo esc_url( home_url( '/weddings' ) ); ?>" style="font-family: var(--font-display); font-size: 1.5rem; opacity: 0.4; transition: opacity 0.3s ease;">Weddings</a>
                                </li>
                                <li style="margin-bottom: 20px;">
                                    <a href="<?php echo esc_url( home_url( '/events' ) ); ?>" style="font-family: var(--font-display); font-size: 1.5rem; color: var(--primary); font-weight: 700;">Corporate & Events</a>
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
                            <h2 style="font-size: 3.5rem; color: var(--secondary); line-height: 1.1; margin-bottom: 40px;">The Art of the <span class="text-italic">Event</span></h2>
                            <p style="font-size: 1.25rem; line-height: 2; opacity: 0.8; margin-bottom: 60px;">From minimalist corporate branding to opulent private parties, we specialize in creating botanical environments that leave a lasting impression. Our team manages every detail from concept to installation, ensuring a seamless experience for planners and hosts alike.</p>
                            
                            <img src="https://images.unsplash.com/photo-1478145046317-39f10e56b5e9?auto=format&fit=crop&w=1200&q=80" alt="Event Showcase" style="width: 100%; height: 600px; object-fit: cover; margin-bottom: 80px; box-shadow: var(--shadow-luxury);">

                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px;">
                                <div>
                                    <h3 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px;">Brand Alignment</h3>
                                    <p style="opacity: 0.7; line-height: 1.8;">We translate your brand's unique identity into sophisticated floral narratives for launches and galas.</p>
                                </div>
                                <div>
                                    <h3 style="font-size: 2rem; color: var(--secondary); margin-bottom: 20px;">Grand Scale</h3>
                                    <p style="opacity: 0.7; line-height: 1.8;">Transformative installations that redefine the volume and atmosphere of any venue.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Installations Showcase -->
        <section class="section" style="background: var(--secondary); color: white;">
            <div class="container">
                <div class="text-center reveal" style="margin-bottom: 80px;">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Grand Scale</span>
                    <h2 style="font-size: 4rem;">Signature <span class="text-italic">Installations</span></h2>
                </div>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;" class="reveal">
                    <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?auto=format&fit=crop&w=600&q=80" alt="Install 1" style="width: 100%; height: 400px; object-fit: cover;">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&w=600&q=80" alt="Install 2" style="width: 100%; height: 400px; object-fit: cover;">
                    <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=600&q=80" alt="Install 3" style="width: 100%; height: 400px; object-fit: cover;">
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
