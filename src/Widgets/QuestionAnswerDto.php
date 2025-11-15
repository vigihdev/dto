<?php

declare(strict_types=1);

namespace Vigihdev\Dto\Widgets;

use Vigihdev\Contracts\Widgets\QuestionAnswerInterface;
use Vigihdev\CoreRender\BaseDto;

final class QuestionAnswerDto extends BaseDto implements QuestionAnswerInterface
{

    public function __construct(
        private readonly string $question,
        private readonly array $answers
    ) {}

    public function getAnswers(): array
    {
        return $this->answers;
    }

    public function getQuestion(): string
    {
        return $this->question;
    }
}
