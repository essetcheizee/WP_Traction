<?php

  /**
 * Adds social links to user profile
 *
 * @param $user_contact
 * @return mixed
 */
function thewebsitedev_user_social_links( $user_contact ) {
    /* Add user contact methods */
    $user_contact['facebook'] = __('Facebook Link', 'traction');
    $user_contact['twitter'] = __('Twitter Link', 'traction');
    $user_contact['dribbble'] = __('Dribbble Link', 'traction');
    $user_contact['pinterest'] = __('Pinterest Link', 'traction');
    $user_contact['linkedin'] = __('LinkedIn Link', 'traction');
    $user_contact['googleplus'] = __('Google+ Link', 'traction');
    $user_contact['instagram'] = __('Instagram', 'traction');
 
    return $user_contact;
 }
