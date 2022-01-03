<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Models\Order;


class NewOrder extends Mailable //OrderShipped
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $order;
    
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('cabellaph@gmail.com', 'CABELLA')
        ->to('cabellaph@gmail.com')
        ->subject('NEW ORDER')
        ->markdown('emails.newOrder'); //order_Shipped
    }
}
