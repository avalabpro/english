<?php namespace App\Traits;

trait GenerateTrait
{

    /**
     * @param array $lesson
     * @return array|void
     */
    public function generateWords(int $lesson)
    {
        switch ($lesson) {
            case 1:
                $result = $this->lesson1();
                break;
            case 2:
                $result = $this->lesson2();
                break;
        }

        return $result;
    }

    /**
     * @return array
     */
    public function lesson1()
    {
        $time = array_rand(config('constant.verb_times'), 1);
        $type = array_rand(config('constant.verb_types'), 1);
        $verb = config('words.verbs')[array_rand(config('words.verbs'))];

        $pronoun = array_rand(config('words.pronouns'), 1);

        $ru_verb = $verb['ru'][$pronoun][$time];

        if ($type == config('constant.verb_types.negation')) {
            $ru_verb = 'не ' . $ru_verb;
        }

        $ru_pronoun = config("words.pronouns.{$pronoun}.ru.1");

        $russian = "{$ru_pronoun} {$ru_verb}";
        $russian .= ($type == config('constant.verb_types.question')) ? '?' : '.';

        switch ($time) {
            case config('constant.verb_times.future'):
                $eng_action = 'will';
                break;
            case config('constant.verb_times.present'):
                if ($pronoun == 'he' || $pronoun == 'she') {
                    $eng_action = 'does';
                } else {
                    $eng_action = 'do';
                }
                break;
            case config('constant.verb_times.past'):
                $eng_action = 'did';
                break;
        }

        $en_pronoun = config("words.pronouns.{$pronoun}.en.1");

        switch ($type) {
            case config('constant.verb_types.question'):
                $english = "{$eng_action} {$en_pronoun} {$verb['en']}?";
                break;
            case config('constant.verb_types.statement'):
                $second = $verb['en'];
                if (($verb['en'] == 'go' || $verb['en'] == 'come') && $time == config('constant.verb_times.present')) {
                    $second = 'go (come)';
                }
                switch ($eng_action) {
                    case 'will':
                        $second = $eng_action . ' ' . $second . '.';
                        break;
                    case 'does':
                        // -ss, -x, -z, -ch, -sh или на -o будет es
                        $word_end_two = substr($second, -2);
                        $word_end_one = substr($word_end_two, -1);

                        if ($second == 'go (come)') {
                            $second = 'goes (comes)';
                        } else {
                            if (in_array($word_end_two, ['ss', 'ch', 'sh']) || in_array($word_end_one, ['x', 'z', 'o'])) {
                                $second .= 'es';
                            } else {
                                $second .= 's';
                            }
                        }
                        break;
                    case 'did':
                        if ($verb['irregular']) {
                            $second = $verb['irregular'];
                        } else {
                            $second .= (substr($second, -1) != 'e') ? 'ed.' : 'd.';
                        }
                        break;
                }
                $english = "{$en_pronoun} {$second}";
                break;
            case config('constant.verb_types.negation'):
                $english = "{$en_pronoun} {$eng_action} not {$verb['en']}.";
                break;
        }

        $english = str_replace(["do not", "does not", "did not"], ["don't", "doesn't", "didn't"], $english);

        return compact('russian', 'english');
    }

