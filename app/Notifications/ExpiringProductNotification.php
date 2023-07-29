<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;


class ExpiringProductNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(protected array $data)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $content = "<ul>";
        foreach ($this->data['stocks'] as $stock) {
            $content.= $stock->product?->name . " with batch number $stock->batch_no purchased on $stock->purchase date will expire on $stock->created_at. There are $stock->remaining_quantity items left";
        }

        $content .= "</ul>";

        return (new MailMessage)
                    ->greeting('Hello Jendol,')
                    ->line(new HtmlString($content))
                    ->line($this->data['message'])
                    ->action('Go to dashboard', route('dashboard'))
                    ->line('Thumps up!');
    }


    public function toArray(object $notifiable): array
    {
        return [
            'data' => json_encode($this->data)
        ];
    }

    public function toVonage(object $notifiable): VonageMessage
    {
        $content = "";
        foreach ($this->data['stocks'] as $stock) {
            $content.= $stock->product?->name.", ";
        }

        $content .= "</ul>";
        return (new VonageMessage)
                    ->content($data['message'].". $content");
    }
}
