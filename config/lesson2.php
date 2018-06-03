<?php

return [
    'action' => [
        'place' => 'place',
        'human' => 'human'
    ],
    'place_questions' => [
        'future' => [
            [
                'ru' => 'когда',
                'en' => 'when'
            ],
            [
                'ru' => 'зачем',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ],
        'present' => [
            [
                'ru' => 'зачем',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ],
        'past' => [
            [
                'ru' => 'когда',
                'en' => 'when'
            ],
            [
                'ru' => 'зачем',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ],
    ],
    'pronouns' => [
        'i' => [
            'en' => [
                1 => 'I',
                2 => 'me'
            ],
            'ru' => [
                1 => 'я',
                2 => 'мне'
            ],
        ],
        'you' => [
            'en' => [
                1 => 'you',
                2 => 'you'
            ],
            'ru' => [
                1 => 'ты',
                2 => 'тебе'
            ],
        ],
        'we' => [
            'en' => [
                1 => 'we',
                2 => 'us'
            ],
            'ru' => [
                1 => 'мы',
                2 => 'нам'
            ],
        ],
        'they' => [
            'en' => [
                1 => 'they',
                2 => 'them'
            ],
            'ru' => [
                1 => 'они',
                2 => 'им'
            ],
        ],
        'he' => [
            'en' => [
                1 => 'he',
                2 => 'him'
            ],
            'ru' => [
                1 => 'он',
                2 => 'ему'
            ],
        ],
        'she' => [
            'en' => [
                1 => 'she',
                2 => 'her'
            ],
            'ru' => [
                1 => 'она',
                2 => 'ей'
            ],
        ]
    ],
    'prepositions' => [
        'in' => 'in',
        'to' => 'to',
        'from' => 'from',
        'with' => 'with'
    ],
    'verbs' => [
        'place' => [
            [
                'en' => 'love',
                'irregular' => false,
                'places' => [1, 2, 3],
                'ru' => [
                    'i' => [
                        'future' => 'полюблю ',
                        'present' => 'люблю ',
                        'past' => 'любил '
                    ],
                    'you' => [
                        'future' => 'полюбишь ',
                        'present' => 'любишь ',
                        'past' => 'любил '
                    ],
                    'we' => [
                        'future' => 'полюбим ',
                        'present' => 'любим ',
                        'past' => 'любили '
                    ],
                    'they' => [
                        'future' => 'полюбят ',
                        'present' => 'любят ',
                        'past' => 'любили '
                    ],
                    'he' => [
                        'future' => 'полюбит ',
                        'present' => 'любит ',
                        'past' => 'любил '
                    ],
                    'she' => [
                        'future' => 'полюбит ',
                        'present' => 'любит ',
                        'past' => 'любила '
                    ],
                ],
            ],
            [
                'en' => 'live',
                'pre' => 'in',
                'irregular' => false,
                'places' => [1, 2, 3],
                'ru' => [
                    'i' => [
                        'future' => 'буду жить в ',
                        'present' => 'живу в ',
                        'past' => 'жил в '
                    ],
                    'you' => [
                        'future' => 'будешь жить в ',
                        'present' => 'живёшь в ',
                        'past' => 'жил в '
                    ],
                    'we' => [
                        'future' => 'будем жить в ',
                        'present' => 'живём в',
                        'past' => 'жили в '
                    ],
                    'they' => [
                        'future' => 'будут жить в ',
                        'present' => 'живут в ',
                        'past' => 'жили в '
                    ],
                    'he' => [
                        'future' => 'будет жить в ',
                        'present' => 'живёт в ',
                        'past' => 'жил в '
                    ],
                    'she' => [
                        'future' => 'будет жить в ',
                        'present' => 'живёт в ',
                        'past' => 'жила в '
                    ],
                ],
            ],
            [
                'en' => 'work',
                'pre' => 'in',
                'irregular' => false,
                'places' => [1, 2, 3, 4, 5],
                'ru' => [
                    'i' => [
                        'future' => 'буду работать в ',
                        'present' => 'работаю в ',
                        'past' => 'работал в '
                    ],
                    'you' => [
                        'future' => 'будешь работать в ',
                        'present' => 'работаешь в ',
                        'past' => 'работал в '
                    ],
                    'we' => [
                        'future' => 'будем работать в ',
                        'present' => 'работаем в ',
                        'past' => 'работали в '
                    ],
                    'they' => [
                        'future' => 'будут работать в ',
                        'present' => 'работают в ',
                        'past' => 'работали в '
                    ],
                    'he' => [
                        'future' => 'будет работать в ',
                        'present' => 'работает в ',
                        'past' => 'работал в '
                    ],
                    'she' => [
                        'future' => 'будет работать в ',
                        'present' => 'работает в ',
                        'past' => 'работала в '
                    ],
                ],
            ],
            [
                'en' => 'open',
                'irregular' => false,
                'places' => [4, 5, 6, 9, 10],
                'ru' => [
                    'i' => [
                        'future' => 'открою ',
                        'present' => 'открываю ',
                        'past' => 'открыл '
                    ],
                    'you' => [
                        'future' => 'откроешь ',
                        'present' => 'открываешь ',
                        'past' => 'открыл '
                    ],
                    'we' => [
                        'future' => 'откроем ',
                        'present' => 'открываем ',
                        'past' => 'открыли '
                    ],
                    'they' => [
                        'future' => 'откроют ',
                        'present' => 'открывают ',
                        'past' => 'открыли '
                    ],
                    'he' => [
                        'future' => 'откроет ',
                        'present' => 'открывает ',
                        'past' => 'открыл '
                    ],
                    'she' => [
                        'future' => 'откроет ',
                        'present' => 'открывает ',
                        'past' => 'открыла '
                    ],
                ],
            ],
            [
                'en' => 'close',
                'irregular' => false,
                'places' => [4, 5, 6, 9, 10],
                'ru' => [
                    'i' => [
                        'future' => 'закрою ',
                        'present' => 'закрываю ',
                        'past' => 'закрыл '
                    ],
                    'you' => [
                        'future' => 'закроешь ',
                        'present' => 'закрываешь ',
                        'past' => 'закрыл '
                    ],
                    'we' => [
                        'future' => 'закроем ',
                        'present' => 'закрываем ',
                        'past' => 'закрыли '
                    ],
                    'they' => [
                        'future' => 'закроют ',
                        'present' => 'закрывают ',
                        'past' => 'закрыли '
                    ],
                    'he' => [
                        'future' => 'закроет ',
                        'present' => 'закрывает ',
                        'past' => 'закрыл '
                    ],
                    'she' => [
                        'future' => 'закроет ',
                        'present' => 'закрывает ',
                        'past' => 'закрыла '
                    ],
                ],
            ],
            [
                'en' => 'go',
                'pre' => 'to',
                'irregular' => 'went',
                'places' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                'ru' => [
                    'i' => [
                        'future' => 'пойду в(на) ',
                        'present' => 'иду в(на) ',
                        'past' => 'ходил в(на) '
                    ],
                    'you' => [
                        'future' => 'пойдешь в(на) ',
                        'present' => 'идешь в(на) ',
                        'past' => 'ходил в(на) '
                    ],
                    'we' => [
                        'future' => 'пойдем в(на) ',
                        'present' => 'идем в(на) ',
                        'past' => 'ходили в(на) '
                    ],
                    'they' => [
                        'future' => 'пойдут в(на) ',
                        'present' => 'идут в(на) ',
                        'past' => 'ходили в(на) '
                    ],
                    'he' => [
                        'future' => 'пойдет в(на) ',
                        'present' => 'идет в(на) ',
                        'past' => 'ходил в(на) '
                    ],
                    'she' => [
                        'future' => 'пойдет в(на) ',
                        'present' => 'идет в(на) ',
                        'past' => 'ходила в(на) '
                    ],
                ],
            ],
        ],
        'human' => [
            [
                'en' => 'give',
                'irregular' => 'gave',
                'pronouns' => [
                    'i' => 'мне',
                    'you' => 'тебе',
                    'we' => 'нам',
                    'they' => 'им',
                    'he' => 'ему',
                    'she' => 'ей'
                ],
                'things' => true,
                'questions' => [
                    'future' => [
                        [
                            'ru' => 'кто даст',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'где',
                            'en' => 'where'
                        ],
                        [
                            'ru' => 'когда',
                            'en' => 'when'
                        ],
                        [
                            'ru' => 'почему',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ],
                    'present' => [
                        [
                            'ru' => 'кто дает',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'где',
                            'en' => 'where'
                        ],
                        [
                            'ru' => 'почему',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ],
                    'past' => [
                        [
                            'ru' => 'кто давал',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'где',
                            'en' => 'where'
                        ],
                        [
                            'ru' => 'когда',
                            'en' => 'when'
                        ],
                        [
                            'ru' => 'почему',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ]
                ],
                'ru' => [
                    'i' => [
                        'future' => 'дам ',
                        'present' => 'даю ',
                        'past' => 'дал '
                    ],
                    'you' => [
                        'future' => 'дашь ',
                        'present' => 'даешь ',
                        'past' => 'дал '
                    ],
                    'we' => [
                        'future' => 'дадим ',
                        'present' => 'даем ',
                        'past' => 'дали '
                    ],
                    'they' => [
                        'future' => 'дадут ',
                        'present' => 'дают ',
                        'past' => 'дали '
                    ],
                    'he' => [
                        'future' => 'даст ',
                        'present' => 'дает ',
                        'past' => 'дал '
                    ],
                    'she' => [
                        'future' => 'даст ',
                        'present' => 'дает ',
                        'past' => 'дала '
                    ],
                ],
            ],
            [
                'en' => 'come',
                'pre' => 'to',
                'irregular' => 'came',
                'pronouns' => [
                    'i' => 'ко мне',
                    'you' => 'к тебе',
                    'we' => 'к нам',
                    'they' => 'к ним',
                    'he' => 'к нему',
                    'she' => 'к ней'
                ],
                'questions' => [
                    'future' => [
                        [
                            'ru' => 'кто придет',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'когда',
                            'en' => 'when'
                        ],
                        [
                            'ru' => 'зачем',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ],
                    'present' => [
                        [
                            'ru' => 'кто идет',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'зачем',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ],
                    'past' => [
                        [
                            'ru' => 'кто ходил',
                            'en' => 'who'
                        ],
                        [
                            'ru' => 'когда',
                            'en' => 'when'
                        ],
                        [
                            'ru' => 'зачем',
                            'en' => 'why'
                        ],
                        [
                            'ru' => 'как',
                            'en' => 'how'
                        ],
                    ]
                ],
                'ru' => [
                    'i' => [
                        'future' => 'приду ',
                        'present' => 'иду ',
                        'past' => 'ходил '
                    ],
                    'you' => [
                        'future' => 'придешь ',
                        'present' => 'идешь ',
                        'past' => 'ходил '
                    ],
                    'we' => [
                        'future' => 'придем ',
                        'present' => 'идем ',
                        'past' => 'ходили '
                    ],
                    'they' => [
                        'future' => 'придут ',
                        'present' => 'идут ',
                        'past' => 'ходил '
                    ],
                    'he' => [
                        'future' => 'придет ',
                        'present' => 'идет ',
                        'past' => 'ходил '
                    ],
                    'she' => [
                        'future' => 'придет ',
                        'present' => 'идет ',
                        'past' => 'ходила '
                    ],
                ],
            ],
        ]
    ],
    'human' => [
        'future' => [
            [
                'ru' => 'кто',
                'en' => 'who'
            ],
            [
                'ru' => 'где',
                'en' => 'where'
            ],
            [
                'ru' => 'когда',
                'en' => 'when'
            ],
            [
                'ru' => 'почему',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ],
        'present' => [
            [
                'ru' => 'кто',
                'en' => 'who'
            ],
            [
                'ru' => 'где',
                'en' => 'where'
            ],
            [
                'ru' => 'почему',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ],
        'past' => [
            [
                'ru' => 'кто',
                'en' => 'who'
            ],
            [
                'ru' => 'где',
                'en' => 'where'
            ],
            [
                'ru' => 'когда',
                'en' => 'when'
            ],
            [
                'ru' => 'почему',
                'en' => 'why'
            ],
            [
                'ru' => 'как',
                'en' => 'how'
            ],
        ]
    ],
    'places' => [
        1 => [
            'ru' => 'Минск(е)',
            'en' => 'Minsk'
        ],
        2 => [
            'ru' => 'Тайланд(е)',
            'en' => 'Thailand'
        ],
        3 => [
            'ru' => 'Амстердам(е)',
            'en' => 'Amsterdam'
        ],
        4 => [
            'ru' => 'дом(е)',
            'en' => 'the house'
        ],
        5 => [
            'ru' => 'офис(е)',
            'en' => 'the office'
        ],
        6 => [
            'ru' => 'бар(е)',
            'en' => 'the bar'
        ],
        7 => [
            'ru' => 'площадь(и)',
            'en' => 'the square'
        ],
        8 => [
            'ru' => 'аэропорт(у)',
            'en' => 'the airport'
        ],
        9 => [
            'ru' => 'магазин(е)',
            'en' => 'the shop'
        ],
        10 => [
            'ru' => 'кухн(я,ю)',
            'en' => 'the kitchen'
        ]
    ],
    'things' => [
        [
            'ru' => 'клавиатуру',
            'en' => 'a keyboard',
        ],
        [
            'ru' => 'кружку',
            'en' => 'a cup',
        ],
        [
            'ru' => 'доступ',
            'en' => 'access',
        ],
        [
            'ru' => 'ноутбук',
            'en' => 'a laptop',
        ],
        [
            'ru' => 'печеньку',
            'en' => 'a cookie',
        ],
        [
            'ru' => 'креветку',
            'en' => 'a shrimp',
        ],
        [
            'ru' => 'трусы',
            'en' => 'a underpants',
        ],
        [
            'ru' => 'гитару',
            'en' => 'the guitar',
        ],
        [
            'ru' => 'холодильник',
            'en' => 'a fridge',
        ],
        [
            'ru' => 'респиратор',
            'en' => 'a respirator',
        ],
        [
            'ru' => 'пиво',
            'en' => 'a beer',
        ]
    ]
];