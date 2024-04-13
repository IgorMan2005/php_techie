<?php

// Basic config
$config = [
    // SEO
    'title' => 'My Company',											    // Title
    'browser_title' => 'My Company corp web site',					        // Browser title
    'description' => 'My Company - best company in the World',	            // Description
    'keywords' => 'company, best, business',								// Keywords
    'project_url' => 'https://best-itpro.ru',								// Project URL

    // Contacts
    'phone' => '+7 999 888-7733',
    'email' => 'info@mycompany.com',
    'address' => 'Aleksandr Solzhenitsyn street, Moscow, Russia',
    'open_hours' => 'Mon-Sat: 09AM - 18PM',

    'video' => 'https://www.youtube.com/watch?v=IRow0WCTrXw',

    // Social
    'facebook' => 'https://www.facebook.com/bestitpro',
    'vk' => 'https://vk.com/bestitpro',
    'twitter' => 'https://twitter.com/Best_ITPro',
    'instagram' => 'https://www.instagram.com/igorman2005/',
    'linkedin' => 'https://www.linkedin.com/in/igorman-bestitpro/',

];

// Prepare phone number to a tel:
function phone_link($phone) {
    $phone = str_replace('(', '', $phone);
    $phone = str_replace(')', '', $phone);
    $phone = str_replace('-', '', $phone);
    $phone = str_replace(' ', '', $phone);
    $phone = str_replace('+', '', $phone);
    $phone = '+' . $phone;

    return $phone;
}