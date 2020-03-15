<?php
declare(strict_types=1);

namespace App\Service;

class Filter
{

    /**
     * @param array $data
     * @return array
     */
    public function filterByPopulation(array $data): array
    {
        usort ($data, function($a, $b) {
            return $a['population'] <=> $b['population'];
        });

        return $data;
    }

    /**
     * @param array $data
     * @return array
     */
    public function filterByCountry(array $data): array
    {
        usort ($data, function($a, $b) {
            return $a['country'] <=> $b['country'];
        });

        return $data;
    }
}
