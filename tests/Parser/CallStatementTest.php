<?php

declare(strict_types=1);

namespace PhpMyAdmin\SqlParser\Tests\Parser;

use PhpMyAdmin\SqlParser\Tests\TestCase;

class CallStatementTest extends TestCase
{
    /**
     * @dataProvider callProvider
     */
    public function testCall(string $test): void
    {
        $this->runParserTest($test);
    }

    /**
     * @return string[][]
     */
    public static function callProvider(): array
    {
        return [
            ['parser/parseCall'],
            ['parser/parseCall2'],
            ['parser/parseCall3'],
        ];
    }
}
