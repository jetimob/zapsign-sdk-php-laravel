<?php

namespace Jetimob\ZapSign\Tests\Feature;

use Illuminate\Support\Facades\Config;
use Jetimob\ZapSign\Api\Document\AttachmentDTO;
use Jetimob\ZapSign\Api\Document\DocumentApi;
use Jetimob\ZapSign\Api\Document\DocumentDTO;
use Jetimob\ZapSign\Api\Signer\SignerApi;
use Jetimob\ZapSign\Api\Signer\SignerDTO;
use Jetimob\ZapSign\Entity\Document;
use Jetimob\ZapSign\Facades\ZapSign;
use Jetimob\ZapSign\Tests\AbstractTestCase;

class DocumentApiTest extends AbstractTestCase
{
    protected DocumentApi $documentApi;
    protected static ?string $documentToken = null;
    protected static string $documentName = 'test document';
    protected static string $documentUrl = 'http://www.pdf995.com/samples/pdf.pdf';
    protected static string $attachmentName = 'test attachment';
    protected static string $attachmentUrl = 'https://www.w3.org/WAI/ER/tests/xhtml/testfiles/resources/pdf/dummy.pdf';

    protected SignerApi $signerApi;
    protected static ?string $signerToken = null;
    protected static string $signerName = 'Teste Jetimob';
    protected static string $signerEmail = 'teste@jetimob.com';
    protected static int $itemsPerPage = 20;

    protected function setUp(): void
    {
        parent::setUp();
        Config::set('zapsign.sandbox', true);
        $this->documentApi = ZapSign::document();
        $this->signerApi = ZapSign::signer();
    }

    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();

        if (!is_null(self::$signerToken)) {
            ZapSign::signer()->delete(self::$signerToken);
        }

        if (!is_null(self::$documentToken)) {
            ZapSign::document()->delete(self::$documentToken);
        }
    }

    public function testCreateDocument(): void
    {
        $signers = [
            SignerDTO::new(
                'Teste Jetimob Primeiro',
                'teste1@jetimob.com'
            ),
        ];

        $document = DocumentDTO::new(
            self::$documentName,
            self::$documentUrl,
            $signers
        );

        $response = $this->documentApi->create($document);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(self::$documentName, $response->getName());

        self::$documentToken = $response->getToken();
    }

    public function testAttachDocument(): void
    {
        $attachment = AttachmentDTO::new(
            self::$attachmentName,
            self::$attachmentUrl,
        );

        $response = $this->documentApi->attach($attachment, self::$documentToken);
        $this->assertSame(200, $response->getStatusCode());
    }

    public function testCreateSigner(): void
    {
        $signer = SignerDTO::new(
            self::$signerName,
            self::$signerEmail,
        );

        $response = $this->signerApi->create($signer, self::$documentToken);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(self::$signerName, $response->getName());

        self::$signerToken = $response->getToken();
    }

    public function testUpdateSigner(): void
    {
        self::$signerName .= ' update';

        $signerUpdate = new SignerDTO();
        $signerUpdate->setName(self::$signerName);

        $response = $this->signerApi->update($signerUpdate, self::$signerToken);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(self::$signerToken, $response->getToken());
        $this->assertSame(self::$signerName, $response->getName());

    }

    public function testFindSigner(): void
    {
        $response = $this->signerApi->find(self::$signerToken);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(self::$signerToken, $response->getToken());
        $this->assertSame(self::$signerName, $response->getName());
    }

    public function testFindDocument(): void
    {
        $response = $this->documentApi->find(self::$documentToken);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(self::$documentName, $response->getName());
        $this->assertSame(self::$documentToken, $response->getToken());
    }

    public function testListDocuments(): void
    {
        $response = $this->documentApi->list();

        $total = $response->getCount();
        $previousPage = $response->getPrev();
        $nextPage = $response->getNext();
        $lastPage = ceil($total / self::$itemsPerPage);

        $this->assertIsInt($total);
        $this->assertNull($previousPage);

        if ($total <= self::$itemsPerPage) {
            $this->assertNull($nextPage);
        } else {
            $this->assertIsString($nextPage);
        }

        foreach ($response->getDocuments() as $document) {
            $this->assertInstanceOf(Document::class, $document);
        }

        if ($lastPage > 1) {
            $this->verifyLastPage($lastPage);
        }
    }

    public function testDeleteSigner(): void
    {
        $response = $this->signerApi->delete(self::$signerToken);
        $this->assertSame(200, $response->getStatusCode());
        self::$signerToken = null;
    }

    public function testDeleteDocument(): void
    {
        $response = $this->documentApi->delete(self::$documentToken);
        $this->assertSame(200, $response->getStatusCode());
        self::$documentToken = null;
    }

    protected function verifyLastPage(int $page): void
    {
        $response = $this->documentApi->list($page);
        $total = $response->getCount();
        $this->assertTrue($total > ($page - 1) * self::$itemsPerPage && $total <= $page * self::$itemsPerPage);
        $this->assertNull($response->getNext());
        $this->assertNotEmpty($response->getDocuments());

        foreach ($response->getDocuments() as $document) {
            $this->assertInstanceOf(Document::class, $document);
        }
    }
}
