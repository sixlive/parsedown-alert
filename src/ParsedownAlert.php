<?php

namespace sixlive;

class ParsedownAlert extends \Parsedown
{
    public function __construct()
    {
        $this->BlockTypes[':'] = ['Alert'];
    }

    protected function blockAlert($block)
    {
        if (preg_match('/::: (.*)/', $block['text'], $matches)) {
            return [
                'char' => ':',
                'element' => [
                    'name' => 'div',
                    'text' => '',
                    'attributes' => [
                        'class' => "alert-{$matches[1]}",
                    ],
                ],
            ];
        }
    }

    protected function blockAlertContinue($line, $block)
    {
        if (isset($block['complete'])) {
            return;
        }

        if (preg_match('/:::/', $line['text'], $matches)) {
            $block['complete'] = true;

            return $block;
        }

        $block['element']['text'] .= $line['text']."\n";

        return $block;
    }

    protected function blockAlertComplete($block)
    {
        $block['element']['rawHtml'] = $this->text($block['element']['text']);
        unset($block['element']['text']);

        return $block;
    }
}
