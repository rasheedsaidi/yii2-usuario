<?php
namespace Da\User\Event;


use Da\User\Form\RecoveryForm;
use Da\User\Model\Token;
use yii\base\Event;

class ResetPasswordEvent extends Event
{
    protected $form;
    protected $token;

    public function __construct(RecoveryForm $form, Token $token, array $config = [])
    {
        $this->form = $form;
        $this->token = $token;

        parent::__construct($config);
    }

    public function getForm()
    {
        return $this->form;
    }

    public function getToken()
    {
        return $this->token;
    }
}