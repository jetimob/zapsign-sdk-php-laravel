<?php

namespace Jetimob\ZapSign\Api;

use Jetimob\ZapSign\Api\ZapSignResponse;

abstract class EmbeddedResponse extends ZapSignResponse
{
    use HasEmbeddedData;
}