    public function lesson2()
    {
        $time = array_rand(config('constant.verb_times'), 1);
        $type = array_rand(config('constant.verb_types'), 1);
        //$type = 'negation';
        $action = array_rand(config('lesson2.action'), 1);
        // $action = 'human';

        $pronoun = array_rand(config('lesson2.pronouns'), 1);
        $ru_pronoun = config("words.pronouns.{$pronoun}.ru.1");
        $en_pronoun = config("words.pronouns.{$pronoun}.en.1");

        $verbs = config('lesson2.verbs')[$action];
        $verb = $verbs[array_rand($verbs)];

        $thing = [];
        if (isset($verb['things'])) {
            $thing = config('lesson2.things')[array_rand(config('lesson2.things'))];
        }

        switch ($action) {
            case config('lesson2.action.place'):
                $place_key = $verb['places'][array_rand($verb['places'], 1)];
                $place = config('lesson2.places')[$place_key];
                $txt_end_en = $place['en'];
                $txt_end_ru = $place['ru'];
                break;
            case config('lesson2.action.human'):
                $pronouns = config('lesson2.pronouns');
                unset($pronouns[$pronoun]);
                $pronoun_second_key = array_rand($pronouns, 1);

                $txt_end_en = config('lesson2.pronouns')[$pronoun_second_key]['en'][2];
                $txt_end_ru = $verb['pronouns'][$pronoun_second_key];
                break;
        }

        switch ($time) {
            case config('constant.verb_times.future'):
                $eng_action = 'will';
                break;
            case config('constant.verb_times.present'):
                if ($pronoun == 'he' || $pronoun == 'she') {
                    $eng_action = 'does';
                } else {
                    $eng_action = 'do';
                }
                break;
            case config('constant.verb_times.past'):
                $eng_action = 'did';
                break;
        }

        switch ($type) {
            case config('constant.verb_types.question'):
                if ($action == config('lesson2.action.place')) {
                    $questions = config('lesson2.place_questions')[$time];
                } else {
                    $questions = $verb['questions'][$time];
                }

                $question = $questions[array_rand($questions)];
                $english = $question['en'] . ' ' . $eng_action;
                $russian = $question['ru'];

                if ($question['en'] != 'who') {
                    $english .= ' ' . $en_pronoun . ' ' . $verb['en'];
                    $russian .= ' ' . $ru_pronoun . ' ' . $verb['ru'][$pronoun][$time];
                } else {
                    $english .= ' ' . $verb['en'];
                }

                if (isset($verb['pre'])) {
                    $english .= ' ' . $verb['pre'];
                }

                $english .= ' ' . $txt_end_en;
                $russian .= ' ' . $txt_end_ru;
                break;
            case config('constant.verb_types.statement'):
                $second = $verb['en'];
                switch ($eng_action) {
                    case 'will':
                        $second = $eng_action . ' ' . $second;
                        break;
                    case 'does':
                        // -ss, -x, -z, -ch, -sh или на -o будет es
                        $word_end_two = substr($second, -2);
                        $word_end_one = substr($word_end_two, -1);

                        if (in_array($word_end_two, ['ss', 'ch', 'sh']) || in_array($word_end_one, ['x', 'z', 'o'])) {
                            $second .= 'es';
                        } else {
                            $second .= 's';
                        }
                        break;
                    case 'did':
                        if ($verb['irregular']) {
                            $second = $verb['irregular'];
                        } else {
                            $second .= (substr($second, -1) != 'e') ? 'ed' : 'd';
                        }
                        break;
                }

                if (isset($verb['pre'])) {
                    $second .= ' ' . $verb['pre'];
                }

                $english = "{$en_pronoun} {$second} {$txt_end_en}";
                $russian = $ru_pronoun . ' ' . $verb['ru'][$pronoun][$time] . $txt_end_ru;
                break;
            case config('constant.verb_types.negation'):
                $english = "{$en_pronoun} {$eng_action} not {$verb['en']}";
                if (isset($verb['pre'])) {
                    $english .= ' ' . $verb['pre'];
                }
                $english .= ' ' . $txt_end_en;
                $russian = $ru_pronoun . ' не ' . $verb['ru'][$pronoun][$time] . $txt_end_ru;
                break;
        }

        if ($thing) {
            $english .= ' ' . $thing['en'];
            $russian .= ' ' . $thing['ru'];
        }

        if ($type == config('constant.verb_types.question')) {
            $english .= '?';
            $russian .= '?';
        } else {
            $english .= '.';
            $russian .= '.';
        }

        $english = str_replace(["do not", "does not", "did not"], ["don't", "doesn't", "didn't"], $english);

        return compact('russian', 'english');
    }
}