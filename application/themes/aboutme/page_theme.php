<?php
namespace Application\Theme\Aboutme;

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {
    public function registerAssets() {
        // Register common assets like CSS and JavaScript
        $this->requireAsset('javascript', 'jquery');
        // If you have other assets, add them here.
    }

    public function getThemeName() {
        return t('About Me Portfolio');
    }

    public function getThemeDescription() {
        return t('A personal portfolio and resume template converted to Concrete CMS.');
    }
}

