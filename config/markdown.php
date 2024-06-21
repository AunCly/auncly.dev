<?php

use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Block\ListBlock;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use League\CommonMark\Extension\Table\Table;
use League\CommonMark\Node\Block\Paragraph;

return [
    'attributes' => [
        'default_attributes' => [
            Heading::class => [
                'class' => static function (Heading $node) {
                    if ($node->getLevel() === 2) {
                        return ['font-dosis', 'dark:text-indigo-300', 'text-indigo-600', 'text-4xl', 'font-bold', 'my-5'];
                    } else {
                        return null;
                    }
                },
            ],
            Table::class => [
                'class' => 'table',
            ],
            Paragraph::class => [
                'class' => ['font-raleway dark:text-zinc-50 mt-5 text-lg text-black leading-8'],
            ],
            Link::class => [
                'class' => 'btn btn-link',
                'target' => '_blank',
            ],
            ListBlock::class => [
                'class' => 'dark:text-zinc-50 list-disc list-inside',
            ],
        ],
    ],
];
