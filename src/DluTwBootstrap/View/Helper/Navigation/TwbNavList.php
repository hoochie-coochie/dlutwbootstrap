<?php
namespace DluTwBootstrap\View\Helper\Navigation;

class TwbNavList extends AbstractNavHelper
{


    /* *********************** METHODS *************************** */

    /**
     * Renders helper
     * @param  \Zend\Navigation\Container $container [optional] container to render.
     *                                         Default is null, which indicates
     *                                         that the helper should render
     *                                         the container returned by {@link
     *                                         getContainer()}.
     * @return string helper output
     * @throws \Zend\View\Exception if unable to render
     */
    public function render(\Zend\Navigation\Container $container = null) {
        return $this->renderNavList($container);
    }

    public function renderNavList(\Zend\Navigation\Container $container = null, $well = true, $renderIcons = true) {
        if (null === $container) {
            $container = $this->getContainer();
        }
        $html   = '';
        //Well
        if($well) {
            $html   .= "\n" . '<div class="well" style="padding: 8px 0;">';
        }
        //Container
        $options    = array(
            'ulClass'   => 'nav nav-list',
        );
        $html   .= "\n" . $this->renderContainer($container, $renderIcons, true, $options);
        //Well (close div)
        if($well) {
            $html   .= "\n" . '</div>';
        }
        return $html;
    }
}