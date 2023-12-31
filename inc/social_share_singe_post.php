<?php
// Social Share Function with Icons
function custom_social_share() {
    $current_url = get_permalink();
    $title = get_the_title();

    $social_networks = array(
        'facebook' => array(
            'icon' => 'fab fa-facebook',
            'url'  => 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($current_url),
        ),
        'twitter'  => array(
            'icon' => 'fab fa-twitter',
            'url'  => 'https://twitter.com/intent/tweet?url=' . urlencode($current_url) . '&text=' . urlencode($title),
        ),
        'linkedin' => array(
            'icon' => 'fab fa-pinterest',
            'url'  => 'https://www.pinterest.com/pin/create/button/?url=' . urlencode($current_url) . '&title=' . urlencode($title),
        ),
        // Add more social networks as needed
    );

    echo '<div class="social-share">';
    foreach ($social_networks as $network) {
        echo '<a href="' . esc_url($network['url']) . '" target="_blank" rel="noopener noreferrer" class="social-icon">';
        echo '<i class="' . esc_attr($network['icon']) . '"></i>';
        echo '</a>';
    }
    echo '</div>';
}
// Display Social Share
function display_custom_social_share() {
    custom_social_share();
}