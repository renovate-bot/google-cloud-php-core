<?php
/**
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Core\Testing\Reflection;

use phpDocumentor\Reflection\Php\Factory\Argument;

/**
 * Class for determining which verison of phpdocumentor/reflection is being used.
 * @internal
 */
class ReflectionHandlerFactory
{
    /**
     * @return ReflectionHandlerV5
     */
    public static function create()
    {
        return class_exists(Argument::class)
            ? new ReflectionHandlerV5()
            : new ReflectionHandlerV6();
    }
}
