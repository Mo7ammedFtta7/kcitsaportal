<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class adminsApiTest extends TestCase
{
    use MakeadminsTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateadmins()
    {
        $admins = $this->fakeadminsData();
        $this->json('POST', '/api/v1/admins', $admins);

        $this->assertApiResponse($admins);
    }

    /**
     * @test
     */
    public function testReadadmins()
    {
        $admins = $this->makeadmins();
        $this->json('GET', '/api/v1/admins/'.$admins->id);

        $this->assertApiResponse($admins->toArray());
    }

    /**
     * @test
     */
    public function testUpdateadmins()
    {
        $admins = $this->makeadmins();
        $editedadmins = $this->fakeadminsData();

        $this->json('PUT', '/api/v1/admins/'.$admins->id, $editedadmins);

        $this->assertApiResponse($editedadmins);
    }

    /**
     * @test
     */
    public function testDeleteadmins()
    {
        $admins = $this->makeadmins();
        $this->json('DELETE', '/api/v1/admins/'.$admins->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/admins/'.$admins->id);

        $this->assertResponseStatus(404);
    }
}
