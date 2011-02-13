<?php
/**
 *
 */
class View {
    private $layoutFilename;
    private $templateFilename;

    public function __construct() {
    }

    public function getLayoutFilename() {
        return $this->layoutFilename;
    }

    public function setLayoutFilename($filename) {
        $this->layoutFilename = $filename;
    }

    public function getTemplateFilename() {
        return $this->templateFilename;
    }

    public function setTemplateFilename($filename) {
        $this->templateFilename = $filename;
    }

    public function render($params = array()) {
        extract($params);
        include $this->getLayoutFilename();
    }

    public function renderTemplate($params = array()) {
        extract($params);
        include $this->getTemplateFilename();
    }

}
