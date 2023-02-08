<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class testNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail(Alumno $alumno)
    {
        return (new MailMessage)
            ->line('Se ha registrado correctamente como alumno en nuestra plataforma.')
            ->line('Nombre: '.$alumno->persona->nombre)
            ->line('Apellidos: '.$alumno->persona->ape1.' '.$alumno->persona->ape2)
            ->line('DNI: '.$alumno->persona->dni)
            ->line('Email: '.$alumno->persona->usuario->email)
            ->line('Teléfono: '.$alumno->persona->telefono)
            ->line('Grado: '.$alumno->grado->nombre)
            ->line('Curso: '.$alumno->curso)
            ->line('Gracias por registrarte!');
           
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
