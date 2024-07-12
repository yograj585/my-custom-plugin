<?php
/**
* Plugin Name: Groot
* Plugin URI: https://www.your-site.com/
* Description: This is test plugin which is created by yograj thakur for study purpose .He is created this plugin in his office .
* Version: 0.1
* Author: Yograj Thakur
* Author URI: https://www.your-site.com/
**/


// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

register_activation_hook( __FILE__, array( 'Groot', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'Groot', 'plugin_deactivation' ) );

if (!defined('GROOT__PLUGIN_DIR')) {
    define('GROOT__PLUGIN_DIR', plugin_dir_path(__FILE__));
}


function my_first_plugin_enqueue_assets() {
    wp_enqueue_style('my-first-plugin-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_script('my-first-plugin-script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array('jquery'), null, true);
    
}
add_action('admin_enqueue_scripts', 'my_first_plugin_enqueue_assets');
  

add_action('admin_menu', 'my_first_plugin_menu');

function my_first_plugin_menu() {
    add_menu_page(
        'My First Plugin',
        'Yograj Test Plugin',    
        'manage_options',          
        'yograj-test-plugin',       
        'my_first_plugin_page',      
        'dashicons-superhero',      
        6                            
    );
    add_submenu_page(
        'yograj-test-plugin',        
        'Submenu Page 1',            
        'Submenu 1',                 
        'manage_options',           
        'custom-plugin-submenu1',   
        'custom_plugin_submenu1'     
    );
    add_submenu_page(
        'yograj-test-plugin',  
        'Submenu Page 2',            
        'Submenu 2',                 
        'manage_options',         
        'custom-plugin-submenu2',   
        'custom_plugin_submenu2'    
    );
}


function my_first_plugin_page() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['my_first_plugin_form_submitted'])) {
        my_first_plugin_handle_form_submission();
    }
    ?>
   <h1>Welcome to Yograj First Plugin</h1>
        <p>This is the content of my first plugin page.</p>
 <div class="tab-buttons">
    <div class="tab-button active" onclick="openTab('tab1')">Form</div>
    <div class="tab-button" onclick="openTab('tab2')">Currency Converter</div>
    <div class="tab-button" onclick="openTab('tab3')">Test 2</div>
    <div class="tab-button" onclick="openTab('tab4')">Test 3</div>
    <div class="tab-button" onclick="openTab('tab5')">Test 4</div>
    <div class="tab-button" onclick="openTab('tab6')">Test 5</div>
    <div class="tab-button" onclick="openTab('tab7')">Test 6</div>
    <div class="tab-button" onclick="openTab('tab8')">Test 7</div>
  </div>

  <div id="tab1" class="tab active">
     <h3>Form for Admin Dashboard</h3>

        <form action="" method="post" class="my-first-plugin-form">

            <?php wp_nonce_field('my_first_plugin_save_user', 'my_first_plugin_nonce'); ?>

            <input type="hidden" name="my_first_plugin_form_submitted" value="1">
            
            <label for="name">Username:</label>
            <input type="text" id="name" name="user_login">
            
            <label for="email">User Email:</label>
            <input type="email" id="email" name="user_email">
            
            <label for="password">Password:</label>
             <input type="password" id="password" name="user_pass">
            
            <input type="submit" value="Submit">
        </form>
    </div>
    <div id="tab2" class="tab">
    <h1>Awesome Currency Converter</h1>
    <p class="convert">
        Convert :
        <input type="number" id="original-currency-amount" placeholder="0" value="1"> </input>
    </p>
    <div>
        	<select id="from_currency">
			<option value="AED">AED</option>
			<option value="ARS">ARS</option>
			<option value="AUD">AUD</option>
			<option value="BGN">BGN</option>
			<option value="BRL">BRL</option>
			<option value="BSD">BSD</option>
			<option value="CAD">CAD</option>
			<option value="CHF">CHF</option>
			<option value="CLP">CLP</option>
			<option value="CNY">CNY</option>
			<option value="COP">COP</option>
			<option value="CZK">CZK</option>
			<option value="DKK">DKK</option>
			<option value="DOP">DOP</option>
			<option value="EGP">EGP</option>
			<option value="EUR">EUR</option>
			<option value="FJD">FJD</option>
			<option value="GBP">GBP</option>
			<option value="GTQ">GTQ</option>
			<option value="HKD">HKD</option>
			<option value="HRK">HRK</option>
			<option value="HUF">HUF</option>
			<option value="IDR">IDR</option>
			<option value="ILS">ILS</option>
			<option value="INR">INR</option>
			<option value="ISK">ISK</option>
			<option value="JPY">JPY</option>
			<option value="KRW">KRW</option>
			<option value="KZT">KZT</option>
			<option value="MXN">MXN</option>
			<option value="MYR">MYR</option>
			<option value="NOK">NOK</option>
			<option value="NZD">NZD</option>
			<option value="PAB">PAB</option>
			<option value="PEN">PEN</option>
			<option value="PHP">PHP</option>
			<option value="PKR">PKR</option>
			<option value="PLN">PLN</option>
			<option value="PYG">PYG</option>
			<option value="RON">RON</option>
			<option value="RUB">RUB</option>
			<option value="SAR">SAR</option>
			<option value="SEK">SEK</option>
			<option value="SGD">SGD</option>
			<option value="THB">THB</option>
			<option value="TRY">TRY</option>
			<option value="TWD">TWD</option>
			<option value="UAH">UAH</option>
			<option value="USD" selected>USD</option>
			<option value="UYU">UYU</option>
			<option value="VND">VND</option>
			<option value="ZAR">ZAR</option>
		</select>
   		<button id="exchange">
			<i class="fas fa-exchange-alt"></i>
		</button>
        <select id="to_currency"><option value="AED">AED</option>
			<option value="ARS">ARS</option>
			<option value="AUD">AUD</option>
			<option value="BGN">BGN</option>
			<option value="BRL">BRL</option>
			<option value="BSD">BSD</option>
			<option value="CAD">CAD</option>
			<option value="CHF">CHF</option>
			<option value="CLP">CLP</option>
			<option value="CNY">CNY</option>
			<option value="COP">COP</option>
			<option value="CZK">CZK</option>
			<option value="DKK">DKK</option>
			<option value="DOP">DOP</option>
			<option value="EGP">EGP</option>
			<option value="EUR">EUR</option>
			<option value="FJD">FJD</option>
			<option value="GBP">GBP</option>
			<option value="GTQ">GTQ</option>
			<option value="HKD">HKD</option>
			<option value="HRK">HRK</option>
			<option value="HUF">HUF</option>
			<option value="IDR">IDR</option>
			<option value="ILS">ILS</option>
			<option value="INR" selected>INR</option>
			<option value="ISK">ISK</option>
			<option value="JPY">JPY</option>
			<option value="KRW">KRW</option>
			<option value="KZT">KZT</option>
			<option value="MXN">MXN</option>
			<option value="MYR">MYR</option>
			<option value="NOK">NOK</option>
			<option value="NZD">NZD</option>
			<option value="PAB">PAB</option>
			<option value="PEN">PEN</option>
			<option value="PHP">PHP</option>
			<option value="PKR">PKR</option>
			<option value="PLN">PLN</option>
			<option value="PYG">PYG</option>
			<option value="RON">RON</option>
			<option value="RUB">RUB</option>
			<option value="SAR">SAR</option>
			<option value="SEK">SEK</option>
			<option value="SGD">SGD</option>
			<option value="THB">THB</option>
			<option value="TRY">TRY</option>
			<option value="TWD">TWD</option>
			<option value="UAH">UAH</option>
			<option value="USD">USD</option>
			<option value="UYU">UYU</option>
			<option value="VND">VND</option>
			<option value="ZAR">ZAR</option>
        </select>
    </div>
    <p class="exchange">
        Exchange Rate:
        
        <input type="text" id="exchange-rate" ></input>
    </p>
    <button id="exchange_button" >Exchange my money now!</button>
    <p id="output-text" >
      <h2>Exchange Result :  <span id="from"></span> converted to <span id="to"></span>
    </p>

    <footer><a href=" https://twitter.com/intent/tweet?text=Awesome Currency Converter 🤑%0a    by @verreauxblack%0ahttps://verreauxblack.biz/project/currency-convertor/" title="share"><i class="fab fa-twitter"></i></a></footer>
    <?php

}

