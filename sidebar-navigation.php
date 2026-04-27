<?php
/**
 * Sidebar Navigation Template Part
 * 
 * Dynamically displays the appropriate sidebar based on the current page context.
 */

$current_url = $_SERVER['REQUEST_URI'];
$is_boutique = strpos($current_url, 'boutique') !== false || is_page_template('template-delivery.php') || is_page_template('template-care.php') || is_page_template('template-workshops.php');
$is_occasions = strpos($current_url, 'occasions') !== false || is_page_template('template-weddings.php') || is_page_template('template-events.php');

$title = $is_boutique ? 'Browse Boutique' : 'Browse Occasions';
$links = [];

if ($is_boutique) {
    $links = [
        ['name' => 'Signature Bouquets', 'url' => home_url('/boutique#signature')],
        ['name' => 'Seasonal Collections', 'url' => home_url('/boutique#seasonal')],
        ['name' => 'Floral Subscriptions', 'url' => home_url('/boutique#subscriptions')],
        ['name' => 'Delivery Info', 'url' => home_url('/delivery-info')],
        ['name' => 'Plant Care', 'url' => home_url('/plant-care')],
        ['name' => 'Workshops', 'url' => home_url('/workshops')],
    ];
} else {
    $links = [
        ['name' => 'Weddings', 'url' => home_url('/weddings')],
        ['name' => 'Corporate & Events', 'url' => home_url('/events')],
        ['name' => 'Birthdays & Parties', 'url' => home_url('/occasions#celebrations')],
        ['name' => 'Portfolio', 'url' => home_url('/portfolio')],
    ];
}
?>

<aside class="reveal sidebar-nav-component" style="position: sticky; top: 120px;">
    <div style="padding-bottom: 40px; border-bottom: 1px solid rgba(0,0,0,0.1); margin-bottom: 40px;">
        <span class="text-gold" style="text-transform: uppercase; letter-spacing: 3px; font-weight: 700; font-size: 0.8rem;"><?php echo esc_html($title); ?></span>
    </div>
    <nav>
        <ul style="list-style: none;">
            <?php foreach ($links as $link): 
                $is_active = (strpos($current_url, basename($link['url'])) !== false);
                ?>
                <li style="margin-bottom: 20px;">
                    <a href="<?php echo esc_url($link['url']); ?>" 
                       style="font-family: var(--font-display); font-size: 1.5rem; transition: all 0.3s ease; 
                              <?php echo $is_active ? 'color: var(--primary); font-weight: 700;' : 'opacity: 0.4;'; ?>">
                        <?php echo esc_html($link['name']); ?>
                    </a>
                </li>
            <?php endforeach; ?>
            <li style="margin-top: 60px; padding-top: 40px; border-top: 1px solid rgba(0,0,0,0.1);">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-primary" style="padding: 15px 30px; font-size: 0.7rem; width: 100%;">Enquire Now</a>
            </li>
        </ul>
    </nav>
</aside>
