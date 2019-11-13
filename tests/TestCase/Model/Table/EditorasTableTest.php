<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditorasTable Test Case
 */
class EditorasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EditorasTable
     */
    public $Editoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Editoras',
        'app.Livros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Editoras') ? [] : ['className' => EditorasTable::class];
        $this->Editoras = TableRegistry::getTableLocator()->get('Editoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Editoras);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
