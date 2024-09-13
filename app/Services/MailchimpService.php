<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpService
{
    protected $mailchimp;

    public function __construct()
    {
        $this->mailchimp = new ApiClient();
        $this->mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => config('services.mailchimp.server_prefix'),
        ]);
    }

    public function addToList($email, $listId)
    {
        try {
            return $this->mailchimp->lists->addListMember($listId, [
                'email_address' => $email,
                'status'        => 'subscribed',
            ]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
