<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Laravel\Telescope\Storage\EntryModel;

class PruneTelescopeEntries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'telescope:prune-entries';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Prune old Telescope entries';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Pruning Telescope entries...');

        $deletedEntries = DB::table('telescope_entries')->delete();

        $this->info("Pruned {$deletedEntries} Telescope entries successfully.");

        return Command::SUCCESS;
    }
}
