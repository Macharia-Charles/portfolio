<?php
// Include database and models
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../models/Project.php';

// Initialize project model
$projectModel = new Project();

// Check if viewing a single project
if (isset($_GET['id'])) {
    $projectId = $_GET['id'];
    $project = $projectModel->getProjectById($projectId);
    $singleProjectView = true;
} else {
    // Get all projects and categories for filtering
    $projects = $projectModel->getAllProjects();
    $categories = $projectModel->getCategories();
    $singleProjectView = false;
    
    // Check if filtering by category
    $filterCategory = isset($_GET['category']) ? $_GET['category'] : null;
    if ($filterCategory) {
        $projects = $projectModel->getProjectsByCategory($filterCategory);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $singleProjectView ? htmlspecialchars($project['title']) . ' - ' : ''; ?>Projects - Charles Macharia</title>
    <!-- Tailwind CSS CDN for development (use compiled version for production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- link rel="stylesheet" href="<?php echo $base_url ?? ''; ?>assets/css/tailwind.css" -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/custom.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="../index.php">
                            <h1 class="text-2xl font-bold text-indigo-600">Charles Macharia</h1>
                        </a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-8">
                        <a href="../index.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Home</a>
                        <a href="projects.php" class="text-gray-900 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Projects</a>
                        <a href="about.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium">About</a>
                        <a href="skills.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Skills</a>
                        <a href="contact.php" class="text-gray-500 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Contact</a>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    <a href="https://github.com/Macharia-Charles" class="p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/kariuki-charles-64155b181/" class="ml-3 p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-linkedin text-xl"></i>
                    </a>
                    <a href="https://x.com/kariuki_mash" class="ml-3 p-1 rounded-full text-gray-400 hover:text-indigo-600">
                        <i class="fab fa-twitter text-xl"></i>
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
                <a href="../index.php" class="text-gray-500 hover:bg-gray-50 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="projects.php" class="bg-indigo-50 text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Projects</a>
                <a href="about.php" class="text-gray-500 hover:bg-gray-50 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="skills.php" class="text-gray-500 hover:bg-gray-50 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Skills</a>
                <a href="contact.php" class="text-gray-500 hover:bg-gray-50 hover:text-indigo-600 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </header>

    <?php if ($singleProjectView): ?>
        <!-- Single Project View -->
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <div class="mb-8">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="../index.php" class="text-gray-400 hover:text-gray-500">Home</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <a href="projects.php" class="ml-4 text-gray-400 hover:text-gray-500">Projects</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span class="ml-4 text-gray-500" aria-current="page"><?php echo htmlspecialchars($project['title']); ?></span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <!-- Project Hero Image -->
                <div class="w-full h-96 bg-gray-300 relative">
                    <?php if (isset($project['image_url']) && $project['image_url']): ?>
                        <img src="<?php echo htmlspecialchars($project['image_url']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="flex items-center justify-center h-full bg-gray-200">
                            <span class="text-gray-400">No image available</span>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Project Content -->
                <div class="p-8">
                    <div class="flex flex-wrap items-center justify-between mb-6">
                        <h1 class="text-3xl font-bold text-gray-900"><?php echo htmlspecialchars($project['title']); ?></h1>
                        
                        <?php if (isset($project['project_url']) && $project['project_url']): ?>
                        <a href="<?php echo htmlspecialchars($project['project_url']); ?>" target="_blank" class="mt-4 sm:mt-0 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md flex items-center">
                            <span>View Live</span>
                            <i class="fas fa-external-link-alt ml-2"></i>
                        </a>
                        <?php endif; ?>
                    </div>

                    <!-- Technologies used -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Technologies</h3>
                        <div class="flex flex-wrap gap-2">
                            <?php if (isset($project['technologies']) && is_array($project['technologies'])): ?>
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm"><?php echo htmlspecialchars($tech); ?></span>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Project Description -->
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Project Overview</h3>
                        <?php if (isset($project['description'])): ?>
                            <div class="prose max-w-none text-gray-600">
                                <?php 
                                // Allow for HTML in description, but ensure it's sanitized
                                echo nl2br(htmlspecialchars($project['description'])); 
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Project Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                        <!-- Client/Duration Column -->
                        <div>
                            <?php if (isset($project['client']) && $project['client']): ?>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Client</h3>
                                <p class="text-gray-600"><?php echo htmlspecialchars($project['client']); ?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($project['duration']) && $project['duration']): ?>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Duration</h3>
                                <p class="text-gray-600"><?php echo htmlspecialchars($project['duration']); ?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($project['date'])): ?>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Completion Date</h3>
                                <p class="text-gray-600">
                                    <?php 
                                    if ($project['date'] instanceof MongoDB\BSON\UTCDateTime) {
                                        echo $project['date']->toDateTime()->format('F Y'); 
                                    } else {
                                        echo htmlspecialchars($project['date']);
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php endif; ?>
                        </div>

                        <!-- Role/Responsibilities Column -->
                        <div>
                            <?php if (isset($project['role']) && $project['role']): ?>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">My Role</h3>
                                <p class="text-gray-600"><?php echo htmlspecialchars($project['role']); ?></p>
                            </div>
                            <?php endif; ?>

                            <?php if (isset($project['responsibilities']) && is_array($project['responsibilities'])): ?>
                            <div class="mb-4">
                                <h3 class="text-lg font-semibold text-gray-700 mb-2">Responsibilities</h3>
                                <ul class="list-disc pl-5 text-gray-600">
                                    <?php foreach ($project['responsibilities'] as $resp): ?>
                                        <li class="mb-1"><?php echo htmlspecialchars($resp); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Project Gallery -->
                    <?php if (isset($project['gallery']) && is_array($project['gallery']) && count($project['gallery']) > 0): ?>
                    <div class="mb-8">
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Project Gallery</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <?php foreach ($project['gallery'] as $image): ?>
                                <div class="rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Project gallery image" class="w-full h-48 object-cover">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Navigation between projects -->
                    <div class="mt-12 pt-6 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row justify-between">
                            <a href="projects.php" class="flex items-center text-indigo-600 hover:text-indigo-800 mb-4 sm:mb-0">
                                <i class="fas fa-arrow-left mr-2"></i>
                                <span>Back to all projects</span>
                            </a>
                            
                            <!-- Note: In a real implementation, you would add previous/next project navigation here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <!-- Projects List View -->
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">My Projects</h1>
                <p class="max-w-2xl mx-auto text-gray-500">
                    Browse through my portfolio of design and development work, showcasing a range of skills and creative solutions.
                </p>
            </div>

            <!-- Filter Buttons -->
            <?php if (!empty($categories)): ?>
            <div class="flex flex-wrap justify-center gap-2 mb-8">
                <button data-filter="all" class="filter-button px-4 py-2 rounded-md bg-indigo-600 text-white hover:bg-indigo-700 transition-colors duration-200">
                    All
                </button>
                <?php foreach ($categories as $category): ?>
                    <button data-filter="<?php echo htmlspecialchars($category); ?>" class="filter-button px-4 py-2 rounded-md bg-gray-100 text-gray-800 hover:bg-gray-200 transition-colors duration-200">
                        <?php echo htmlspecialchars($category); ?>
                    </button>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if (empty($projects)): ?>
                    <div class="col-span-full text-center py-8">
                        <p class="text-gray-500">No projects found. Add projects to your MongoDB collection to display them.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($projects as $project): ?>
                        <div class="project-item bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-all duration-300" data-category="<?php echo isset($project['category']) ? htmlspecialchars($project['category']) : 'all'; ?>">
                            <div class="h-48 bg-gray-200 relative overflow-hidden">
                                <?php if (isset($project['image_url']) && $project['image_url']): ?>
                                    <img src="<?php echo htmlspecialchars($project['image_url']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                <?php else: ?>
                                    <div class="flex items-center justify-center h-full">
                                        <span class="text-gray-400">No image available</span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-900 mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <?php if (isset($project['technologies']) && is_array($project['technologies'])): ?>
                                        <?php foreach (array_slice($project['technologies'], 0, 3) as $tech): ?>
                                            <span class="bg-indigo-100 text-indigo-800 text-xs px-2 py-1 rounded"><?php echo htmlspecialchars($tech); ?></span>
                                        <?php endforeach; ?>
                                        <?php if (count($project['technologies']) > 3): ?>
                                            <span class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded">+<?php echo count($project['technologies']) - 3; ?> more</span>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                                <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($project['summary'] ?? substr($project['description'] ?? '', 0, 100) . '...'); ?></p>
                                <div class="flex items-center justify-between">
                                    <a href="projects.php?id=<?php echo $project['_id']; ?>" class="text-indigo-600 hover:text-indigo-800 font-medium">
                                        View Project <i class="fas fa-arrow-right ml-1"></i>
                                    </a>
                                    <?php if (isset($project['date'])): ?>
                                        <span class="text-sm text-gray-500">
                                            <?php 
                                            if ($project['date'] instanceof MongoDB\BSON\UTCDateTime) {
                                                echo $project['date']->toDateTime()->format('M Y'); 
                                            } else {
                                                echo htmlspecialchars($project['date']);
                                            }
                                            ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Charles Macharia</h3>
                    <p class="text-gray-300 mb-4">Designing and developing exceptional digital experiences.</p>
                    <div class="flex space-x-4">
                        <a href="https://github.com/Macharia-Charles" class="text-gray-300 hover:text-white">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/kariuki-charles-64155b181/" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="https://x.com/kariuki_mash" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="../index.php" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="projects.php" class="text-gray-300 hover:text-white">Projects</a></li>
                        <li><a href="about.php" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="skills.php" class="text-gray-300 hover:text-white">Skills</a></li>
                        <li><a href="contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-indigo-400"></i>
                            <span>111-20320, Kinamba, Kenya</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-indigo-400"></i>
                            <span>machariacharleskariuki@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-indigo-400"></i>
                            <span>+254 726 288 871</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> Charles Macharia. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="../assets/js/main.js"></script>
</body>
</html>