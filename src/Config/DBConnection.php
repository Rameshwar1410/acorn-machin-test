<?php
declare(strict_types=1);

namespace App\Config;

class DBConnection
{
    /**
     * @var string
     */
    private const DATA_BASE = 'test';

    /**
     * @var string
     */
    private const USER_NAME = 'root';

    /**
     * @var string
     */
    private const PASSWORD = '';

    /**
     * @var string
     */
    private const HOST = 'localhost';

    /**
     * @var bool
     */
    private $_isConnected = false;

    /**
     * @var \mysqli
     */
    private $mysqli;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        if ($this->_isConnected)
        {
            return $this->mysqli;
        }
        $this->mysqli = new \mysqli(
            self::HOST,
            self::USER_NAME,
            self::PASSWORD,
            self::DATA_BASE
        );

        // Check connection
        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli -> connect_error;
            exit();
        }
        $this->_isConnected = true;

        return $this->mysqli;
    }

    /**
     * @return \mysqli
     */
    public function getMysqli(): \mysqli
    {
        return $this->mysqli;
    }
}
