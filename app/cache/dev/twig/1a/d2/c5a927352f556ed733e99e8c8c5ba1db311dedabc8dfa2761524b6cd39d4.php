<?php

/* AgImAgenceBundle:Annonce:new.html.twig */
class __TwigTemplate_1ad2c5a927352f556ed733e99e8c8c5ba1db311dedabc8dfa2761524b6cd39d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Annonce creation</h1>
    <div class=\"ajout-annonce\">
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form');
        echo "
    </div>

    <ul class=\"record_actions\">

        <li>
            <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("annonce");
        echo "\">
                Back to the list
            </a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AgImAgenceBundle:Annonce:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  35 => 6,  31 => 4,  28 => 3,);
    }
}
