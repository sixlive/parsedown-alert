<?php

namespace Tests;

use sixlive\ParsedownAlert;
use PHPUnit\Framework\TestCase;

class ParsedownAlertTest extends TestCase
{
    /** @test */
    public function an_alert_is_rendered()
    {
        $parsedown = new ParsedownAlert;

        $renderedMarkdown = $parsedown->text(file_get_contents(__DIR__.'/Support/test.md'));

        $this->assertEquals("<h1>Hello!</h1>\n<p>This is a test of the alert component</p>\n<div class=\"alert-info\"><p><strong>BOLD</strong>\nSome info here!</p></div>", $renderedMarkdown);
    }
}
