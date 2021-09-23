<?php

namespace Jetimob\Zapsign\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Jetimob\Zapsign\ZapsignServiceProvider;

class InstallZapsignPackage extends Command
{
    protected $signature = 'zapsign:install';

    protected $description = 'Publica o arquivo de configuração para o diretório "config" local';

    public function handle()
    {
        if (File::exists(config_path('zapsign.php'))) {
            if ($this->confirm('O arquivo de configuração já existe, deseja sobrescrever?', false)) {
                $this->publish(true);
                $this->info('Arquivo de configuração sobrescrito');
            }

            return;
        }

        $this->publish();
        $this->info('Arquivo de configuração copiado para ./config/zapsign.php');
    }

    private function publish($force = false): void
    {
        $params = [
            '--provider' => ZapsignServiceProvider::class,
            '--tag'      => 'config'
        ];

        if ($force) {
            $params['--force'] = '';
        }

        $this->call('vendor:publish', $params);
    }
}
