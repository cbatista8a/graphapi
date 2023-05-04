<?php



/**
 * Copyright (c) 2022.  <CubaDevOps>
 *
 * @Author : Carlos Batista <cbatista8a@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

use CubaDevOps\GraphApi\GraphQl\Infrastructure\ApiHandler;

class graphapiGraphApiModuleFrontController extends ModuleFrontController
{
    /**
     * @throws Exception
     */
    public function initContent()
    {
        $profiler = _PS_DEBUG_PROFILING_ ? Profiler::getInstance() : null;
        $request_time = microtime(true);
        $result = [];
        $rawInput = file_get_contents('php://input');
        $input = json_decode($rawInput,true);
        $query = $input['query'];
        $vars = $input['variables'] ?? null;

        $read_request_time = microtime(true);
        try {
            $result = $this->get(ApiHandler::class)->handle($query,$vars);
        }catch (Exception $exception){
            $result['errors'] = $exception->getMessage();
        }
        $after_graph_handle_time = microtime(true);
        $result['performance'] = [
            'read_request_time' => number_format($read_request_time - $request_time, 4),
            'graphapi_handle_time' => number_format($after_graph_handle_time - $read_request_time, 4),
            'total_time' => number_format($after_graph_handle_time - $request_time, 4)
        ];
        if (_PS_DEBUG_PROFILING_){
            $profiler->processData();
            $result['performance']['ps_profiler'] = $profiler->getSmartyVariables();
            unset($result['performance']['ps_profiler']['doublesQueries']);
            unset($result['performance']['ps_profiler']['files']);
        }
        die(json_encode($result));
    }
}