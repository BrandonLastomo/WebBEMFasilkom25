<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Peminjam;
use Illuminate\Support\Facades\Auth;

class KirimEmailDitolak extends Mailable
{
 
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  
    public function build()
    {
        
        return $this->from('bem.cs@unsika.ac.id')->view('isi-email-ditolak');
     
    }
    
}
