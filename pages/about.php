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
                Learn more about my background, experience, and the passion that drives my work in technology.
            </p>
        </div>

        <!-- Bio Section with Image -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">
            <!-- Profile Image -->
            <div class="lg:col-span-1">
                <div class="bg-white p-2 shadow-md rounded-lg">
                    <img src="<?php echo $base_url; ?>assets/images/profile.jpg" alt="Charles Macharia" class="w-full h-auto rounded-lg" onerror="this.src='<?php echo $base_url; ?>assets/images/profile.jpg'">
                </div>
                
                <div class="mt-8 bg-white p-6 shadow-md rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Quick Info</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-map-marker-alt w-6 text-indigo-600"></i>
                            <span class="ml-2">Kinamba, Kenya</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-briefcase w-6 text-indigo-600"></i>
                            <span class="ml-2">Freelance Available</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-language w-6 text-indigo-600"></i>
                            <span class="ml-2">English, Swahili</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-graduation-cap w-6 text-indigo-600"></i>
                            <span class="ml-2">BSc Computer Technology, Maseno University</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-envelope w-6 text-indigo-600"></i>
                            <span class="ml-2">machariacharleskariuki@gmail.com</span>
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-phone w-6 text-indigo-600"></i>
                            <span class="ml-2">+254726288871</span>
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
                                <i class="fab fa-twitter text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bio Content -->
            <div class="lg:col-span-2">
                <div class="bg-white p-8 shadow-md rounded-lg">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Hello, I'm Charles Macharia</h2>
                    <div class="prose max-w-none text-gray-600">
                        <p class="mb-4">
                            I'm a highly motivated ICT Technician with a degree in Computer Technology and three years of experience in software development, network management, and technical support. My journey in technology has equipped me with diverse skills across multiple programming languages and platforms.
                        </p>
                        <p class="mb-4">
                            After graduating with Second Class Honors from Maseno University, I've worked with clients from different backgrounds as a freelance developer and ICT consultant. This diverse experience has given me a unique perspective on solving technical problems and creating efficient solutions.
                        </p>
                        <p class="mb-4">
                            My approach to technology centers around the belief that good solutions should solve real problems while being user-friendly and efficient. I'm particularly interested in automation, security systems, and developing applications that improve people's lives.
                        </p>
                        <p class="mb-4">
                            When I'm not coding or working on projects, I'm constantly exploring new technologies, learning new skills, and following the day-to-day evolution of the tech world. I believe in continuous improvement and staying current with industry trends.
                        </p>
                    </div>
                    
                    <!-- Specializations -->
                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">My Specializations</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-mobile-alt text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Mobile App Development</h4>
                                </div>
                                <p class="text-gray-600">Building mobile applications using React Native and Flutter for Android and iOS platforms with intuitive user interfaces.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-code text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Software Development</h4>
                                </div>
                                <p class="text-gray-600">Creating custom software solutions using Python, C++, and other programming languages to solve specific business problems.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-network-wired text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Network Management</h4>
                                </div>
                                <p class="text-gray-600">Developing robust networks that facilitate efficient file sharing and reduce downtime in organizational settings.</p>
                            </div>
                            <div class="p-4 border border-gray-200 rounded-lg">
                                <div class="flex items-center mb-3">
                                    <i class="fas fa-robot text-xl text-indigo-600 mr-3"></i>
                                    <h4 class="font-medium text-gray-900">Automation Systems</h4>
                                </div>
                                <p class="text-gray-600">Designing automation solutions that increase efficiency and productivity across various business processes.</p>
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
                                <h4 class="font-medium text-gray-900">Freelance Developer & ICT Consultant</h4>
                                <span class="text-sm text-gray-500">07/2022 - Present</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Self-employed</div>
                            <p class="text-gray-600">Working with clients of different nations, races, and ethnic groups, providing ICT support and developing software and websites for different companies. Guiding students to understand their course material and reviewing code.</p>
                        </div>
                        
                        <div class="border-l-4 border-indigo-500 pl-4 pb-2">
                            <div class="flex flex-wrap justify-between mb-1">
                                <h4 class="font-medium text-gray-900">IT Attachee</h4>
                                <span class="text-sm text-gray-500">11/2021 - 12/2021</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Department of Land, Housing, and Infrastructure - Laikipia CG</div>
                            <p class="text-gray-600">Wrote an automation program to automate the digitization of maps, increasing efficiency by 25%. Maintained server uptime to ensure 90%+ work availability.</p>
                        </div>
                        
                        <div class="border-l-4 border-indigo-500 pl-4 pb-2">
                            <div class="flex flex-wrap justify-between mb-1">
                                <h4 class="font-medium text-gray-900">Volunteer Attachee</h4>
                                <span class="text-sm text-gray-500">04/2020 - 09/2020</span>
                            </div>
                            <div class="text-indigo-600 mb-2">Sawanga Community Radio</div>
                            <p class="text-gray-600">Developed a robust network for file sharing within the station, reducing downtime by 65%. Installed software that increased working efficiency by 50% and trained journalists to use new software.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Projects Showcase Section -->
        <div class="mb-16">
            <div class="text-center mb-10">
                <h2 class="text-2xl font-bold text-gray-900 mb-3">Featured Projects</h2>
                <p class="max-w-2xl mx-auto text-gray-500">
                    A glimpse of some of my key technical achievements.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="h-48 bg-indigo-100 rounded-md flex items-center justify-center mb-4">
                        <i class="fas fa-mobile-alt text-5xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">CareGivers App</h3>
                    <p class="text-gray-600 mb-4">A React Native platform for caregivers to share insights and interact with healthcare professionals.</p>
                    <a href="<?php echo $base_url; ?>pages/projects.php" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center">
                        View Details <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="h-48 bg-indigo-100 rounded-md flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-5xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Intelligent Security System</h3>
                    <p class="text-gray-600 mb-4">A Python-based facial recognition system that detects unusual activity and sends alerts via email and SMS.</p>
                    <a href="<?php echo $base_url; ?>pages/projects.php" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center">
                        View Details <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
                
                <div class="bg-white p-6 shadow-md rounded-lg">
                    <div class="h-48 bg-indigo-100 rounded-md flex items-center justify-center mb-4">
                        <i class="fas fa-traffic-light text-5xl text-indigo-600"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Traffic Control System</h3>
                    <p class="text-gray-600 mb-4">A C++ and Python application designed to reduce time wastage and accidents at roundabouts.</p>
                    <a href="<?php echo $base_url; ?>pages/projects.php" class="text-indigo-600 hover:text-indigo-800 font-medium inline-flex items-center">
                        View Details <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Education Section -->
        <div class="bg-white p-8 shadow-md rounded-lg mb-16">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Education</h2>
            
            <div class="space-y-6">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <div class="h-16 w-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Bachelor of Science in Computer Technology</h3>
                        <p class="text-indigo-600 mb-2">Maseno University, 2022</p>
                        <p class="text-gray-600">Graduated with Second Class Honors. Focused on software development, network management, and information systems.</p>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <div class="h-16 w-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-school text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Kenya Certificate of Secondary Education</h3>
                        <p class="text-indigo-600 mb-2">Mary Mother of Grace Secondary School, 2018</p>
                        <p class="text-gray-600">Achieved a B grade in the national examinations.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="bg-indigo-600 rounded-lg p-8 text-center">
            <h2 class="text-2xl font-bold text-white mb-4">Ready to Start Your Project?</h2>
            <p class="max-w-2xl mx-auto text-indigo-100 mb-6">
                I'm currently available for freelance work. Let's discuss your technical needs and create innovative solutions together.
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