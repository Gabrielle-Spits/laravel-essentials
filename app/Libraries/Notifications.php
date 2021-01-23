<?php
namespace App\Libraries;

use App\Libraries\NotificationsInterface;
use Illuminate\Support\Facades\mail;
use App\mail\Reservations;
class Notifications implements NotificationsInterface
{
    public function send()
    {
        Mail::to('sample@test.com')->send(new Reservations('Gabrielle Spits'));
    }
}
?>