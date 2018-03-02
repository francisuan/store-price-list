<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PriceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PriceTable Test Case
 */
class PriceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PriceTable
     */
    public $Price;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.price',
        'app.items',
        'app.categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Price') ? [] : ['className' => 'App\Model\Table\PriceTable'];
        $this->Price = TableRegistry::get('Price', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Price);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
