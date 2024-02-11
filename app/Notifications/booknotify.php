<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class booknotify extends Notification
{
    use Queueable;

    public $name;
    public $phone;
    public $time;
    public $date;
    public $person;
    public $status;

    public function __construct($bn,$bp,$bt,$bd,$pe,$st)
    {
        $this->name = $bn;
        $this->phone = $bp;
        $this->time = $bt;
        $this->date = $bd;
        $this->person= $pe;
        $this->status = $st;
    }
    public function via(object $notifiable): array
    {
        return ['database'];
    }
    public function toArray(object $notifiable): array
    {
        return [
            'name'=>$this->name,
            'phone' => $this->phone,
            'time' => $this->time,
            'date' => $this->date,
            'person' => $this->person,
            'status' => $this->status,
        ];
    }
}