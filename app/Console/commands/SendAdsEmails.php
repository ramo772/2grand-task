<?php

namespace App\Console\Commands;

use Illuminate\Database\Eloquent\Builder;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Mail\AdNextDayMail;
use App\Models\Advertiser;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendAdsEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'SendEmails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Reminder Email';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //get the advertisers that have ads tomorrow
        $advertisers = Advertiser::whereHas('ads', function ($query) {
            $query->where('start_date', Carbon::tomorrow());
        })->get();
        foreach ($advertisers as $advertiser) {
            //send email to the advertisers that have ads tomorrow
            Mail::to($advertiser->email)->send(new AdNextDayMail($advertiser));
        }
    }
}
