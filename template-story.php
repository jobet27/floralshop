<?php
/**
 * Template Name: Our Story Page
 */
get_header(); ?>

    <main>
        <!-- Story Hero -->
        <section class="section" style="height: 70vh; min-height: 500px; display: flex; align-items: center; position: relative; background: var(--secondary) url('https://images.unsplash.com/photo-1558350849-d7486767087b?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; overflow: hidden;">
            <div style="position: absolute; inset: 0; background: rgba(26, 60, 52, 0.4); z-index: 1;"></div>
            <div class="container" style="position: relative; z-index: 2; text-align: center; color: white;">
                <div class="reveal">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">Est. 2010</span>
                    <h1 class="display-large" style="line-height: 0.9; margin-bottom: 0;">Artisans of <br><span class="text-italic">Nature</span></h1>
                </div>
            </div>
        </section>

        <!-- Our Philosophy -->
        <section class="section" style="background: var(--background);">
            <div class="container">
                <div class="contact-grid" style="align-items: center; gap: 100px;">
                    <div class="reveal">
                        <div style="position: relative;">
                            <img src="https://images.unsplash.com/photo-1507290439931-a861b5a38200?auto=format&fit=crop&w=800&q=80" alt="Floral Workshop" style="box-shadow: var(--shadow-luxury); width: 100%;">
                            <div style="position: absolute; top: -30px; left: -30px; width: 150px; height: 150px; border: 2px solid var(--primary); z-index: -1;"></div>
                        </div>
                    </div>
                    <div class="reveal">
                        <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">The Philosophy</span>
                        <h2 style="font-size: 3rem; color: var(--secondary); margin-top: 20px;">We speak the <br><span class="text-italic">language</span> of blooms</h2>
                        <p style="margin: 40px 0; line-height: 2; font-size: 1.1rem; opacity: 0.8;">Founded on the belief that flowers are the earth's most eloquent poetry, FloralShop was born in a small garden studio with a single mission: to create botanical experiences that transcend the ordinary. Every stem in our boutique is chosen not just for its beauty, but for its character and the story it tells.</p>
                        <div style="display: flex; gap: 40px; margin-top: 40px;">
                            <div>
                                <h4 style="color: var(--secondary); margin-bottom: 10px;">Sustainable</h4>
                                <p style="font-size: 0.9rem; opacity: 0.7;">100% plastic-free packaging and seasonal sourcing.</p>
                            </div>
                            <div>
                                <h4 style="color: var(--secondary); margin-bottom: 10px;">Artisanal</h4>
                                <p style="font-size: 0.9rem; opacity: 0.7;">Hand-tied with love in our boutique studio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- The Process -->
        <section class="section" style="background: var(--secondary); color: white;">
            <div class="container">
                <div class="section-header text-center reveal" style="margin-bottom: 80px;">
                    <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700;">Our Process</span>
                    <h2 style="font-size: 3rem; margin-top: 20px;">From Seed to <span class="text-italic">Soul</span></h2>
                </div>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 60px;">
                    <div class="reveal text-center">
                        <span style="font-family: var(--font-display); font-size: 4rem; color: var(--primary); display: block; margin-bottom: 20px; opacity: 0.5;">01</span>
                        <h3 style="margin-bottom: 20px;">Curation</h3>
                        <p style="opacity: 0.7; line-height: 1.8;">We partner with ethical growers to select the rarest and most vibrant blooms at their peak.</p>
                    </div>
                    <div class="reveal text-center">
                        <span style="font-family: var(--font-display); font-size: 4rem; color: var(--primary); display: block; margin-bottom: 20px; opacity: 0.5;">02</span>
                        <h3 style="margin-bottom: 20px;">Artistry</h3>
                        <p style="opacity: 0.7; line-height: 1.8;">Our floral artists compose each bouquet as a unique piece of living art, balanced for texture and tone.</p>
                    </div>
                    <div class="reveal text-center">
                        <span style="font-family: var(--font-display); font-size: 4rem; color: var(--primary); display: block; margin-bottom: 20px; opacity: 0.5;">03</span>
                        <h3 style="margin-bottom: 20px;">Presence</h3>
                        <p style="opacity: 0.7; line-height: 1.8;">Delivered with care, our arrangements arrive in our signature eco-luxe packaging, ready to transform your space.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Quote -->
        <section class="section" style="background: #f4eee8;">
            <div class="container text-center reveal">
                <div style="max-width: 900px; margin: 0 auto;">
                    <span style="font-size: 5rem; color: var(--primary); line-height: 1; font-family: var(--font-display); display: block; margin-bottom: -20px;">"</span>
                    <h2 style="font-size: 2.5rem; line-height: 1.6; color: var(--secondary);">Flowers are a proud assertion that a ray of beauty outvalues all the utilities in the world.</h2>
                    <p style="margin-top: 30px; font-weight: 700; text-transform: uppercase; letter-spacing: 3px; color: var(--primary);">— Ralph Waldo Emerson</p>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="section" style="background: var(--background);">
            <div class="container text-center reveal">
                <h2 style="font-size: 3rem; margin-bottom: 30px;">Become part of <br>our <span class="text-italic">Story</span></h2>
                <p style="max-width: 600px; margin: 0 auto 50px; opacity: 0.7; font-size: 1.1rem;">Follow our journey through the seasons and let us bring artisanal beauty into your life.</p>
                <div style="display: flex; justify-content: center; gap: 20px;">
                    <a href="<?php echo esc_url( home_url( '/boutique' ) ); ?>" class="btn btn-primary">Visit the Boutique</a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline" style="color: var(--secondary); border-color: var(--secondary);">Work With Us</a>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
