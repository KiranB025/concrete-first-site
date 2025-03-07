<?php
namespace Application\Block\FooterBlock;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    protected $btTable = 'btFooterBlock';
    protected $btInterfaceWidth = "400";
    protected $btInterfaceHeight = "400";

    public function getBlockTypeDescription()
    {
        return t('A customizable footer block');
    }

    public function getBlockTypeName()
    {
        return t('Footer Block');
    }

    public function view()
    {
        // current page theme path dynamically
        $view = $this->getViewObject();
        $themePath = $view->getThemePath(); 

        // Assign dynamic variables to the view
        $this->set('themePath', $themePath);
        $this->set('footerLogo', $themePath . '/images/footer-logo.png'); // Use this for the logo image
        $this->set('footerText', 'Your custom footer text'); // Example footer text
    }
}
