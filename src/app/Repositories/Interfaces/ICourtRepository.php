<?php

namespace App\Repositories\Interfaces;

interface ICourtRepository
{
    public function SaveCourt(string $name, string $description, string $address, string $contact_person, ?string $alt_contact_person, string $contact_phone, ?string $alt_contact_phone, string $contact_email, ?string $alt_contact_email, string $longitude, string $latitude, bool $status);

    public function UpdateCourt(string $name, string $description, string $address, string $contact_person, ?string $alt_contact_person, string $contact_phone, ?string $alt_contact_phone, string $contact_email, ?string $alt_contact_email, string $longitude, string $latitude, int $id);

    public function CheckNameExist(string $name, int $exclussion);

    public function CheckContactPersonExist(string $ContactPerson, int $exclussion);

    public function CheckAltContactPersonExist(string $AltContactPerson, int $exclussion);

    public function CheckContactEmailExist(string $ContactEmail, int $exclussion);

    public function CheckAltContactEmailExist(string $AltContactEmail, int $exclussion);

    public function CheckContactPhoneExist(string $ContactPhone, int $exclussion);

    public function CheckAltContactPhoneExist(string $AltContactPhone, int $exclussion);
}
