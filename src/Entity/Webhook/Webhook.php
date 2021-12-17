<?php

namespace Jetimob\ZapSign\Entity\Webhook;

use Illuminate\Http\Request;
use Jetimob\ZapSign\Constants\WebhookEvent;
use Jetimob\ZapSign\Entity\Document;
use Jetimob\ZapSign\Exception\ZapSignRequestException;

final class Webhook
{
    public static function resolveEvent(Request $request): Document
    {
        $event = $request->json('event_type');

        switch ($event) {
            case WebhookEvent::CREATED:
                $document = new DocumentCreated();
                break;

            case WebhookEvent::SIGNED:
                $document = new DocumentSigned();
                break;

            case WebhookEvent::DELETED:
                $document = new DocumentDeleted();
                break;
            default:
                throw new ZapSignRequestException("The event {{$event}} doesn't exists", $request);
        }

        $document->hydrate($request->json()->all());

        return $document;
    }
}
