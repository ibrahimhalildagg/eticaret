<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
class KullaniciKayitMail extends Mailable
{
    use Queueable, SerializesModels;
    public $kullanici;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $kullanici)
    {
        $this->kullanici=$kullanici;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject(config('app.name').'- Kullanici Kaydı.')
            ->view('email.kullanicikayit');
    }
}
