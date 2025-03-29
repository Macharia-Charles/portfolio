<?php
// MongoDB Configuration
require_once __DIR__ . '/../vendor/autoload.php';

class Database {
    private $client;
    private $database;
    
    public function __construct() {
        try {
            // Replace with your MongoDB connection string
            // Format: mongodb+srv://<username>:<password>@<cluster-url>/<database>?retryWrites=true&w=majority
            $connectionString = "mongodb+srv://username:password@your-cluster-url.mongodb.net/portfolio?retryWrites=true&w=majority";
            
            // Create a new client and connect to the server
            $this->client = new MongoDB\Client($connectionString);
            $this->database = $this->client->portfolio;
            
            // Test connection
            $this->client->listDatabases();
        } catch (Exception $e) {
            die("MongoDB Connection Error: " . $e->getMessage());
        }
    }
    
    public function getDatabase() {
        return $this->database;
    }
    
    public function getCollection($collectionName) {
        return $this->database->$collectionName;
    }
    
    // Get all documents from a collection
    public function getAll($collectionName) {
        return $this->getCollection($collectionName)->find()->toArray();
    }
    
    // Get a single document by ID
    public function getById($collectionName, $id) {
        return $this->getCollection($collectionName)->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }
    
    // Insert a document into a collection
    public function insert($collectionName, $data) {
        return $this->getCollection($collectionName)->insertOne($data);
    }
    
    // Update a document in a collection
    public function update($collectionName, $id, $data) {
        return $this->getCollection($collectionName)->updateOne(
            ['_id' => new MongoDB\BSON\ObjectId($id)],
            ['$set' => $data]
        );
    }
    
    // Delete a document from a collection
    public function delete($collectionName, $id) {
        return $this->getCollection($collectionName)->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }
}
?>