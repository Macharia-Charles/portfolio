<?php
require_once __DIR__ . '/../config/database.php';

class Contact {
    private $db;
    private $collection = 'contacts';
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllContacts() {
        return $this->db->getAll($this->collection);
    }
    
    public function getContactById($id) {
        return $this->db->getById($this->collection, $id);
    }
    
    public function createContact($contactData) {
        // Set creation date
        $contactData['created_at'] = new MongoDB\BSON\UTCDateTime();
        
        // Set status to unread by default
        if (!isset($contactData['status'])) {
            $contactData['status'] = 'unread';
        }
        
        return $this->db->insert($this->collection, $contactData);
    }
    
    public function updateContact($id, $contactData) {
        // Update modification date
        $contactData['updated_at'] = new MongoDB\BSON\UTCDateTime();
        
        return $this->db->update($this->collection, $id, $contactData);
    }
    
    public function deleteContact($id) {
        return $this->db->delete($this->collection, $id);
    }
    
    // Mark a contact message as read
    public function markAsRead($id) {
        return $this->db->update($this->collection, $id, ['status' => 'read']);
    }
    
    // Get unread contact count
    public function getUnreadCount() {
        $unreadCount = $this->db->getCollection($this->collection)->count(['status' => 'unread']);
        return $unreadCount;
    }
}
?>