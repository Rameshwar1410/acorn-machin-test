<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\FoodRepository;
use App\Service\Filter;

class Solution
{
    /**
     * @var Filter
     */
    private $filter;

    /**
     * @var FoodRepository
     */
    private $foodRepository;

    public function __construct()
    {
        $this->filter = new Filter();
        $this->foodRepository = new FoodRepository();
    }

    /**
     * @param array $data
     */
    public function getFirstSolution(array $data): void
    {
        print_r($this->filter->filterByPopulation($data));
    }

    /**
     * @param array $data
     */
    public function getSecoundSolution(array $data): void
    {
        print_r($this->filter->filterByCountry($data));
    }

    /**
     * @param array $data
     */
    public function getThirdSolution(array $data): void
    {
        $json = json_encode($data);
?>
       <script type="text/javascript">
            jsFunction(<?php echo $json;?>);
            function findByValue(value)
            {
                return function(innerArr){
                    return innerArr.country === value
                }
            }
            function jsFunction(data)
            {
                console.log('Index Of UK => '+data.findIndex( findByValue('UK')));
            }
       </script>
<?php
        echo "Check result in console\n";
    }

    public function getFourthSolution()
    {
        $result = $this->foodRepository->getSumOfTotalGroupBYDate();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo $row['Date']," Total: " . $row["Total"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }

    public function getFifthSolution()
    {
        var_dump($this->foodRepository->updateStatusByDateNew());
    }

    public function getSixthSolution()
    {
        echo <<<EOT
Help of below mentioned MySQL's library function
Object oriented style
mysqli::escape_string ( string \$escapestr ) : string
mysqli::real_escape_string ( string \$escapestr ) : string

Procedural style
mysqli_real_escape_string ( mysqli \$link , string \$escapestr ) : string

Or Use prepared statements
// prepare and bind
\$stmt = \$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
\$stmt->bind_param("sss", \$firstname, \$lastname, \$email);

// set parameters and execute
\$firstname = "John";
\$lastname = "Doe";
\$email = "john@example.com";
\$stmt->execute(); \n
EOT;
;
    }

    public function getSeventhSolution(): void
    {
        print_r(21);
    }
}

