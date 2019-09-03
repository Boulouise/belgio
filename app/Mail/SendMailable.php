<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$etat)
    {
        $this->name = $name;
        $this->etat = $etat;
        $confirmation="nous vous prions de bien vouloir vous informer que votre réservation à été confirmé .
        Nous vous remercions pour la confiance que vous nous témoignez.
        Nous sommes impatients de vous accueillir et de vous assurer une visite des plus agréables.
        ";
        $cours="Nous accusons réception de votre réservation et nous vous remercions de l'intérêt que vous portez à notre société.
        Votre réservations sera traité dans le plus bref délais.
        Nous vous prions d'agréer  nos salutation les meilleurs.
        ";
        $annuler="Prière de noter que ce modèle est indisponible pour le moment ,je vous invite de penser à d'autre modeles.  ";
        if($etat=="confirmé")
        $this->message=$confirmation;
        elseif($etat=="en cours")
        $this->message=$cours;
        else
        $this->message=$annuler;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.name')
        ->with([
            'Message' => $this->message,
           
        ]);;
    }
}
