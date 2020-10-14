<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose(['html' => '@web/views/site/email'], ['nombre' =>  $this->name, 'correo' => $this->email, 'cuerpo' => $this->body])
            ->setFrom(['micolpa08@gmail.com'])
            ->setTo('linettekill1@gmail.com')
            ->setSubject('Nuevo correo de NCY1.COM')
            ->send();

    //     return Yii::$app->mailer->compose()
    //         ->setTo('linettekill1@gmail.com')
    //         ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
    //         // ->setReplyTo([$this->email => $this->name])
    //         ->setSubject('Nuevo correo de ncy1.com')
    //         ->setHtmlBody($this->render('/site/email', ['nombre' =>  $this->name, 'correo' => $this->email, 'cuerpo' => $this->body]))
    //         // ->setTextBody($this->body)
    //         ->send();
    }
}
