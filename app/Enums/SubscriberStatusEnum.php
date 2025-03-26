<?php

declare(strict_types=1);

namespace App\Enums;

enum SubscriberStatusEnum: string
{
    case SUBSCRIBED = 'subscribed';
    case UNSUBSCRIBED = 'unsubscribed';
}
