<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Your Name</h3>
                    <p class="text-gray-300 mb-4">Designing and developing exceptional digital experiences.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-github text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-dribbble text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo $base_url ?? ''; ?>index.php" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="<?php echo $base_url ?? ''; ?>pages/projects.php" class="text-gray-300 hover:text-white">Projects</a></li>
                        <li><a href="<?php echo $base_url ?? ''; ?>pages/about.php" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="<?php echo $base_url ?? ''; ?>pages/skills.php" class="text-gray-300 hover:text-white">Skills</a></li>
                        <li><a href="<?php echo $base_url ?? ''; ?>pages/contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-indigo-400"></i>
                            <span>Your Address, City, Country</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-indigo-400"></i>
                            <span>your.email@example.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-indigo-400"></i>
                            <span>+1 234 567 890</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> Your Name. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="<?php echo $base_url ?? ''; ?>assets/js/main.js"></script>
</body>
</html>