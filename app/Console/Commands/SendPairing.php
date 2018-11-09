<?php

namespace App\Console\Commands;

// use DB;
// use App\Payment;
// use App\PaymentType;
// use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Jobs\Pairing;

class SendPairing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'coffee';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends coffee pairing';

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
     * @return mixed
     */
    public function handle()
    {
        dispatch(new Pairing()); // Job
        // $this->info('Processing outstanding payments');
        //
        // $paymentGroups = Payment::where('payment_type_id', PaymentType::getTypeId('scheduled'))
        //     ->whereDate('due_date', '<=', Carbon::today())
        //     ->get()
        //     ->filter(function ($value) {
        //         return $value->getStripeId() == null;
        //     })->groupBy(function ($payment) {
        //         return $payment->getBusiness()->id;
        //     });
        // foreach ($paymentGroups as $businessId => $payments) {
        //     dispatch(new CollectScheduledPayment($payments));
        // }
    }
}
