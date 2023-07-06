<?php
declare(strict_types=1);

namespace BEdita\Chatlas\Test\TestCase\Index;

use BEdita\Chatlas\Client\ChatlasClient;
use BEdita\Chatlas\Index\CollectionHandler;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\TestSuite\TestCase;

/**
 * @coversDefaultClass \BEdita\Chatlas\Index\CollectionHandler
 */
class CollectionHandlerTest extends TestCase
{
    /**
     * @var \BEdita\Chatlas\Index\CollectionHandler
     */
    protected $handler;

    protected $client;

    public function setUp(): void
    {
        parent::setUp();

        Configure::write('Chatlas', [
            'apiUrl' => 'https://api.chatlasapp.com',
            'token' => 'test-token',
        ]);
        $client = new class extends ChatlasClient {
            /**
             * API internal HTTP client
             *
             * @var \Cake\Http\Client
             */
            public Client $client;
        };

        $this->client = new $client($this->createMock(Client::class));
        $this->handler = new CollectionHandler();
    }

    /**
     * Test `__construct()` method.
     *
     * @return void
     * @covers ::__construct()
     */
    public function testConstruct(): void
    {
        $cakeClient = $this->client->client;
        static::assertInstanceof(Client::class, $cakeClient);
        static::assertInstanceof(ChatlasClient::class, $this->client);
        static::assertSame('api.chatlasapp.com', $cakeClient->getConfig('host'));
    }

    /**
     * Test `createCollection()` method.
     *
     * @return void
     * @covers ::createCollection()
     */
    public function testCreateCollection(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `saveObject()` method.
     *
     * @return void
     * @covers ::saveObject()
     */
    public function testSaveObject(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `updateCollection()` method.
     *
     * @return void
     * @covers ::updateCollection()
     */
    public function testUpdateCollection(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `chatlasCollection()` method.
     *
     * @return void
     * @covers ::chatlasCollection()
     */
    public function testChatlasCollection(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `removeCollection()` method.
     *
     * @return void
     * @covers ::removeCollection()
     */
    public function testRemoveCollection(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `addDocument()` method.
     *
     * @return void
     * @covers ::addDocument()
     */
    public function testAddDocument(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `uploadDocument()` method.
     *
     * @return void
     * @covers ::uploadDocument()
     */
    public function testUploadDocument(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `updateDocument()` method.
     *
     * @return void
     * @covers ::updateDocument()
     */
    public function testUpdateDocument(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `documentToRemove()` method.
     *
     * @return void
     * @covers ::documentToRemove()
     */
    public function testDocumentToRemove(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `documentToAdd()` method.
     *
     * @return void
     * @covers ::documentToAdd()
     */
    public function testDocumentToAdd(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `logMessage()` method.
     *
     * @return void
     * @covers ::logMessage()
     */
    public function testLogMessage(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }

    /**
     * Test `removeDocument()` method.
     *
     * @return void
     * @covers ::removeDocument()
     */
    public function testRemoveDocument(): void
    {
        static::markTestIncomplete('This test has not been implemented yet.');
    }
}
