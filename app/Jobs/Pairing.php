<?php

namespace App\Jobs;

// use Carbon\Carbon;
// use Illuminate\Bus\Queueable;
// use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\Redis;
// use Illuminate\Queue\SerializesModels;
// use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Foundation\Bus\Dispatchable;

class Pairing // implements ShouldQueue
{
    // use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct()
    {
    }

    // public function tags()
    // {
    //     return ['collect_payment'];
    // }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Slack::to('@alicearmstrong')->send('*Alice Armstrong* is getting a coffee with *David Solomon* today! Message each other to arrange a time and place.');
        // Redis::throttle('scheduled_payments')->allow(50)->every(1)->then(function () use ($stripe) {
        //     $inDebt = $this->payments->first()->getBusiness()->isInDebt();
        //     $inDebt ? $this->sendToDunning() : $this->collectPayments($stripe);
        // }, function () {
        //     return $this->release(60);
        // });
    }

    public function sendToDunning(string $e = null)
    {
        // TriggerDunningProcess::dispatch($this->payments, $e);
    }

    // public function collectPayments(StripeGateway $stripe)
    // {
    //     try {
    //         $this->payments = $stripe->multipleCharges($this->payments->all());
    //         foreach ($this->payments as $payment) {
    //             event(new ScheduledPaymentSucceeded($payment));
    //         }
    //     } catch (\Stripe\Error\Card $e) {
    //         foreach ($this->payments as $payment) {
    //             $payment->update([
    //                 'failed_attempts' => ($payment->failed_attempts + 1)
    //             ]);
    //         };
    //         $this->sendToDunning($e->getMessage());
    //     } catch (\Stripe\Error\RateLimit $e) {
    //         $delay = ($this->attempts() + 1) * $this->minDelay;
    //         $this->release($delay);
    //     } catch (\Stripe\Error\ApiConnection $e) {
    //         $delay = ($this->attempts() + 1) * 3 * $this->minDelay;
    //         $this->release($delay);
    //     } catch (\Exception $e) {
    //         $this->release($this->minDelay);
    //     }
    // }
    //
    // public function failed(\Exception $e)
    // {
    //     \Bugsnag::notifyException($e);
    // }
}
