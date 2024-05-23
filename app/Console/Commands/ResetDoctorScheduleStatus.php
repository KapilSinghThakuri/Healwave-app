<?php

namespace App\Console\Commands;

use App\Models\Schedule;
use Illuminate\Console\Command;

class ResetDoctorScheduleStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:reset-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset the Doctor\'s Schedule Status.';

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
    public function handle()
    {
        // return 0;
        Schedule::query()->update(['status' => 'available']);
        $this->info('DoctorSchedule table status column has been reset to available.');
    }
}
