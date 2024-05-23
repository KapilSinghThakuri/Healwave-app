<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $appointment;
    public $patient;
    public $method;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($appointment, $patient, $method)
    {
        $this->patient = $patient;
        $this->appointment = $appointment;
        $this->method = $method;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Your Appointment has been Scheduled')
            ->greeting('Hello ' . $this->patient['fullname'] . ',')
            ->line('We are pleased to inform you that your appointment has been successfully scheduled.')
            ->line('Please visit us on the following date for your checkup:')
            ->line('**Date and Time:** ' . $this->appointment['time_interval'])
            ->line('Please ensure you bring any relevant medical history documents with you.')
            ->line('If you have any questions or need to reschedule, feel free to contact us at info@healwave.com')
            ->line('Thank you for choosing our healthcare services. We look forward to seeing you.')
            ->salutation('Best regards,')
            ->salutation('The Healthcare Team');
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
            'method' => $this->method,
            'appointment_time_interval' => $this->appointment['time_interval'],
            'patient_name' => $this->patient['fullname'],
            'patient_email' => $this->patient['email'],
        ];
    }
}
