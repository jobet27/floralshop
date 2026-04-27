<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

    <main>
        <!-- Contact Hero -->
        <section class="section" style="background: var(--secondary); padding: 160px 0 100px; color: white; position: relative; overflow: hidden;">
            <!-- Decorative Pattern -->
            <div style="position: absolute; left: 10%; top: 20%; opacity: 0.05; font-size: 15rem; font-family: var(--font-display); pointer-events: none;">Floral</div>
            
            <div class="container reveal text-center">
                <span class="text-gold" style="text-transform: uppercase; letter-spacing: 5px; font-weight: 700; display: block; margin-bottom: 20px;">We're here to help</span>
                <h1 class="display-large" style="line-height: 0.9; margin-bottom: 0;">Connect <br>With <span class="text-italic">Us</span></h1>
            </div>
        </section>

        <!-- Main Contact Area -->
        <section class="section">
            <div class="container">
                <div class="contact-grid" style="gap: 100px;">
                    <!-- Contact Details -->
                    <div class="reveal">
                        <div style="margin-bottom: 60px;">
                            <h2 style="font-size: 2.5rem; color: var(--secondary); margin-bottom: 30px;">Let's start <br>something <span class="text-italic">beautiful</span></h2>
                            <p style="font-size: 1.1rem; line-height: 1.8; opacity: 0.8;">Whether you are looking for the perfect bouquet or planning a large-scale event, our floral artists are ready to bring your vision to life.</p>
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                            <div>
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); margin-bottom: 15px;">Boutique Location</h4>
                                <p style="line-height: 1.6;">123 Bloom Street,<br>Floral District,<br>City Center, FC 45678</p>
                            </div>
                            <div>
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); margin-bottom: 15px;">Business Hours</h4>
                                <p style="line-height: 1.6;">Mon — Fri: 9am - 6pm<br>Sat: 10am - 4pm<br>Sun: By Appointment</p>
                            </div>
                            <div>
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); margin-bottom: 15px;">Inquiries</h4>
                                <p style="line-height: 1.6;">hello@floralshop.com<br>+1 (555) 123-4567</p>
                            </div>
                            <div>
                                <h4 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--primary); margin-bottom: 15px;">Social Presence</h4>
                                <p style="line-height: 1.6;">@floralshop_boutique<br>#floralshopmoments</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="reveal">
                        <div class="contact-form" style="background: white; padding: 60px; box-shadow: var(--shadow-luxury); border: 1px solid rgba(0,0,0,0.05);">
                            <form action="#">
                                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" id="name" placeholder="Full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" placeholder="email@example.com">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inquiry-type">How can we help?</label>
                                    <select id="inquiry-type" style="width: 100%; padding: 15px; border: 1px solid rgba(0,0,0,0.1); border-radius: 0; background: white; font-family: inherit;">
                                        <option>Select an option</option>
                                        <option>Wedding Floral Package</option>
                                        <option>Corporate Event Styling</option>
                                        <option>Custom Gift Arrangement</option>
                                        <option>Floral Workshop Booking</option>
                                        <option>Other Inquiry</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="message">Your Message</label>
                                    <textarea id="message" rows="6" placeholder="Tell us about your vision..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary no-magnetic" style="width: 100%; padding: 20px;">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section / Visual Closer -->
        <section style="height: 500px; background: #e0e0e0 url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?auto=format&fit=crop&w=1920&q=80') center/cover no-repeat; position: relative;">
            <div style="position: absolute; inset: 0; background: rgba(26, 60, 52, 0.7); display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
                <div class="reveal">
                    <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Visit Our Studio</h2>
                    <p style="opacity: 0.8; letter-spacing: 2px;">Experience the fragrance of fresh blooms in person.</p>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
