<?php
namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class LocationUpdated implements ShouldBroadcastNow
{

    use Dispatchable, InteractsWithSockets, SerializesModels;
    public function __construct(
        public $user_id,
        public $lat,
        public $lng
    ) {}

    public function broadcastOn()
    {
        return new Channel('tracker');
    }

    public function broadcastAs()
    {
        return 'location.updated';
    }

    /**
     * Get the data to broadcast.
     *
     * @return array
     */
    public function broadcastWith(): array
    {
        return [
            'user_id' => $this->user_id,
            'lat' => $this->lat,
            'lng' => $this->lng
        ];
    }
}
