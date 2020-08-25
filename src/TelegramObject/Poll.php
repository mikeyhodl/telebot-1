<?php

namespace WeStacks\TeleBot\TelegramObject;

use WeStacks\TeleBot\TelegramObject;

/**
 * This object contains information about a poll.
 * 
 * @property String                  $id                          Unique poll identifier
 * @property String                  $question                    Poll question, 1-255 characters
 * @property Array<PollOption>       $options                     List of poll options
 * @property Integer                 $total_voter_count           Total number of users that voted in the poll
 * @property Boolean                 $is_closed                   True, if the poll is closed
 * @property Boolean                 $is_anonymous                True, if the poll is anonymous
 * @property String                  $type                        Poll type, currently can be “regular” or “quiz”
 * @property Boolean                 $allows_multiple_answers     True, if the poll allows multiple answers
 * @property Integer                 $correct_option_id           _Optional_. 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
 * @property String                  $explanation                 _Optional_. Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property Array<MessageEntity>    $explanation_entities        _Optional_. Special entities like usernames, URLs, bot commands, etc. that appear in the explanation
 * @property Integer                 $open_period                 _Optional_. Amount of time in seconds the poll will be active after creation
 * @property Integer                 $close_date                  _Optional_. Point in time (Unix timestamp) when the poll will be automatically closed
 * 
 * @package WeStacks\TeleBot\TelegramObject
 */

class Poll extends TelegramObject
{
    protected function relations()
    {
        return [
            'id'                        => 'string',
            'question'                  => 'string',
            'options'                   => array(PollOption::class),
            'total_voter_count'         => 'integer',
            'is_closed'                 => 'boolean',
            'is_anonymous'              => 'boolean',
            'type'                      => 'string',
            'allows_multiple_answers'   => 'boolean',
            'correct_option_id'         => 'integer',
            'explanation'               => 'string',
            'explanation_entities'      => array(MessageEntity::class),
            'open_period'               => 'integer',
            'close_date'                => 'integer'
        ];
    }
}