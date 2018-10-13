<?php

use App\Models\admins;
use App\Repositories\adminsRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class adminsRepositoryTest extends TestCase
{
    use MakeadminsTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var adminsRepository
     */
    protected $adminsRepo;

    public function setUp()
    {
        parent::setUp();
        $this->adminsRepo = App::make(adminsRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateadmins()
    {
        $admins = $this->fakeadminsData();
        $createdadmins = $this->adminsRepo->create($admins);
        $createdadmins = $createdadmins->toArray();
        $this->assertArrayHasKey('id', $createdadmins);
        $this->assertNotNull($createdadmins['id'], 'Created admins must have id specified');
        $this->assertNotNull(admins::find($createdadmins['id']), 'admins with given id must be in DB');
        $this->assertModelData($admins, $createdadmins);
    }

    /**
     * @test read
     */
    public function testReadadmins()
    {
        $admins = $this->makeadmins();
        $dbadmins = $this->adminsRepo->find($admins->id);
        $dbadmins = $dbadmins->toArray();
        $this->assertModelData($admins->toArray(), $dbadmins);
    }

    /**
     * @test update
     */
    public function testUpdateadmins()
    {
        $admins = $this->makeadmins();
        $fakeadmins = $this->fakeadminsData();
        $updatedadmins = $this->adminsRepo->update($fakeadmins, $admins->id);
        $this->assertModelData($fakeadmins, $updatedadmins->toArray());
        $dbadmins = $this->adminsRepo->find($admins->id);
        $this->assertModelData($fakeadmins, $dbadmins->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteadmins()
    {
        $admins = $this->makeadmins();
        $resp = $this->adminsRepo->delete($admins->id);
        $this->assertTrue($resp);
        $this->assertNull(admins::find($admins->id), 'admins should not exist in DB');
    }
}
