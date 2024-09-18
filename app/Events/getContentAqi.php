<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class getContentAqi implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $dataUdara;
    public $aqi;
    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($dataUdara, $aqi, $message)
    {
        $this->dataUdara = $dataUdara;
        $this->aqi = $aqi;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('get-content');
    }
    
    public function broadcastWith() {
        return [
            'dataUdara' => $this->dataUdara,
            'data' => $this->aqi,
            'message' => $this->message,
        ];
    }
}
