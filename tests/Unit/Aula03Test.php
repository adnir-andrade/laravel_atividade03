<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Aula03Test extends TestCase
{
    public function test_that_the_ultimate_question_of_life_the_universe_and_everything_is_42(): void
    {
        $result = $this->calculateUltimateAnswer();

        $this->assertEquals(42, $result);
    }

    private function calculateUltimateAnswer(): int
    {
        return 42;
    }

    public function test_that_mind_is_empty(): void
    {
        $mind = "";

        $this->assertEmpty($mind);
    }

    public function test_that_developer_does_not_sleep(): void
    {
        $whatDevsDo = ['debug', 'code', 'drink coffee'];

        $this->assertNotContains('sleep', $whatDevsDo);
    }
}
