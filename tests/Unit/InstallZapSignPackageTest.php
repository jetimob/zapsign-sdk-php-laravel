<?php

namespace Jetimob\ZapSign\Tests\Unit;

use Illuminate\Support\Facades\File;
use Jetimob\ZapSign\Tests\AbstractTestCase;

class InstallZapSignPackageTest extends AbstractTestCase
{
    protected string $configPath;

    protected function cleanUp(): void
    {
        if (File::exists($this->configPath)) {
            unlink($this->configPath);
        }
    }

    protected function setUp(): void
    {
        parent::setUp();
        $this->configPath = config_path('zapsign.php');
        $this->cleanUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->cleanUp();
    }

    /** @test */
    public function installShouldCopyConfigFiles(): void
    {
        $this->assertFileDoesNotExist($this->configPath);

        $this->artisan('zapsign:install')
            ->expectsOutput('Arquivo de configuração copiado para ./config/zapsign.php')
            ->assertExitCode(0);

        $this->assertFileExists($this->configPath);
        unlink($this->configPath);
    }

    /** @test */
    public function existingFileCanBeOverwritten(): void
    {
        $this->configPath = config_path('zapsign.php');
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('zapsign:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'no');
        $command->assertExitCode(0);
    }

    /** @test */
    public function existingFileShouldBeOverwritten(): void
    {
        $this->configPath = config_path('zapsign.php');
        File::put($this->configPath, '');
        $this->assertFileExists($this->configPath);

        $command = $this->artisan('zapsign:install');
        $command->expectsQuestion('O arquivo de configuração já existe, deseja sobrescrever?', 'yes');
        $command->expectsOutput('Arquivo de configuração sobrescrito');
        $command->assertExitCode(0);
    }
}
