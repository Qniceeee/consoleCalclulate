<?php

namespace App\Console\Commands;

use App\Http\Controllers\ConsoleHelper;
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
    if ($calculate == 'calculate'){
        $resultRomans = ConsoleHelper::convertToArabian($x,$y,$operator);

        $this->info(ConsoleHelper::convertToRoman($resultRomans) . "($resultRomans)");
    }else{
        $this->error('Неверные значения');
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
