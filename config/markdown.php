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
                        return ['font-title', 'dark:text-blue-300', 'text-bleu-800', 'text-xl', 'font-bold', 'my-5'];
                    } else {
                        return null;
                    }
                },
            ],
            Table::class => [
                'class' => 'table',
            ],
            Paragraph::class => [
                'class' => ['dark:text-zinc-50 mt-5 text-black'],
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
    'auncly' => [
        'attributes' => [
            'default_attributes' => [
                Heading::class => [
                    'class' => static function (Heading $node) {
                        if ($node->getLevel() === 2) {
                            return ['font-title', 'dark:text-blue-300', 'text-blue-800', 'text-xl', 'font-bold', 'my-5'];
                        } else {
                            return null;
                        }
                    },
                ],
                Table::class => [
                    'class' => 'table',
                ],
                Paragraph::class => [
                    'class' => ['dark:text-zinc-50 mt-5 text-black'],
                ],
                Link::class => [
                    'class' => 'btn btn-link text-blue-800 dark:text-blue-300',
                    'target' => '_blank',
                ],
                ListBlock::class => [
                    'class' => 'dark:text-zinc-50 list-disc list-inside',
                ],
            ],
        ],
    ],
    'gaelle' => [
        'attributes' => [
            'default_attributes' => [
                Heading::class => [
                    'class' => static function (Heading $node) {
                        if ($node->getLevel() === 1) {
                            return ['font-title', 'dark:text-red-600', 'text-red-600', 'text-2xl', 'font-bold', 'my-5'];
                        }
                        elseif ($node->getLevel() === 2) {
                            return ['font-title', 'dark:text-red-600', 'text-red-600', 'text-xl', 'font-bold', 'my-5'];
                        } else {
                            return null;
                        }
                    },
                ],
                Table::class => [
                    'class' => 'table',
                ],
                Paragraph::class => [
                    'class' => ['dark:text-zinc-50 mt-5 text-black'],
                ],
                Link::class => [
                    'class' => 'btn btn-link text-red-600 cursor-pointer',
                    'target' => '_blank',
                ],
                ListBlock::class => [
                    'class' => 'dark:text-zinc-50 list-disc list-inside',
                ],
            ],
        ],
    ]
];
