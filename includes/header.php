<?php
// Get the current page filename without the directory
$current_page = basename($_SERVER['PHP_SELF']);

// Function to check if link is active
function isActive($page) {
    global $current_page;
    return ($current_page == $page) ? 'text-gray-900' : 'text-gray-500';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Portfolio'; ?> - Your Name</title>
    <!-- Tailwind CSS CDN for development (use compiled version for production) -->
    <!-- script src="https://cdn.tailwindcss.com"></script -->
    <link rel="stylesheet" href="<?php echo $base_url ?? ''; ?>assets/css/tailwind.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $base_url ?? ''; ?>assets/css/custom.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php if (isset($extra_head)) echo $extra_head; ?>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="<?php echo $base_url ?? ''; ?>index.php">
                            <h1 class="text-2xl font-bold text-indigo-600">Your Name</h1>
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-8">
                        <a href="<?php echo $base_url ?? ''; ?>index.php" class="<?php echo isActive('index.php'); ?> hover:text-indigo-600 px-3 py-2 text-sm font-medium">Home</a>
                        <a href="<?php echo $base_url ?? ''; ?>pages/projects.php" class="<?php echo isActive('projects.php'); ?> hover:text-indigo-600 px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="<?php echo $base_url ?? ''; ?>pages/about.php" class="<?php echo isActive('about.php'); ?> hover:text-indigo-600 px-3 py-2 text-sm font-medium">About</a>
                        <a href="<?php echo $base_url ?? ''; ?>pages/skills.php" class="<?php echo isActive('skills.php'); ?> hover:text-indigo-600 px-3 py-2 text-sm font-medium">Skills</a>
                        <a href="<?php echo $base_url ?? ''; ?>pages/contact.php" class="<?php echo isActive('contact.php'); ?> hover:text-indigo-600 px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="#" class="p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#" class="ml-3 p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="ml-3 p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-dribbble text-xl"></i>
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center sm:hidden">
                    <button type="button" class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Open main menu</span>
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </nav>
        
        <!-- Mobile menu, show/hide based on menu state -->
        <div class="sm:hidden hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="<?php echo $base_url ?? ''; ?>index.php" class="<?php echo $current_page == 'index.php' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-500 hover:bg-gray-50 hover:text-indigo-600'; ?> block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="<?php echo $base_url ?? ''; ?>pages/projects.php" class="<?php echo $current_page == 'projects.php' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-500 hover:bg-gray-50 hover:text-indigo-600'; ?> block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                <a href="<?php echo $base_url ?? ''; ?>pages/about.php" class="<?php echo $current_page == 'about.php' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-500 hover:bg-gray-50 hover:text-indigo-600'; ?> block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="<?php echo $base_url ?? ''; ?>pages/skills.php" class="<?php echo $current_page == 'skills.php' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-500 hover:bg-gray-50 hover:text-indigo-600'; ?> block px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="<?php echo $base_url ?? ''; ?>pages/contact.php" class="<?php echo $current_page == 'contact.php' ? 'bg-indigo-50 text-indigo-600' : 'text-gray-500 hover:bg-gray-50 hover:text-indigo-600'; ?> block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </header>