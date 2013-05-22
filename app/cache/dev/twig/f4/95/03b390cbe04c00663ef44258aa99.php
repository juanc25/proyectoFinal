<?php

/* CorrespondenciaBundle:CorrespondenciaRecibidaInterna:show.html.twig */
class __TwigTemplate_f49503b390cbe04c00663ef44258aa99 extends Twig_Template
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
        echo "<h1>CorrespondenciaRecibidaInterna</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fecha"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Hora</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "hora"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Radicado</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "radicado"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Alarma</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "alarma"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Remitente</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "remitente"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Fecha_doc</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechadoc"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Anexo</th>
            <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "anexo"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Serie</th>
            <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "serie"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Documento</th>
            <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "documento"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Renombre_doc</th>
            <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "renombredoc"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado"), "html", null, true);
        echo "</td>
        </tr>
        
        <tr>
            <th>Docmento</th>
            <td>
                ";
        // line 57
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "documento") != "")) {
            // line 58
            echo "                    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documentos/correspondenciaRecibida/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "documento"))), "html", null, true);
            echo "\">
                        Descargar Documento
                    </a>
                ";
        }
        // line 62
        echo "                
            </td>
        </tr>
        
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recibidainterna"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recibidainterna_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("recibidainterna_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CorrespondenciaBundle:CorrespondenciaRecibidaInterna:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 82,  150 => 81,  142 => 76,  134 => 71,  123 => 62,  115 => 58,  113 => 57,  104 => 51,  97 => 47,  90 => 43,  83 => 39,  76 => 35,  69 => 31,  62 => 27,  55 => 23,  48 => 19,  41 => 15,  34 => 11,  27 => 7,  19 => 1,);
    }
}
