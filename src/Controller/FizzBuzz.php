<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FizzBuzz  extends AbstractController
{
    public function isFizz(int $input): bool
    {
        return $input % 3 === 0;
    }

    public function isBuzz(int $input): bool
    {
        return $input % 5 === 0;
    }

    public function isFizzBuzz(int $input): bool
    {
        return $this->isFizz($input) && $this->isBuzz($input);
    }

    public function getResults(int $limit): array
    {
        $result = [];

        for ($i = 1; $i <= $limit; $i++) {
            if ($this->isFizzBuzz($i)) {
                $result[] = 'FizzBuzz';
            } else if ($this->isFizz($i)) {
                $result[] = 'Fizz';
            } else if ($this->isBuzz($i)) {
                $result[] = 'Buzz';
            } else {
                $result[] = (string) $i;
            }
        }

        return $result;
    }
}