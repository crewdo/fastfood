<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FootBannersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FootBannersTable Test Case
 */
class FootBannersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FootBannersTable
     */
    public $FootBanners;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.foot_banners'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FootBanners') ? [] : ['className' => FootBannersTable::class];
        $this->FootBanners = TableRegistry::get('FootBanners', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FootBanners);

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
