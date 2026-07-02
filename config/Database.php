<?php
namespace Config;

class Database {
    private $host;
    private $user;
    private $pass;
    private $name;
    private $port;
    private $connection;
    private static $instance = null;

    private function __construct() {
        require_once __DIR__ . '/constants.php';
        
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->name = DB_NAME;
        $this->port = DB_PORT;
        
        $this->connect();
    }

    private function connect() {
        try {
            $this->connection = new \mysqli(
                $this->host,
                $this->user,
                $this->pass,
                $this->name,
                $this->port
            );

            if ($this->connection->connect_error) {
                throw new \Exception('Connection Failed: ' . $this->connection->connect_error);
            }

            $this->connection->set_charset('utf8mb4');
        } catch (\Exception $e) {
            die('Database Error: ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }

    public function query($sql) {
        $result = $this->connection->query($sql);
        if (!$result && $this->connection->error) {
            throw new \Exception('Query Error: ' . $this->connection->error);
        }
        return $result;
    }

    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }

    public function close() {
        $this->connection->close();
    }
}
