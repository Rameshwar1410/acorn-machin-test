<?php
declare(strict_types=1);

namespace App\Model;

use App\Config\DBConnection;

class FoodRepository
{
    /**
     * @var DBConnection
     */
    private $db;

    public function __construct()
    {
        $this->db = new DBConnection();
    }

    /**
     * @return object
     */
    public function getSumOfTotalGroupBYDate(): object
    {
        $sql = "SELECT date(DateNew) as Date, sum(Total) as Total FROM foods group by date(DateNew)";

        return $this->db->getMysqli()->query($sql);
    }

    /**
     * @return mixed
     */
    public function updateStatusByDateNew()
    {
        $sql = "UPDATE foods f1 INNER JOIN ( SELECT Type , MAX(DateNew) as DateNew 
                FROM foods GROUP BY Type ) f2 ON f1.Type = f2.Type AND f1.DateNew = f2.DateNew SET f1.Status = 1 ";

        return $this->db->getMysqli()->query($sql);
    }
}
