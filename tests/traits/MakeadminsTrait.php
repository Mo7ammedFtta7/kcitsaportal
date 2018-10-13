<?php

use Faker\Factory as Faker;
use App\Models\admins;
use App\Repositories\adminsRepository;

trait MakeadminsTrait
{
    /**
     * Create fake instance of admins and save it in database
     *
     * @param array $adminsFields
     * @return admins
     */
    public function makeadmins($adminsFields = [])
    {
        /** @var adminsRepository $adminsRepo */
        $adminsRepo = App::make(adminsRepository::class);
        $theme = $this->fakeadminsData($adminsFields);
        return $adminsRepo->create($theme);
    }

    /**
     * Get fake instance of admins
     *
     * @param array $adminsFields
     * @return admins
     */
    public function fakeadmins($adminsFields = [])
    {
        return new admins($this->fakeadminsData($adminsFields));
    }

    /**
     * Get fake data of admins
     *
     * @param array $postFields
     * @return array
     */
    public function fakeadminsData($adminsFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'email' => $fake->word,
            'email_verified_at' => $fake->date('Y-m-d H:i:s'),
            'password' => $fake->word,
            'remember_token' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'work_address' => $fake->word,
            'deleted_at' => $fake->word
        ], $adminsFields);
    }
}
