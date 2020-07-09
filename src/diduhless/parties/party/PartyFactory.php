<?php

declare(strict_types=1);


namespace diduhless\parties\party;


class PartyFactory {

    /** @var Party[] */
    static private $parties = [];

    /**
     * @return Party[]
     */
    public static function getParties(): array {
        return self::$parties;
    }

    static public function getParty(string $id): ?Party {
        return self::$parties[$id];
    }

    static public function addParty(Party $party): void {
        self::$parties[$party->getId()] = $party;
    }

    static public function removeParty(Party $party): void {
        unset(self::$parties[$party->getId()]);
    }

}