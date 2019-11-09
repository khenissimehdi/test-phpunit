<?php
/**
 * TEST(WITH COLORS)
 *  phpunit --bootstrap bootstrap.php --testdox --color ./tests/SluggerTest.php
 */
use PHPUnit\Framework\TestCase;

class SluggerTest extends TestCase
{
    /**
     * @dataProvider providerSlugify
     */
    public function testSlugify($subject, $expected): void
    {

        $this->assertSame($expected, Slugger::slugify($subject), "«{$subject}»\nshould be slugified to\n«{$expected}»");
    }

    public function providerSlugify()
    {
        return [
            'identity' => [
                'abcdef',
                'abcdef'
            ],
            'case conversion' => [
                'aBcDEf',
                'abcdef'
            ],
            'simple spaces' => [
                'a b c d e f',
                'a-b-c-d-e-f'
            ],
            'leading and trailing separators removal' => [
                "\n \t   abcdef  \t\n    ",
                'abcdef'
            ],
            'simple spaces with leading and trailing separators' => [
                " \t\n  a b c d e f \t \n  ",
                'a-b-c-d-e-f'
            ],
            'multiple separators in various positions' => [
                " \n a \t   b \t\n  c  d  e   f",
                'a-b-c-d-e-f'
            ],
            'french characters transliteration' => [
                'àbçdêf',
                'abcdef'
            ],
            'emoji conversion' => [
                ' 😠 ab - 😓 - cd 😕 ef ',
                'ab-cd-ef'
            ],
            'special characters conversion' => [
                'a b~|`c-d$e%:.,f',
                'a-b-c-d-e-f'
            ],
            'leading and trailing special characters removal' => [
                '#_{a b~|`c-d$e%:.,f*^',
                'a-b-c-d-e-f'
            ],
            'html tags stripping' => [
                ' <em>abcdef</em>',
                'abcdef'
            ],
            'more html tags stripping' => [
                ' <em>abc</em>de<a href="about:blank">f</a>',
                'abcdef'
            ],
            'html entities conversion' => [
                ' a &laquo;b&raquo;c&nbsp;def',
                'a-b-c-def'
            ],
            'html entities conversion and tags removal' => [
                ' a &laquo;b&raquo;c&nbsp;de<span class="code">f</span>',
                'a-b-c-def'
            ],
            'full example' => [
                "😠#[ A &laquo;b\n \t\t&raquo;^^Ç&nbsp;dè<span class='code'>f</span> %*",
                'a-b-c-def'
            ],
        ];
    }
}
