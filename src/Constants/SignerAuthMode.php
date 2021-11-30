<?php

namespace Jetimob\ZapSign\Constants;

final class DocumentAuthMode
{
    public const SCREEN_SIGN = 'assinaturaTela';
    public const TOKEN_EMAIL = 'tokenEmail';
    public const SCREEN_SIGN_TOKEN_EMAIL = 'assinaturaTela-tokenEmail';
    public const TOKEN_SMS = 'tokenSms';
    public const SCREEN_SIGN_TOKEN_SMS = 'assinaturaTela-tokenSms';
    public const DIGITAL_CERTIFICATE = 'certificadoDigital';
}
