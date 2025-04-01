<?php
// Set variables for the header
$page_title = "Skills";
$base_url = "../"; // One level up from pages directory

// Include database and functions
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../includes/functions.php';

// Get skill categories
$skillCategories = getSkillCategories();

// Connect to database and get skills
$db = new Database();
$skillsCollection = $db->getCollection('skills');

// Get skills grouped by category
$skills = [];
foreach ($skillCategories as $category => $name) {
    $categorySkills = $skillsCollection->find(
        ['category' => $category],
        ['sort' => ['order' => 1]]
    )->toArray();
    $skills[$category] = $categorySkills;
}

// Get featured skills for overview section
$programmingSkills = $skillsCollection->find(
    ['category' => 'programming', 'featured' => true],
    ['sort' => ['proficiency' => -1], 'limit' => 5]
)->toArray();

$technicalSkills = $skillsCollection->find(
    ['category' => 'technical', 'featured' => true],
    ['sort' => ['proficiency' => -1], 'limit' => 5]
)->toArray();

// Include header
require_once __DIR__ . '/../includes/header.php';
?>

    <!-- Skills Page Content -->
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl font-bold text-gray-900 mb-4">My Skills</h1>
            <p class="max-w-2xl mx-auto text-gray-500">
                A comprehensive overview of my technical expertise, programming capabilities, and professional toolset.
            </p>
        </div>

        <!-- Skills Overview Section -->
        <div class="bg-white p-8 shadow-md rounded-lg mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Skills Overview</h2>
            <p class="text-gray-600 mb-8">
                With a degree in Computer Technology and three years of experience, I've developed a diverse skill set spanning programming languages, frameworks, and technical tools. I combine technical expertise with strong problem-solving abilities to deliver effective solutions for various technical challenges.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column - Programming Skills -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Programming Skills</h3>
                    <ul class="space-y-4">
                        <?php foreach ($programmingSkills as $skill): ?>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700"><?php echo htmlspecialchars($skill['name']); ?></span>
                                <span class="text-indigo-600"><?php echo $skill['proficiency']; ?>%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: <?php echo $skill['proficiency']; ?>%"></div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Right Column - Technical Skills -->
                <div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Technical Skills</h3>
                    <ul class="space-y-4">
                        <?php foreach ($technicalSkills as $skill): ?>
                        <li class="flex flex-col">
                            <div class="flex justify-between mb-1">
                                <span class="font-medium text-gray-700"><?php echo htmlspecialchars($skill['name']); ?></span>
                                <span class="text-indigo-600"><?php echo $skill['proficiency']; ?>%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-indigo-600 h-2.5 rounded-full" style="width: <?php echo $skill['proficiency']; ?>%"></div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Detailed Skills Sections -->
        <?php foreach ($skillCategories as $key => $name): ?>
        <div class="mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6"><?php echo htmlspecialchars($name); ?></h2>
            
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <?php if (isset($skills[$key]) && !empty($skills[$key])): ?>
                    <?php foreach ($skills[$key] as $skill): ?>
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300 text-center">
                        <i class="<?php echo htmlspecialchars($skill['icon']); ?> text-3xl text-indigo-600 mb-3"></i>
                        <h3 class="font-medium"><?php echo htmlspecialchars($skill['name']); ?></h3>
                    </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="col-span-full text-center py-6">
                        <p class="text-gray-500">No skills found in this category.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
        
        <!-- Education Section -->
        <div class="bg-white p-8 shadow-md rounded-lg mb-12">
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
                        <p class="text-gray-600">Graduated with Second Class Honors. Specialized in software development, networks, and computer systems.</p>
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
                    <p class="text-gray-600">Expanding my frontend development capabilities with React.js for building modern, interactive web applications.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 65%"></div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fas fa-cloud text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Cloud Computing</h3>
                    </div>
                    <p class="text-gray-600">Learning cloud platforms and services to build scalable and resilient applications and infrastructure.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 45%"></div>
                    </div>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="h-10 w-10 rounded-full bg-indigo-100 flex items-center justify-center mr-4">
                            <i class="fas fa-robot text-indigo-600"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Machine Learning</h3>
                    </div>
                    <p class="text-gray-600">Exploring machine learning fundamentals to add intelligent features to applications and automate complex processes.</p>
                    <div class="mt-4 h-2 bg-gray-200 rounded-full">
                        <div class="bg-indigo-600 h-2 rounded-full" style="width: 35%"></div>
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