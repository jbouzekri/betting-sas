<?php

namespace BettingSas\Bundle\GambleBundle\Gamble;

use BettingSas\Bundle\GambleBundle\Document\Gamble;
use BettingSas\Bundle\CompetitionBundle\Document\Event;

/**
 * GambleProcessorInterface : Process gamble
 * Calculate score and update gamble properties
 *
 * @author jobou
 */
interface GambleProcessorInterface
{
    /**
     * Update all the bets in a gamble having an event which has ended
     *
     * @param \BettingSas\Bundle\GambleBundle\Document\Gamble $gamble
     * @param \BettingSas\Bundle\CompetitionBundle\Document\Event $event
     */
    public function processGambleWithEvent(Gamble $gamble, Event $event);
}