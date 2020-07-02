<?php

  /**
 * Adds social links to user profile
 *
 * @param $user_contact
 * @return mixed
 */
function thewebsitedev_user_social_links( $user_contact ) {
    /* Add user contact methods */
    $user_contact['facebook'] = __('Facebook Link', 'rebellion');
    $user_contact['twitter'] = __('Twitter Link', 'rebellion');
    $user_contact['dribbble'] = __('Dribbble Link', 'rebellion');
    $user_contact['pinterest'] = __('Pinterest Link', 'rebellion');
    $user_contact['linkedin'] = __('LinkedIn Link', 'rebellion');
    $user_contact['googleplus'] = __('Google+ Link', 'rebellion');
 
    return $user_contact;
 }
