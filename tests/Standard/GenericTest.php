<?php

declare(strict_types=1);

namespace TwigCsFixer\Tests\Standard;

use PHPUnit\Framework\TestCase;
use TwigCsFixer\Sniff\BlankEOFSniff;
use TwigCsFixer\Sniff\DelimiterSpacingSniff;
use TwigCsFixer\Sniff\EmptyLinesSniff;
use TwigCsFixer\Sniff\IndentSniff;
use TwigCsFixer\Sniff\OperatorSpacingSniff;
use TwigCsFixer\Sniff\PunctuationSpacingSniff;
use TwigCsFixer\Sniff\TrailingCommaSingleLineSniff;
use TwigCsFixer\Sniff\TrailingSpaceSniff;
use TwigCsFixer\Standard\Generic;

final class GenericTest extends TestCase
{
    public function testGetSniffs(): void
    {
        $standard = new Generic();

        static::assertEquals([
            new BlankEOFSniff(),
            new DelimiterSpacingSniff(),
            new EmptyLinesSniff(),
            new IndentSniff(),
            new OperatorSpacingSniff(),
            new PunctuationSpacingSniff(),
            new TrailingCommaSingleLineSniff(),
            new TrailingSpaceSniff(),
        ], $standard->getSniffs());
    }
}
