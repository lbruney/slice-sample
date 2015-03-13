<?php
/**
 * SliceHelper.php is a simple helper class.
 *
 * @author lisabruney@y...com
 * @date 3/12/15
 * @time 7:19 PM
 */

class SliceHelper {

    /**
     * Returns the current action based on the URL.
     *
     * @return string
     */
    public static function getAction() {
        $url = self::getCurrentUrl();
        $urlParts = explode('/', $url);
        return isset($urlParts[0]) ? 'action'.ucfirst($urlParts[0]) : 'actionIndex';
    }

    /**
     * Returns the current URL.
     *
     * @return mixed
     */
    public static function getCurrentUrl() {
        return $_GET['url'];
    }

    /**
     * Returns a URL parameter with particular name.
     *
     * @param $name
     * @return null
     */
    public static function getParameterWithName($name) {
        return isset($_GET[$name]) ? $_GET[$name] : null;
    }

    /**
     * Returns the translated message string if there is one.
     *
     * @param $text, key text to translate
     * @param array $dynamic, variables to include in text
     * @return mixed
     */
    public static function message($text, array $dynamic = []) {
        $config = SliceApp::getConfiguration();
        $languageCode = isset($config['language']) ? $config['language'] : 'en';
        $languageSet = include('./lang/'.$languageCode.'.php');
        $text = isset($languageSet[$text]) ? $languageSet[$text] : $text;
        if (count($dynamic) > 0) {
            foreach($dynamic as $key=>$value) {
                $text = str_replace('{'.$key.'}', $value, $text);
            }
            return $text;
        } else {
            return $text;
        }
    }
} 