<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Indices;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class ExistsTemplate
 * Elasticsearch API name indices.exists_template
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.12.0-SNAPSHOT (8532092b1b040934004e863c98b261c8cc71817b)
 */
class ExistsTemplate extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;

        if (isset($name)) {
            return "/_template/$name";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.exists_template');
    }

    public function getParamWhitelist(): array
    {
        return [
            'flat_settings',
            'master_timeout',
            'local'
        ];
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }

    public function setName($name): ExistsTemplate
    {
        if (isset($name) !== true) {
            return $this;
        }
        if (is_array($name) === true) {
            $name = implode(",", $name);
        }
        $this->name = $name;

        return $this;
    }
}