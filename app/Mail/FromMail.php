<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FromMail extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
 

            $this->infos = $data[0];
            $this->subjectTitle = $data[1];
        
        
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        // dd($this->infos->email);
        return $this->from($this->infos->email)->view('template.form')->subject($this->subjectTitle)->with(['name' => $this->infos->name, 'email' => $this->infos->email, 'subject' => $this->infos->subject, 'content' => $this->infos->message]);
    }
}
