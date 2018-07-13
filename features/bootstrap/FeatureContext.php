<?php
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $arguments;
    private $output;
    
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        
    }

    /**
     * @Given I do not provide argument with the quantity of the numbers
     */
    public function iDoNotProvideArgumentWithTheQuantityOfTheNumbers()
    {
        $this->arguments = array("bin/app.php");
    }

    /**
     * @When I execute the script
     */
    public function iExecuteTheScript()
    {
        $this->output = shell_exec("php " . implode(" ",$this->arguments));
    }

    /**
     * @Then I should get the multiplication table for the first :arg1 prime numbers
     */
    public function iShouldGetTheMultiplicationTableForTheFirstTenPrimeNumbers($arg1)
    {
        if($arg1 == 2) {
            $numbers = [2, 3];
        } else if($arg1 == 11) {
            $numbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31];
        } else { 
            $numbers = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
        }
        $rows = [];

        $total = sizeof($numbers);
        
        for ($col = 0, $row = 0; $col < $total - 1, $row < $total; $col++) {
            $rows[$row][$col] = $numbers[$row] * $numbers[$col];
            
            if ($col >= $total - 1) {
                $col = -1;
                $row++;
            }
        }
        
        PHPUnit_Framework_Assert::assertEquals($this->generateOutput($numbers, $rows), $this->output);
    }

    /**
     * @Given I provide an argument with the :arg1 of the numbers
     */
    public function iProvideAnArgumentWithTheOfTheNumbers($arg1)
    {
        $this->arguments = array("bin/app.php", $arg1);
    }

     /**
     * @Given I provide an argument which is not an integer
     */
    public function iProvideAnArgumentWhichIsNotAnInteger()
    {
        $this->arguments = array("bin/app.php", "string");
    }

    /**
     * @Then I should get an error message :arg1
     */
    public function iShouldGetAnErrorMessage($arg1)
    {
        PHPUnit_Framework_Assert::assertEquals($arg1, $this->output);
    }

    private function generateOutput($numbers, $results)
    {
        $output = "     ";
        foreach($numbers as $key => $col) {
            $output .= "| " . str_pad($numbers[$key], 4, " ",STR_PAD_RIGHT);
        }
        $output .= "|\n\n";

        foreach($results as $row => $columns) {
            $output .= " " . str_pad($numbers[$row], 4, " ",STR_PAD_RIGHT);
            foreach($columns as $col => $res) {
                $output .= "| " . str_pad($res, 4, " ",STR_PAD_RIGHT);
            }
            $output .= "|\n\n";
        }

        return $output;
    }
}
