<?php
// Set variables for the header
$page_title = "Contact";
$base_url = "../"; // One level up from pages directory

// Include database, models, and functions
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Contact.php';
require_once __DIR__ . '/../includes/functions.php';

// Initialize contact model
$contactModel = new Contact();

// Handle form submission
$success = false;
$error = false;
$errorMessage = '';
$name = $email = $subject = $message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($message)) {
        $error = true;
        $errorMessage = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $errorMessage = 'Please enter a valid email address.';
    } else {
        // Process the form data
        $contactData = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            'ip_address' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
        ];
        
        try {
            $result = $contactModel->createContact($contactData);
            if ($result->getInsertedCount()) {
                $success = true;
                // Clear form data after successful submission
                $name = $email = $subject = $message = '';
            } else {
                $error = true;
                $errorMessage = 'Failed to send your message. Please try again later.';
            }
        } catch (Exception $e) {
            $error = true;
            $errorMessage = 'An error occurred: ' . $e->getMessage();
        }
    }
}

// Include header
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Page Content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">Get In Touch</h1>
            <p class="max-w-2xl mx-auto text-gray-500">
                Have a project in mind or want to discuss a collaboration? I'd love to hear from you. Fill out the form below or reach out through my social media channels.
            </p>
        </div>

        <!-- Success/Error Messages -->
        <?php if ($success): ?>
            <div class="mb-8 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-md" role="alert">
                <p class="font-medium">Thank you for your message!</p>
                <p>I've received your contact request and will get back to you as soon as possible.</p>
            </div>
        <?php endif; ?>

        <?php if ($error): ?>
            <div class="mb-8 bg-red-100 border-l-4 border-red-500 text-red-700 p-4 rounded-md" role="alert">
                <p class="font-medium">There was a problem with your submission</p>
                <p><?php echo htmlspecialchars($errorMessage); ?></p>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Send Me a Message</h2>
                    
                    <form id="contact-form" method="POST" action="" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name *</label>
                            <input type="text" id="name" name="name" value="<?php echo escAttr($name); ?>" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <p id="name-error" class="mt-1 text-sm text-red-600 error-message"></p>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                            <input type="email" id="email" name="email" value="<?php echo escAttr($email); ?>" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <p id="email-error" class="mt-1 text-sm text-red-600 error-message"></p>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" value="<?php echo escAttr($subject); ?>" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message *</label>
                            <textarea id="message" name="message" rows="5" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500"><?php echo htmlspecialchars($message); ?></textarea>
                            <p id="message-error" class="mt-1 text-sm text-red-600 error-message"></p>
                        </div>
                        
                        <div>
                            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-4 rounded-md font-medium transition-colors duration-200">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div>
                <div class="bg-white p-8 rounded-lg shadow-md mb-8">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Contact Information</h2>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-indigo-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Address</h3>
                                <p class="mt-1 text-gray-600">Your Address, City, Country</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                <i class="fas fa-envelope text-indigo-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                <p class="mt-1 text-gray-600">your.email@example.com</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center">
                                <i class="fas fa-phone text-indigo-600"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                                <p class="mt-1 text-gray-600">+1 234 567 890</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media Links -->
                <div class="bg-white p-8 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold text-gray-900 mb-6">Connect With Me</h2>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="flex items-center p-4 rounded-md border border-gray-200 hover:border-indigo-500 hover:bg-indigo-50 transition-colors duration-200">
                            <i class="fab fa-github text-2xl text-gray-700"></i>
                            <span class="ml-3 font-medium">GitHub</span>
                        </a>
                        
                        <a href="#" class="flex items-center p-4 rounded-md border border-gray-200 hover:border-indigo-500 hover:bg-indigo-50 transition-colors duration-200">
                            <i class="fab fa-linkedin text-2xl text-blue-700"></i>
                            <span class="ml-3 font-medium">LinkedIn</span>
                        </a>
                        
                        <a href="#" class="flex items-center p-4 rounded-md border border-gray-200 hover:border-indigo-500 hover:bg-indigo-50 transition-colors duration-200">
                            <i class="fab fa-dribbble text-2xl text-pink-500"></i>
                            <span class="ml-3 font-medium">Dribbble</span>
                        </a>
                        
                        <a href="#" class="flex items-center p-4 rounded-md border border-gray-200 hover:border-indigo-500 hover:bg-indigo-50 transition-colors duration-200">
                            <i class="fab fa-twitter text-2xl text-blue-400"></i>
                            <span class="ml-3 font-medium">Twitter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
// Include footer
require_once __DIR__ . '/../includes/footer.php';
?>