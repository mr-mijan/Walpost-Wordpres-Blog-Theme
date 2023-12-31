<?php

// Function to calculate estimated reading time
function calculate_reading_time($content) {
    $words_per_minute = 200; // Adjust this value based on average reading speed
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / $words_per_minute);

    return $reading_time;
}

// Function to display post reading time
function display_reading_time() {
    $post_content = get_post_field('post_content', get_the_ID());
    $reading_time = calculate_reading_time($post_content);

    echo '<span class="reading-time">' . sprintf(_n('%d min read', '%d min read', $reading_time, 'walpost'), $reading_time) . '</span>';
}