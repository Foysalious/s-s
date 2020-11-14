<?php

namespace App\Console\Commands;

use App\Models\menu;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class everyDay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'day:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily Menu Delete';

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
    public function handle(menu $menu)
    {
        $menu= menu::orderBy('id','desc')->delete();
        echo "operation done";
    }
}
