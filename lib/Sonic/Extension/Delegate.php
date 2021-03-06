<?php
namespace Sonic\Extension;
use Sonic\App, Sonic\Controller;

/**
 * Extension Delegate Interface
 *
 * @category Sonic
 * @package Extension
 * @author Craig Campbell
 */
abstract class Delegate
{
    /**
     * constructor
     *
     * @todo include this somewhere else?
     * @return void
     */
    public function __construct() {
        App::getInstance()->includeFile('Sonic/Extension/Transformation.php');
    }

    /**
     * called when an extension starts loading
     *
     * @return void
     */
    public function extensionStartedLoading() {}

    /**
     * called when an extension loaded a file
     *
     * @return void
     */
    public function extensionLoadedFile($filename) {}

    /**
     * called when an extension is finished loading
     *
     * @return void
     */
    public function extensionFinishedLoading() {}

    /**
     * adds a controller method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addControllerMethod($name, $function)
    {
        return Transformation::get('Sonic\Controller')->addMethod($name, $function);
    }

    /**
     * adds a static controller method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addStaticControllerMethod($name, $function)
    {
        return Transformation::get('Sonic\Controller')->addStaticMethod($name, $function);
    }

    /**
     * adds a view method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addViewMethod($name, $function)
    {
        return Transformation::get('Sonic\View')->addMethod($name, $function);
    }

    /**
     * adds a static view method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addStaticViewMethod($name, $function)
    {
        return Transformation::get('Sonic\View')->addStaticMethod($name, $function);
    }

    /**
     * adds an app method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addAppMethod($name, $function)
    {
        return Transformation::get('Sonic\App')->addMethod($name, $function);
    }

    /**
     * adds a static app method
     *
     * @param string $name
     * @param Closure $function
     */
    protected function _addStaticAppMethod($name, $function)
    {
        return Transformation::get('Sonic\App')->addStaticMethod($name, $function);
    }
}
