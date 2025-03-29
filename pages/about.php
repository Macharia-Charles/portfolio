<?php
// Set variables for the header
$page_title = "About Me";
$base_url = "../"; // One level up from pages directory

// Include functions
require_once __DIR__ . '/../includes/functions.php';

// Include header
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- About Page Content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">About Me</h1>
            <p class="max-w-2xl mx-auto text-gray-500">
                Learn more about my background, experience, and the passion that drives my work.
            </p>
        </div>

        <!-- Bio Section with Image -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">
            <!-- Profile Image -->
            <div class="lg:col-span-1">
                <div class="bg-white p-2 shadow-md rounded-lg">
                    <img src="<?php echo $base_url; ?>assets/images/profile.jpg" alt="Your Name" class="w-full h-auto rounded-lg" onerror="this.src='<?php echo $base_url; ?>assets/images/profile-placeholder.jpg'">
                </div>
                
                <div class="mt-8 bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Quick Info</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt w-6 text-indigo-600"></i>
                            <span class="ml-2">Based in City, Country</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-briefcase w-6 text-indigo-600"></i>
                            <span class="ml-2">Freelance Available</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-language w-6 text-indigo-600"></i>
                            <span class="ml-2">English, Spanish</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-graduation-cap w-6 text-indigo-600"></i>
                            <span class="ml-2">BFA in Design, University Name</span>
                        </li>
                    </ul>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Connect</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-indigo-600">
                                <i class="fab fa-github text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-indigo-600">
                                <i class="fab fa-linkedin text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-indigo-600">
                                <i class="fab fa-dribbble text-2xl"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-indigo-600">
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bio Content -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 shadow-md rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Hello, I'm Your Name</h2>
                    <div class="prose max-w-none text-gray-600">
                        <p class="mb-4">
                            I'm a passionate designer and developer with over 7 years of experience creating digital experiences that users love. My work spans across brand identity, web design, and full-stack development, with a focus on creating solutions that are both beautiful and functional.
                        </p>
                        <p class="mb-4">
                            After graduating with a degree in Design from University Name, I worked with several agencies before transitioning to freelance work. This diverse experience has given me a unique perspective on the creative process and the ability to approach problems from multiple angles.
                        </p>
                        <p class="mb-4">
                            My design philosophy centers around the belief that good design should be invisible — it should enhance the user experience without calling attention to itself. I strive to create work that feels intuitive and natural, while still maintaining a distinctive aesthetic that sets my clients apart.
                        </p>
                        <p class="mb-4">
                            When I'm not designing or coding, you can find me exploring the outdoors, experimenting with photography, or learning new techniques to expand my creative toolkit.
                        </p>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">My Specializations</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-palette text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">UI/UX Design</h4>
                                </div>
                                <p class="text-gray-600">Creating intuitive, engaging user experiences and interfaces that drive conversion and user satisfaction.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-code text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Web Development</h4>
                                </div>
                                <p class="text-gray-600">Building responsive, fast-loading websites and applications using modern technologies and best practices.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-mobile-alt text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Responsive Design</h4>
                                </div>
                                <p class="text-gray-600">Ensuring optimal user experience across all devices, from mobile phones to large desktop screens.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-chart-line text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Performance Optimization</h4>
                                </div>
                                <p class="text-gray-600">Improving website speed, usability, and conversion rates through data-driven optimization techniques.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Experience Section -->
                <div class="mt-8 bg-white p-8 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Work Experience</h3>
                    <div class="space-y-8">
                        <div class="border-l-4 border-indigo-500 pl-4 pb-2">
                            <div class="flex flex-wrap justify-between mb-1">
                                <h4 class="font-medium text-gray-900">Senior Designer & Developer</h4>
                                <span class="text-sm text-gray-500">2020 - Present</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Freelance</div>
                            <p class="text-gray-600">Working with clients from various industries to deliver custom design and development solutions. Notable projects include e-commerce platforms, brand identity systems, and interactive web applications.</p>
                        </div>
                        
                        <div class="border-l-4 border-indigo-500 pl-4 pb-2">
                            <div class="flex flex-wrap justify-between mb-1">
                                <h4 class="font-medium text-gray-900">UI/UX Designer</h4>
                                <span class="text-sm text-gray-500">2017 - 2020</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Design Agency, Inc.</div>
                            <p class="text-gray-600">Led the user experience and interface design for the agency's key accounts. Collaborated with developers to implement designs and ensure consistent quality across deliverables.</p>
                        </div>
                        
                        <div class="border-l-4 border-indigo-500 pl-4 pb-2">
                            <div class="flex flex-wrap justify-between mb-1">
                                <h4 class="font-medium text-gray-900">Junior Web Designer</h4>
                                <span class="text-sm text-gray-500">2015 - 2017</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Web Solutions Company</div>
                            <p class="text-gray-600">Created website layouts, graphics, and visual elements. Assisted with front-end development and CMS implementation for client websites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Testimonials Section -->
        <div class="mb-16">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Client Testimonials</h2>
                <p class="max-w-2xl mx-auto text-gray-500">
                    What my clients are saying about working with me.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mb-6">
                        "Working with [Your Name] was a pleasure from start to finish. They took the time to understand our vision and transformed it into a website that perfectly represents our brand. The attention to detail and technical expertise were impressive."
                    </blockquote>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Jane Smith</h4>
                            <p class="text-sm text-gray-500">CEO, Company Name</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mb-6">
                        "I've worked with many designers and developers over the years, but [Your Name] stands out for their creativity, technical skill, and reliability. They delivered our project ahead of schedule and exceeded our expectations in every way."
                    </blockquote>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">John Davis</h4>
                            <p class="text-sm text-gray-500">Marketing Director, Company Name</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <blockquote class="text-gray-600 mb-6">
                        "The redesign of our e-commerce platform by [Your Name] resulted in a 40% increase in conversions and significantly improved user engagement. Their understanding of both design principles and user psychology made all the difference."
                    </blockquote>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gray-300 flex-shrink-0"></div>
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">E-commerce Manager, Company Name</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="bg-indigo-600 rounded-lg p-8 text-center">
            <h2 class="text-2xl font-bold text-white mb-4">Ready to Start Your Project?</h2>
            <p class="max-w-2xl mx-auto text-indigo-100 mb-6">
                I'm currently available for freelance work. Let's discuss your project and create something amazing together.
            </p>
            <a href="<?php echo $base_url; ?>pages/contact.php" class="inline-block bg-white text-indigo-600 hover:bg-indigo-50 px-6 py-3 rounded-md font-medium transition-colors duration-200">
                Get in Touch
            </a>
        </div>
    </div>

<?php
// Include footer
require_once __DIR__ . '/../includes/footer.php';
?>