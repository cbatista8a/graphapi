<?php


/**
 * Copyright since 2020 CubaDevOps
 *
 * @Author : Carlos Batista <carlos.batista@cubadevops.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.
 */

use CubaDevOps\GraphApi\GraphQl\Infrastructure\ApiHandler;

class graphapiGraphApiModuleFrontController extends ModuleFrontController
{
    /**
     * @throws \RuntimeException|Exception
     */
    public function initContent()
    {
        $request_time = microtime(true);
        $result = [];
        $rawInput = file_get_contents('php://input');
        $input = json_decode($rawInput, true);
        $query = $input['query'];
        $vars = $input['variables'] ?? null;

        try {
            $result = $this->get(ApiHandler::class)->handle($query, $vars);
        } catch (\RuntimeException $exception) {
            $result['errors'] = $exception->getMessage();
        }

        if (_PS_MODE_DEV_) {
            $result['performance']['graphapi_handle_time'] = $this->getElapsedTime($request_time);
        }

        if (_PS_DEBUG_PROFILING_) {
            $profiler = Profiler::getInstance();
            $profiler->processData();
            $result['performance']['ps_profiler'] = $profiler->getSmartyVariables();
            unset($result['performance']['ps_profiler']['doublesQueries']);
            $result['performance']['total_time'] = $this->getElapsedTime($request_time);
        }
        die(json_encode($result));
    }

    /**
     * @param float $initial_time from microtime(true)
     * @return string
     */
    public function getElapsedTime(float $initial_time): string
    {
        return number_format(microtime(true) - $initial_time, 4). ' s';
    }
}