function my_first_plugin_handle_form_submission() {
    if (!isset($_POST['my_first_plugin_nonce']) || !wp_verify_nonce($_POST['my_first_plugin_nonce'], 'my_first_plugin_save_user')) {
        return; 
    }
    $username = sanitize_text_field($_POST['user_login']);
    $email = sanitize_email($_POST['user_email']);
    $password = sanitize_textarea_field($_POST['password']);

     if (empty($username) || empty($email) || empty($password)) {
         echo "<p class='dashicons dashicons-warning' style='color:red;font-size:20px;width:20%;'> All fields are required </p>"; 
     }
    $user_data = array(
        'user_login' => $username,
        'user_email' => $email,
        'user_pass' => $password,
        'role' => 'subscriber',
        'user_url' => home_url(),
    );
    $user_id = wp_insert_user($user_data);

    if (is_wp_error($user_id)) {
        error_log($user_id->get_error_message());
    } else {
        update_user_meta($user_id);
    }
}

function custom_post_type() {
        $labels = array(
            'name'                => _x( 'Travel', 'Post Type General Name', 'twentytwentyone' ),
            'singular_name'       => _x( 'Travel', 'Post Type Singular Name', 'twentytwentyone' ),
            'menu_name'           => __( 'Travel', 'twentytwentyone' ),
            'parent_item_colon'   => __( 'Parent Travel', 'twentytwentyone' ),
            'all_items'           => __( 'All Travel', 'twentytwentyone' ),
            'view_item'           => __( 'View Travel', 'twentytwentyone' ),
            'add_new_item'        => __( 'Add New Travel', 'twentytwentyone' ),
            'add_new'             => __( 'Add New', 'twentytwentyone' ),
            'edit_item'           => __( 'Edit Travel', 'twentytwentyone' ),
            'update_item'         => __( 'Update Travel', 'twentytwentyone' ),
            'search_items'        => __( 'Search Travel', 'twentytwentyone' ),
            'not_found'           => __( 'Not Found', 'twentytwentyone' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
        );
          
        $args = array(
            'label'               => __( 'Travel', 'twentytwentyone' ),
            'description'         => __( 'Travel news and reviews', 'twentytwentyone' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies'          => array( 'genres' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
        register_post_type( 'Travel', $args );
      
    }
    add_action( 'init', 'custom_post_type', 0 );