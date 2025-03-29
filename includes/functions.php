<?php
/**
 * Helper functions for the portfolio
 */

/**
 * Format a date from MongoDB UTCDateTime
 * 
 * @param MongoDB\BSON\UTCDateTime $date The MongoDB date object
 * @param string $format The PHP date format string
 * @return string Formatted date string
 */
function formatMongoDate($date, $format = 'F j, Y') {
    if ($date instanceof MongoDB\BSON\UTCDateTime) {
        return $date->toDateTime()->format($format);
    }
    return 'N/A';
}

/**
 * Truncate text to a specific length with ellipsis
 * 
 * @param string $text The text to truncate
 * @param int $length Maximum length
 * @param string $append Text to append (like ellipsis)
 * @return string Truncated text
 */
function truncateText($text, $length = 100, $append = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    
    $text = substr($text, 0, $length);
    $text = substr($text, 0, strrpos($text, ' '));
    
    return $text . $append;
}

/**
 * Generate a slug from a string (for URLs)
 * 
 * @param string $text The text to convert to a slug
 * @return string URL-friendly slug
 */
function generateSlug($text) {
    // Replace non-alphanumeric characters with hyphens
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);
    
    // Transliterate non-ASCII characters to ASCII
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    
    // Remove anything that's not a letter, number, or hyphen
    $text = preg_replace('~[^-\w]+~', '', $text);
    
    // Trim hyphens from beginning and end
    $text = trim($text, '-');
    
    // Convert to lowercase
    $text = strtolower($text);
    
    // If nothing left, use a default
    if (empty($text)) {
        return 'n-a';
    }
    
    return $text;
}

/**
 * Create an excerpt from HTML content
 * 
 * @param string $html HTML content
 * @param int $length Maximum length
 * @return string Plain text excerpt
 */
function createExcerpt($html, $length = 160) {
    // Remove HTML tags
    $text = strip_tags($html);
    
    // Trim whitespace
    $text = trim($text);
    
    // Truncate
    return truncateText($text, $length);
}

/**
 * Secure output for HTML attributes
 * 
 * @param string $text Text to secure
 * @return string Secured text
 */
function escAttr($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Get base URL for the site
 * 
 * @return string Base URL with trailing slash
 */
function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domain = $_SERVER['HTTP_HOST'];
    
    // Get the directory path
    $path = dirname($_SERVER['SCRIPT_NAME']);
    if ($path == '/' || $path == '\\') {
        $path = '';
    }
    
    // Add trailing slash if not present
    if ($path && substr($path, -1) !== '/') {
        $path .= '/';
    }
    
    return $protocol . $domain . $path;
}

/**
 * Get array of skill categories
 * 
 * @return array Skill categories
 */
function getSkillCategories() {
    return [
        'design' => 'Design',
        'frontend' => 'Frontend Development',
        'backend' => 'Backend Development',
        'tools' => 'Tools & Software'
    ];
}

/**
 * Validate a reCAPTCHA response
 * 
 * @param string $recaptchaResponse The response from the reCAPTCHA widget
 * @return bool True if valid, false otherwise
 */
function validateRecaptcha($recaptchaResponse) {
    // Replace with your actual reCAPTCHA secret key
    $recaptchaSecret = 'YOUR_RECAPTCHA_SECRET_KEY';
    
    // Skip validation if secret key is not set
    if ($recaptchaSecret === 'YOUR_RECAPTCHA_SECRET_KEY') {
        return true;
    }
    
    // Make the request to Google
    $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptchaData = [
        'secret' => $recaptchaSecret,
        'response' => $recaptchaResponse,
        'remoteip' => $_SERVER['REMOTE_ADDR']
    ];
    
    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($recaptchaData)
        ]
    ];
    
    $context = stream_context_create($options);
    $response = file_get_contents($recaptchaUrl, false, $context);
    $result = json_decode($response, true);
    
    return (isset($result['success']) && $result['success'] === true);
}

/**
 * Check if MongoDB extension is installed and configured correctly
 *
 * @return bool|string True if ok, error message otherwise
 */
function checkMongoDbSetup() {
    // Check if MongoDB extension is loaded
    if (!extension_loaded('mongodb')) {
        return 'MongoDB PHP extension is not installed. Please install it via the "pecl install mongodb" command or add it to your php.ini.';
    }
    
    // Check if the MongoDB PHP library is available
    if (!class_exists('MongoDB\Client')) {
        return 'MongoDB PHP library not found. Please run "composer require mongodb/mongodb" to install it.';
    }
    
    return true;
}

/**
 * Detect if current request is AJAX
 * 
 * @return bool True if AJAX request
 */
function isAjaxRequest() {
    return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
           strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
}