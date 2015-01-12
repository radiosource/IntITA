<?php

/* user_welcome.txt */
class __TwigTemplate_8a395e5901c9b2e3b7f77c35413aca17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Subject: Добро пожаловать на форум «";
        echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
        echo "» — ";
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "

";
        // line 3
        echo (isset($context["WELCOME_MSG"]) ? $context["WELCOME_MSG"] : null);
        echo "

Пожалуйста, сохраните это сообщение. Параметры вашего аккаунта таковы:

----------------------------
URL форума: ";
        // line 8
        echo (isset($context["U_BOARD"]) ? $context["U_BOARD"] : null);
        echo "
----------------------------

Ваш пароль надёжно сохранен в нашей базе данных и не может быть извлечён из неё. Если Вы забудете свой пароль, то Вы сможете восстановить его, используя e-mail, указанный при регистрации.

Спасибо за регистрацию!

";
        // line 15
        echo (isset($context["EMAIL_SIG"]) ? $context["EMAIL_SIG"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "user_welcome.txt";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  35 => 8,  27 => 3,  19 => 1,);
    }
}
