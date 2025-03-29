<?php
// Set variables for the header
$page_title = "Home";
$base_url = ""; // Root level, so empty

// Include database, models, and functions
require_once __DIR__ . '/config/database.php';
require_once __DIR__ . '/models/Project.php';
require_once __DIR__ . '/includes/functions.php';

// Initialize project model
$projectModel = new Project();

// Get featured projects
$featuredProjects = $projectModel->getFeaturedProjects(3);

// Include header
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-20 px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center min-h-[60vh]">
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-center mb-6">
                Creative Designer & <span class="text-indigo-400">Developer</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl text-center mb-10">
                I create stunning visual experiences and functional interfaces that help brands stand out in the digital landscape.
            </p>
            <div class="flex space-x-4">
                <a href="pages/projects.php" class="bg-indigo-600 hover:bg-indigo-700 px-6 py-3 rounded-md text-white font-medium transition-colors duration-200">
                    View My Work
                </a>
                <a href="pages/contact.php" class="bg-transparent border border-white hover:bg-white hover:text-gray-900 px-6 py-3 rounded-md font-medium transition-colors duration-200">
                    Get In Touch
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 right-0 h-20 bg-gradient-to-t from-gray-50 to-transparent"></div>
    </section>

    <!-- Featured Projects Section -->
    <section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Projects</h2>
            <p class="max-w-2xl mx-auto text-gray-500">
                A selection of my recent work, showcasing my skills in design, development, and creative problem-solving.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php if (empty($featuredProjects)): ?>
                <div class="col-span-full text-center py-8">
                    <p class="text-gray-500">Featured projects will appear here. Add projects to your MongoDB collection to display them.</p>
                </div>
            <?php else: ?>
                <?php foreach ($featuredProjects as $project): ?>
                    <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                        <img src="<?php echo escAttr($project['image_url'] ?? ''); ?>" alt="<?php echo escAttr($project['title'] ?? ''); ?>" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($project['title'] ?? ''); ?></h3>
                            <div class="flex flex-wrap gap-2 mb-3">
                                <?php if (isset($project['technologies']) && is_array($project['technologies'])): ?>
                                    <?php foreach ($project['technologies'] as $tech): ?>
                                        <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded"><?php echo htmlspecialchars($tech); ?></span>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($project['summary'] ?? ''); ?></p>
                            <a href="pages/projects.php?id=<?php echo $project['_id']; ?>" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                View Project <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="text-center mt-10">
            <a href="pages/projects.php" class="inline-flex items-center px-6 py-3 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded-md font-medium">
                View All Projects <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </section>

    <!-- Skills Section Preview -->
    <section class="bg-indigo-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">My Skills</h2>
                <p class="max-w-2xl mx-auto text-gray-500">
                    A snapshot of my technical and creative capabilities.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4 text-center">
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fab fa-html5 text-3xl text-orange-500 mb-3"></i>
                    <h3 class="font-medium">HTML5</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fab fa-css3-alt text-3xl text-blue-500 mb-3"></i>
                    <h3 class="font-medium">CSS3</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fab fa-php text-3xl text-indigo-600 mb-3"></i>
                    <h3 class="font-medium">PHP</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fab fa-js text-3xl text-yellow-500 mb-3"></i>
                    <h3 class="font-medium">JavaScript</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fab fa-figma text-3xl text-purple-500 mb-3"></i>
                    <h3 class="font-medium">Figma</h3>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow transition-shadow duration-300">
                    <i class="fas fa-database text-3xl text-green-500 mb-3"></i>
                    <h3 class="font-medium">MongoDB</h3>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="pages/skills.php" class="inline-flex items-center px-6 py-3 border border-indigo-600 text-indigo-600 hover:bg-indigo-50 rounded-md font-medium">
                    View All Skills <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Let's Work Together</h2>
        <p class="max-w-2xl mx-auto text-gray-500 mb-8">
            Have a project in mind? Contact me today to discuss how we can collaborate to bring your vision to life.
        </p>
        <a href="pages/contact.php" class="inline-flex items-center px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-md font-medium transition-colors duration-200">
            Get In Touch
        </a>
    </section>

<?php
// Include footer
require_once __DIR__ . '/includes/footer.php';
?>