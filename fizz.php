<?php
/**Please check this question here 
* http://www.phpgolf.org/challenges
*/
class FizzBuzz 
{
	private $start;
	private $end;
	
	function __construct($start,$end)
	{
		$this->start = $start;
		$this->end = $end;
	}
	public function fizzbuzzgame()
	{
		while($this->start <= $this->end)
		{
			if ($this->start < 100){
			 $this->ifElse("Fizz,","Buzz,","Fizzbuzz,");

			}
			if ($this->start == 100)
			{
				$this->ifElse("Fizz","Buzz","Fizzbuzz");
			}
			$this->start++;
		}
	}
	public function ifElse($fizz,$buzz,$Fizzbuzz)
	{
			if($this->start%5 == 0 || $this->start%3 == 0)
		{
			if($this->start%5 == 0 && $this->start%3 == 0)
			{
				echo $Fizzbuzz."<br>";
			}else{

				if ($this->start%3 == 0)
				{
					echo $fizz;
				}
				if ($this->start%5 == 0 )
				{
					echo $buzz;
				}
			}
		}else{
			echo $this->start.",";
		}
	}
}

$fizzGame = new FizzBuzz(1,100);
$fizzGame->fizzbuzzgame();



