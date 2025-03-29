<?php
// Set variables for the header
$page_title = "Skills";
$base_url = "../"; // One level up from pages directory

// Include functions
require_once __DIR__ . '/../includes/functions.php';

// Get skill categories
$skillCategories = getSkillCategories();

// Include header
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Skills Page Content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">My Skills</h1>
            <p class="max-w-2xl mx-auto text-gray-500">
                A comprehensive overview of my technical expertise, design capabilities, and professional toolset.
            </p>
        </div>

        <!-- Skills Overview Section -->
        <div class="bg-white p-8 shadow-md rounded-lg mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Skills Overview</h2>
            <p class="text-gray-600 mb-8">
                With a background in both design and development, I bring a holistic approach to every project. My technical skills span front-end and back-end development, while my design expertise ensures that the end product is not only functional but also visually appealing and user-friendly.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Design Skills</h3>
                    <ul class="space-y-4">
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">UI/UX Design</span>
                                <span class="text-indigo-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Responsive Design</span>
                                <span class="text-indigo-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Graphic Design</span>
                                <span class="text-indigo-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Brand Identity</span>
                                <span class="text-indigo-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Wireframing & Prototyping</span>
                                <span class="text-indigo-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <!-- Right Column -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Development Skills</h3>
                    <ul class="space-y-4">
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">HTML/CSS</span>
                                <span class="text-indigo-600">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">JavaScript</span>
                                <span class="text-indigo-600">85%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 85%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">PHP</span>
                                <span class="text-indigo-600">80%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 80%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">MongoDB</span>
                                <span class="text-indigo-600">75%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 75%"></div>
                            </div>
                        </li>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700">Responsive Frameworks</span>
                                <span class="text-indigo-600">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Detailed Skills Sections -->
        <?php foreach ($skillCategories as $key => $name): ?>
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo htmlspecialchars($name); ?></h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <?php if ($key === 'design'): ?>
                    <!-- Design Skills -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-pencil-ruler text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">UI/UX Design</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-mobile-alt text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">Responsive Design</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-object-group text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">Wireframing</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-layer-group text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">Prototyping</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-paint-brush text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">Graphic Design</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-swatchbook text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">Brand Identity</h3>
                    </div>
                
                <?php elseif ($key === 'frontend'): ?>
                    <!-- Frontend Skills -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-html5 text-3xl text-orange-500 mb-3"></i>
                        <h3 class="font-medium">HTML5</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-css3-alt text-3xl text-blue-500 mb-3"></i>
                        <h3 class="font-medium">CSS3</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-js text-3xl text-yellow-500 mb-3"></i>
                        <h3 class="font-medium">JavaScript</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-bootstrap text-3xl text-purple-500 mb-3"></i>
                        <h3 class="font-medium">Bootstrap</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-react text-3xl text-blue-400 mb-3"></i>
                        <h3 class="font-medium">Tailwind CSS</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-sass text-3xl text-pink-500 mb-3"></i>
                        <h3 class="font-medium">SASS/SCSS</h3>
                    </div>
                
                <?php elseif ($key === 'backend'): ?>
                    <!-- Backend Skills -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-php text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium">PHP</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-database text-3xl text-green-500 mb-3"></i>
                        <h3 class="font-medium">MongoDB</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-server text-3xl text-gray-700 mb-3"></i>
                        <h3 class="font-medium">RESTful APIs</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-cogs text-3xl text-red-500 mb-3"></i>
                        <h3 class="font-medium">Node.js</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-npm text-3xl text-red-600 mb-3"></i>
                        <h3 class="font-medium">npm</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-exchange-alt text-3xl text-blue-600 mb-3"></i>
                        <h3 class="font-medium">AJAX</h3>
                    </div>
                
                <?php elseif ($key === 'tools'): ?>
                    <!-- Tools & Software -->
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-figma text-3xl text-purple-500 mb-3"></i>
                        <h3 class="font-medium">Figma</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-adobe text-3xl text-red-500 mb-3"></i>
                        <h3 class="font-medium">Adobe XD</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-github text-3xl text-gray-800 mb-3"></i>
                        <h3 class="font-medium">Git/GitHub</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-code-branch text-3xl text-green-600 mb-3"></i>
                        <h3 class="font-medium">VS Code</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fab fa-trello text-3xl text-blue-500 mb-3"></i>
                        <h3 class="font-medium">Trello</h3>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="fas fa-photo-video text-3xl text-orange-500 mb-3"></i>
                        <h3 class="font-medium">Photoshop</h3>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        
        <!-- Certifications Section -->
        <div class="bg-white p-8 shadow-md rounded-lg mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Certifications & Education</h2>
            
            <div class="space-y-6">
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <div class="h-16 w-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-certificate text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Certified UX Professional</h3>
                        <p class="text-indigo-600 mb-2">Certification Institute, 2022</p>
                        <p class="text-gray-600">Comprehensive certification in user experience design principles, methodologies, and best practices.</p>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <div class="h-16 w-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-code text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Full-Stack Web Developer</h3>
                        <p class="text-indigo-600 mb-2">Development Academy, 2020</p>
                        <p class="text-gray-600">Intensive program covering front-end and back-end technologies, database management, and modern development practices.</p>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row md:items-center">
                    <div class="flex-shrink-0 mb-4 md:mb-0 md:mr-6">
                        <div class="h-16 w-16 bg-indigo-100 rounded-lg flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-2xl text-indigo-600"></i>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">Bachelor of Fine Arts in Design</h3>
                        <p class="text-indigo-600 mb-2">University Name, 2015</p>
                        <p class="text-gray-600">Focused on visual communication, digital design, and interactive media. Graduated with honors.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Current Learning Section -->
        <div class="bg-indigo-50 p-8 rounded-lg mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Currently Learning</h2>
            <p class="text-gray-600 mb-6">
                I believe in continuous improvement and staying current with industry trends. Here's what I'm currently focused on learning:
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fab fa-react text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">React.js</h3>
                    </div>
                    <p class="text-gray-600">Expanding my front-end skills with React.js to build more interactive and dynamic user interfaces.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fas fa-mobile-alt text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Mobile App Design</h3>
                    </div>
                    <p class="text-gray-600">Focusing on iOS and Android design guidelines to create seamless mobile experiences.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fas fa-universal-access text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Accessibility</h3>
                    </div>
                    <p class="text-gray-600">Deepening my knowledge of web accessibility standards to create more inclusive digital experiences.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 70%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- CTA Section -->
        <div class="text-center py-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">Let's Work Together</h2>
            <p class="max-w-2xl mx-auto text-gray-500 mb-6">
                Interested in seeing how these skills can benefit your project? Get in touch to discuss how we can collaborate.
            </p>
            <a href="<?php echo $base_url; ?>pages/contact.php" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md font-medium transition-colors duration-200">
                Contact Me <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>

<?php
// Include footer
require_once __DIR__ . '/../includes/footer.php';
?>