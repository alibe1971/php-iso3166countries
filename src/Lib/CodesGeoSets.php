<?php

namespace Alibe\GeoCodes\Lib;

use Alibe\GeoCodes\Lib\Enums\DataSets\Access;
use Alibe\GeoCodes\Lib\Enums\DataSets\Index;
use Alibe\GeoCodes\Lib\Enums\DataSets\Source;
use Alibe\GeoCodes\Lib\Enums\DataSets\Type;

class CodesGeoSets extends Enquiries
{
    protected string $dataSetName = 'geoSets';

    protected array $dataSetsStructure = [
        'internalCode' => [
            'source' => Source::DATA,
            'type' => Type::STRING,
            'nullable' => false,
            'index' => Index::PRIMARY,
            'access' => Access::PUBLIC,
            'search' => true,
            'description' => 'The internal code to identify the geographic set'
        ],
        'unM49' => [
            'source' => Source::DATA,
            'type' => Type::STRING,
            'nullable' => true,
            'index' => Index::NOTINDEXABLE,
            'access' => Access::PUBLIC,
            'search' => true,
            'description' => 'The United Nations Statistics Division M49 code (numeric)'
        ],
        'name' => [
            'source' => Source::TRANSLATIONS,
            'type' => Type::STRING,
            'nullable' => false,
            'index' => Index::NOTINDEXABLE,
            'access' => Access::PUBLIC,
            'search' => true,
            'description' => 'The name of the geographic set'
        ],
        'tags' => [
            'source' => Source::DATA,
            'type' => Type::ARRAY,
            'nullable' => false,
            'index' => Index::NOTINDEXABLE,
            'access' => Access::PUBLIC,
            'search' => true,
            'description' => 'The tags that can describe the geographic set'
        ],
        'countryCodes' => [
            'source' => Source::DATA,
            'type' => Type::ARRAY,
            'nullable' => false,
            'index' => Index::NOTINDEXABLE,
            'access' => Access::PUBLIC,
            'search' => false,
            'description' => 'The codes of the countries belonging to the geographic set'
        ]
    ];
}