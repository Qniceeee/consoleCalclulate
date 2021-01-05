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
         $x = $arguments['x'];
         $y = $arguments['y'];
         $operator = $arguments['operator'];
         $calculate = $arguments['calculate'];
         if ($calculate == 'calculate')
         {
             if ($operator == '+')
             {
                 $this->info($x + $y);
             }if ($operator == '-')
             {
                 $this->info($x - $y);
             }
         }
         else
         {
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
