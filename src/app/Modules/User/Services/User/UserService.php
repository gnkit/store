<?php

namespace App\Modules\User\Services\User;

use Illuminate\Database\Eloquent\Model;

final class UserService
{
    /**
     * @param Model $model
     * @param array $args
     * @param string $relations
     * @return void
     */
    public function syncPivotWithoutParams(Model $model, array $args, string $relations)
    {
        $argsItems = [];
        foreach ($args as $arg) {
            $argsItems[$arg['id']] = $arg;
        }
        $argsItems = array_keys($argsItems);
        $model->{$relations}()->sync($argsItems);
    }
}
