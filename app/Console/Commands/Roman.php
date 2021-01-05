<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Roman extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'console {calculate} {x} {operator}{y}';

    public function handle()
    {

        $arguments = $this->arguments();
        $calculate = $arguments['calculate'];
        $x = $arguments['x'];
        $y = $arguments['y'];
        $operator = $arguments['operator'];

            function calculate($x, $y, $operator)
            {
                $result = 0;
                if ($operator == '+') {
                    $result = $x + $y;
                }
                if ($operator == '-') {
                    $result = $x - $y;;
                }
                return $result;
            }


        function convert($number)
        {
            $numerals = [
                "M" => 1000,
                "CM" => 900,
                "D" => 500,
                "CD" => 400,
                "C" => 100,
                "XC" => 90,
                "L" => 50,
                "XL" => 40,
                "X" => 10,
                "IX" => 9,
                "V" => 5,
                "IV" => 4,
                "I" => 1
            ];
            $resultRoman = "";
            foreach ($numerals as $key => $value) {
                $resultRoman .= str_repeat($key, $number / $value);
                $number %= $value;
            }
            return $resultRoman;
        }

        function deConvert($roman){
            $romans = [
                'M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1,
            ];
            $result = 0;

            foreach ($romans as $key => $value) {
                while (strpos($roman, $key) === 0) {
                    $result += $value;
                    $roman = substr($roman, strlen($key));
                }
            }
            return $result;
        }
        if ($calculate == 'calculate')
        {
            //$romanianNumbers =
            $arabianNumbers = calculate($x,$y, $operator);

            $this->info(convert($arabianNumbers) . '('.$arabianNumbers .')');
        }else{
            $this->error('Неверная команда');
        }


    }

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */


    }
