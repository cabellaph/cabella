<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactsController;
use App\Models\Contact;



class NewContact extends Mailable //OrderShipped
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('juliezaraper@gmail.com', 'CABELLA')
        ->to('juliezaraper@gmail.com')
        ->subject('NEW CONTACT')
        ->markdown('emails.newContact')->with(['contact', $this->contact]); //order_Shipped
    }
}
