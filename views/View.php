<?php

class View{
    /**
    *   @param array<string,mixed> $params
    */
    public function render(string $templateName, array $params = []) : void {
        $content = $this->renderTemplate($templateName, $params);
        $albumsList = $params["albumsList"];
        require_once "./views/templates/layout.php";
    }
    
    /**
    *   @param array<string,mixed> $params
    */
    private function renderTemplate(string $templateName, array $params): string {
        ob_start();
        extract($params);
        require_once "views/templates/$templateName.php";
        return ob_get_clean();
    }
}