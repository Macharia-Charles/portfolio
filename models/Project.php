<?php
require_once __DIR__ . '/../config/database.php';

class Project {
    private $db;
    private $collection = 'projects';
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllProjects() {
        return $this->db->getAll($this->collection);
    }
    
    public function getFeaturedProjects($limit = 3) {
        $projects = $this->db->getCollection($this->collection)->find(
            ['featured' => true],
            ['limit' => $limit, 'sort' => ['date' => -1]]
        );
        return $projects->toArray();
    }
    
    public function getProjectById($id) {
        return $this->db->getById($this->collection, $id);
    }
    
    public function getProjectsByCategory($category) {
        $projects = $this->db->getCollection($this->collection)->find(['category' => $category]);
        return $projects->toArray();
    }
    
    public function createProject($projectData) {
        // Set creation date if not provided
        if (!isset($projectData['date'])) {
            $projectData['date'] = new MongoDB\BSON\UTCDateTime();
        }
        
        return $this->db->insert($this->collection, $projectData);
    }
    
    public function updateProject($id, $projectData) {
        // Update modification date
        $projectData['updated'] = new MongoDB\BSON\UTCDateTime();
        
        return $this->db->update($this->collection, $id, $projectData);
    }
    
    public function deleteProject($id) {
        return $this->db->delete($this->collection, $id);
    }
    
    // Helper method to get project categories for filtering
    public function getCategories() {
        $categories = $this->db->getCollection($this->collection)->distinct('category');
        return $categories;
    }
}
?>