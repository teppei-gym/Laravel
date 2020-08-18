<?php

namespace App\Service\AssetsSupport;

use PHPUnit\Framework\Constraint\Callback;

class AssetPerRouteService
{
    private $callable = [];
    private $tags = [];

    public function __call($name, $args)
    {
        $tag = '<' . $name;

        foreach ($args[0] as $key => $val) {
            $tag .= ' ' . $key . '= "' . $val . '"';
        }

        $tag .= '>';

        $this->tags[] = $tag;
    }

    /**
     * ストアに格納したクロージャをルート名で実行し結果を返す
     * 
     * @return array
     */
    public function tags($routeName = '')
    {
        if (empty($routeName)) {
            $routeName = request()->route()->getname() ?? '';
        }

        if (isset($this->callable[$routeName])) $this->callable[$routeName]($this);

        return $this->tags;
    }

    /**
     * ルート名をkeyにしてクロージャを格納する
     * 
     * @return void
     */
    public function for($routeName, $callback)
    {
        $this->callable[$routeName] = $callback;
    }
}
