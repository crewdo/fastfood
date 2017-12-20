<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeadBannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeadBannersTable Test Case
 */
class HeadBannersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeadBannersTable
     */
    public $HeadBanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.head_banners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HeadBanners') ? [] : ['className' => HeadBannersTable::class];
        $this->HeadBanners = TableRegistry::get('HeadBanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HeadBanners);

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
