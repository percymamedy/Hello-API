<?php

namespace App\Containers\Settings\Services;

use App\Containers\Settings\Data\Repositories\SettingsRepository;
use App\Port\Service\Abstracts\Service;

/**
 * Class FindSettingsService
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class FindSettingsService extends Service
{

    /**
     * @var  \App\Containers\Settings\Data\Repositories\SettingsRepository
     */
    private $settingsRepository;

    /**
     * FindSettingsService constructor.
     *
     * @param \App\Containers\Settings\Data\Repositories\SettingsRepository $settingsRepository
     */
    public function __construct(SettingsRepository $settingsRepository)
    {
        $this->settingsRepository = $settingsRepository;
    }

    /**
     * @param $id
     *
     * @return  mixed
     */
    public function byKey($key)
    {
        $result = $this->settingsRepository->findWhere(['key' => $key])->first();

        return $result->value;
    }

    /**
     * @return  mixed
     */
    public function getSomething()
    {
        return $this->byKey('something');
    }

}
