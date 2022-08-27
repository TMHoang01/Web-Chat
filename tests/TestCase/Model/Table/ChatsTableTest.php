<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChatsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChatsTable Test Case
 */
class ChatsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChatsTable
     */
    protected $Chats;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Chats',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chats') ? [] : ['className' => ChatsTable::class];
        $this->Chats = $this->getTableLocator()->get('Chats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chats);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChatsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
